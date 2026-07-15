<?php

session_start();
date_default_timezone_set('Asia/Kolkata');

function redirectWithStatus($type, $message)
{
    $_SESSION['book_call_status'] = [
        'type' => $type,
        'message' => $message,
    ];

    header('Location: index.php#book-call-widget');
    exit;
}

function googleCalendarIsReady(array $googleCalendarConfig)
{
    return !empty($googleCalendarConfig['enabled'])
        && !empty($googleCalendarConfig['client_id'])
        && !empty($googleCalendarConfig['client_secret'])
        && !empty($googleCalendarConfig['refresh_token'])
        && !empty($googleCalendarConfig['calendar_id']);
}

function performJsonRequest($url, array $headers, $body = null, $method = 'POST')
{
    if (!function_exists('curl_init')) {
        return [
            'success' => false,
            'status_code' => 0,
            'body' => null,
            'error' => 'cURL extension is not enabled on this server.',
        ];
    }

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    if ($body !== null) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
    }

    $responseBody = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($responseBody === false) {
        return [
            'success' => false,
            'status_code' => $statusCode,
            'body' => null,
            'error' => $curlError ?: 'Unknown cURL error.',
        ];
    }

    $decoded = json_decode($responseBody, true);

    return [
        'success' => $statusCode >= 200 && $statusCode < 300,
        'status_code' => $statusCode,
        'body' => is_array($decoded) ? $decoded : null,
        'error' => $statusCode >= 200 && $statusCode < 300 ? '' : $responseBody,
    ];
}

function fetchGoogleAccessToken(array $googleCalendarConfig)
{
    if (!function_exists('curl_init')) {
        return [null, 'cURL extension is not enabled on this server.'];
    }

    $ch = curl_init('https://oauth2.googleapis.com/token');
    $postFields = http_build_query([
        'client_id' => $googleCalendarConfig['client_id'],
        'client_secret' => $googleCalendarConfig['client_secret'],
        'refresh_token' => $googleCalendarConfig['refresh_token'],
        'grant_type' => 'refresh_token',
    ]);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);

    $responseBody = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($responseBody === false) {
        return [null, $curlError ?: 'Could not connect to Google OAuth.'];
    }

    $decoded = json_decode($responseBody, true);

    if ($statusCode < 200 || $statusCode >= 300 || empty($decoded['access_token'])) {
        $errorMessage = is_array($decoded) && !empty($decoded['error_description'])
            ? $decoded['error_description']
            : 'Google OAuth token request failed.';

        return [null, $errorMessage];
    }

    return [$decoded['access_token'], null];
}

function createGoogleMeetLink(array $googleCalendarConfig, DateTime $bookingDateTime, $name, $email, $meetingAgenda)
{
    list($accessToken, $tokenError) = fetchGoogleAccessToken($googleCalendarConfig);

    if (!$accessToken) {
        return [null, $tokenError ?: 'Could not fetch Google access token.'];
    }

    $timezone = $googleCalendarConfig['timezone'] ?? 'Asia/Kolkata';
    $durationMinutes = max(15, (int) ($googleCalendarConfig['meeting_duration_minutes'] ?? 30));
    $startDateTime = clone $bookingDateTime;
    $endDateTime = clone $bookingDateTime;
    $endDateTime->modify('+' . $durationMinutes . ' minutes');
    $requestId = 'meet-' . bin2hex(random_bytes(8));

    $eventPayload = [
        'summary' => 'Book a Call - ' . $name,
        'description' => 'Booking created from Technofra website for ' . $name . ' (' . $email . '). Agenda: ' . $meetingAgenda,
        'start' => [
            'dateTime' => $startDateTime->format(DateTime::RFC3339),
            'timeZone' => $timezone,
        ],
        'end' => [
            'dateTime' => $endDateTime->format(DateTime::RFC3339),
            'timeZone' => $timezone,
        ],
        'conferenceData' => [
            'createRequest' => [
                'requestId' => $requestId,
                'conferenceSolutionKey' => [
                    'type' => 'hangoutsMeet',
                ],
            ],
        ],
    ];

    $calendarId = rawurlencode($googleCalendarConfig['calendar_id']);
    $createUrl = 'https://www.googleapis.com/calendar/v3/calendars/' . $calendarId . '/events?conferenceDataVersion=1&sendUpdates=none';

    $createResponse = performJsonRequest(
        $createUrl,
        [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json',
        ],
        $eventPayload,
        'POST'
    );

    if (!$createResponse['success'] || empty($createResponse['body'])) {
        return [null, 'Google Calendar event create failed: ' . ($createResponse['error'] ?: 'Unknown error.')];
    }

    $eventBody = $createResponse['body'];
    $eventId = $eventBody['id'] ?? '';
    $meetLink = $eventBody['hangoutLink'] ?? '';

    if (!$meetLink && !empty($eventBody['conferenceData']['entryPoints'])) {
        foreach ($eventBody['conferenceData']['entryPoints'] as $entryPoint) {
            if (($entryPoint['entryPointType'] ?? '') === 'video' && !empty($entryPoint['uri'])) {
                $meetLink = $entryPoint['uri'];
                break;
            }
        }
    }

    if (!$meetLink && $eventId !== '') {
        $fetchUrl = 'https://www.googleapis.com/calendar/v3/calendars/' . $calendarId . '/events/' . rawurlencode($eventId) . '?conferenceDataVersion=1';

        for ($attempt = 0; $attempt < 3; $attempt++) {
            usleep(400000);

            $fetchResponse = performJsonRequest(
                $fetchUrl,
                [
                    'Authorization: Bearer ' . $accessToken,
                    'Content-Type: application/json',
                ],
                null,
                'GET'
            );

            if (!$fetchResponse['success'] || empty($fetchResponse['body'])) {
                continue;
            }

            $fetchedBody = $fetchResponse['body'];
            $meetLink = $fetchedBody['hangoutLink'] ?? '';

            if (!$meetLink && !empty($fetchedBody['conferenceData']['entryPoints'])) {
                foreach ($fetchedBody['conferenceData']['entryPoints'] as $entryPoint) {
                    if (($entryPoint['entryPointType'] ?? '') === 'video' && !empty($entryPoint['uri'])) {
                        $meetLink = $entryPoint['uri'];
                        break;
                    }
                }
            }

            if ($meetLink) {
                break;
            }
        }
    }

    if (!$meetLink) {
        return [null, 'Google Calendar event created, but Meet link was not returned.'];
    }

    return [[
        'meet_link' => $meetLink,
        'event_id' => $eventId,
        'duration_minutes' => $durationMinutes,
    ], null];
}

function renderEmailInfoRow($label, $value)
{
    return '
        <tr>
            <td style="padding:12px 10px;border-bottom:1px solid #e8edf2;font-size:13px;font-weight:700;color:#3f4348;width:120px;vertical-align:top;word-break:break-word;">' . $label . '</td>
            <td style="padding:12px 10px;border-bottom:1px solid #e8edf2;font-size:13px;line-height:1.7;color:#60656b;word-break:break-word;">' . $value . '</td>
        </tr>
    ';
}

function renderBookCallEmail(array $options)
{
    $preheader = $options['preheader'];
    $headline = $options['headline'];
    $lead = $options['lead'];
    $ctaLabel = $options['cta_label'];
    $ctaHref = $options['cta_href'];
    $summaryTitle = $options['summary_title'];
    $summaryRows = $options['summary_rows'];
    $stepsTitle = $options['steps_title'];
    $steps = $options['steps'];
    $footerTitle = $options['footer_title'];
    $footerLinks = $options['footer_links'];
    $footerNote = $options['footer_note'];
    $preheaderDate = $options['preheader_date'] ?? '';
    $introHtml = $options['intro_html'] ?? '';
    $closingHtml = $options['closing_html'] ?? '';
    $accentColor = $options['accent_color'] ?? '#003366';

    $summaryHtml = '';
    foreach ($summaryRows as $row) {
        $summaryHtml .= renderEmailInfoRow($row['label'], $row['value']);
    }

    $stepsHtml = '';
    foreach ($steps as $step) {
        $stepsHtml .= '
            <tr>
                <td style="padding:0 0 18px;vertical-align:top;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;">
                        <tr>
                            <td style="width:42px;vertical-align:top;padding-right:14px;">
                                <div style="width:34px;height:34px;border:1px solid ' . $accentColor . ';color:' . $accentColor . ';font-size:18px;font-weight:700;line-height:34px;text-align:center;">' . $step['icon'] . '</div>
                            </td>
                            <td style="vertical-align:top;">
                                <div style="font-size:14px;font-weight:700;line-height:1.5;color:#3f4348;margin-bottom:4px;">' . $step['title'] . '</div>
                                <div style="font-size:13px;line-height:1.7;color:#737980;">' . $step['text'] . '</div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        ';
    }

    $footerLinksHtml = '';
    $footerLinksCount = count($footerLinks);
    foreach ($footerLinks as $index => $link) {
        $footerLinksHtml .= '<a href="' . $link['href'] . '" style="color:' . $accentColor . ';text-decoration:none;">' . $link['label'] . '</a>';
        if ($index < $footerLinksCount - 1) {
            $footerLinksHtml .= '<span style="color:#a0a0a0;padding:0 8px;">|</span>';
        }
    }

    return '
    <div style="margin:0;padding:12px 0;background:#f3f3f3;font-family:Arial,Helvetica,sans-serif;color:#4a4a4a;">
        <div style="width:100%;max-width:560px;margin:0 auto;background:#ffffff;border-radius:18px;overflow:hidden;">
            <div style="padding:16px 16px 0;font-size:11px;color:#8a8a8a;">
                <table role="presentation" style="width:100%;border-collapse:collapse;table-layout:fixed;">
                    <tr>
                        <td style="font-size:11px;line-height:1.5;color:#8a8a8a;padding:0 8px 8px 0;">' . $preheader . '</td>
                        <td style="font-size:11px;line-height:1.5;color:#8a8a8a;text-align:right;white-space:nowrap;padding:0 0 8px 8px;">' . $preheaderDate . '</td>
                    </tr>
                </table>
            </div>

            <div style="padding:28px 20px 8px;">
                <div style="margin-bottom:22px;">
                    <img src="https://technofra.com/logo-black.png" alt="Technofra" style="width:250px;height:auto;display:block;">
                </div>
                <h1 style="margin:0 0 20px;font-size:24px;line-height:1.25;color:#3f4348;font-weight:700;">' . $headline . '</h1>
                <div style="margin:0;font-size:15px;line-height:1.7;color:#60656b;">' . $lead . '</div>
                ' . $introHtml . '
                <a href="' . $ctaHref . '" style="display:inline-block;margin-top:24px;background:' . $accentColor . ';color:#ffffff;text-decoration:none;padding:14px 24px;font-size:14px;line-height:1;box-shadow:0 1px 3px rgba(0,0,0,0.12);border-radius:12px;">' . $ctaLabel . '</a>
            </div>

            <div style="margin:28px 16px 24px;border:1px solid rgba(0,51,102,0.18);border-radius:16px;padding:22px 16px 18px;">
                <h2 style="margin:0 0 18px;font-size:18px;font-weight:700;color:#3f4348;">' . $summaryTitle . '</h2>
                <table role="presentation" style="width:100%;border-collapse:collapse;margin-bottom:22px;table-layout:fixed;">
                    ' . $summaryHtml . '
                </table>

                <div style="border-top:1px solid #e6e6e6;padding-top:20px;">
                    <h3 style="margin:0 0 20px;font-size:16px;font-weight:700;color:#3f4348;">' . $stepsTitle . '</h3>
                    <table role="presentation" style="width:100%;border-collapse:collapse;">
                        ' . $stepsHtml . '
                    </table>
                </div>
            </div>

            <div style="padding:0 20px 22px;">
                <h3 style="margin:0 0 16px;font-size:15px;color:#555b61;">' . $footerTitle . '</h3>
                <div style="font-size:14px;line-height:1.8;">' . $footerLinksHtml . '</div>
            </div>

            <div style="margin:12px 16px 0;background:#f4f6f8;border-radius:14px;padding:20px 16px 18px;font-size:11px;line-height:1.8;color:#8a9198;">
                ' . $closingHtml . '
                <div>' . $footerNote . '</div>
            </div>
        </div>
    </div>
    ';
}

function resolveTimezone($timezone)
{
    $timezone = trim((string) $timezone);

    if ($timezone === '') {
        return null;
    }

    try {
        return new DateTimeZone($timezone);
    } catch (Exception $exception) {
        return null;
    }
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectWithStatus('error', 'Invalid request method.');
}

$configPath = __DIR__ . '/book-call-config.php';
if (!file_exists($configPath)) {
    redirectWithStatus('error', 'Booking configuration file is missing.');
}

$config = require $configPath;

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$meetingAgenda = trim($_POST['meeting_agenda'] ?? '');
$bookingDate = trim($_POST['booking_date'] ?? '');
$bookingTime = trim($_POST['booking_time'] ?? '');
$userTimezone = trim($_POST['user_timezone'] ?? '');

if ($name === '' || $email === '' || $phone === '' || $meetingAgenda === '' || $bookingDate === '' || $bookingTime === '') {
    redirectWithStatus('error', 'Please fill all booking details before submitting the form.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirectWithStatus('error', 'Please enter a valid email address.');
}

if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    redirectWithStatus('error', 'Please enter a valid phone number.');
}

$selectedDate = DateTime::createFromFormat('Y-m-d', $bookingDate);
$selectedTime = DateTime::createFromFormat('H:i', $bookingTime);

if (!$selectedDate || $selectedDate->format('Y-m-d') !== $bookingDate) {
    redirectWithStatus('error', 'Selected date is invalid.');
}

if (!$selectedTime || $selectedTime->format('H:i') !== $bookingTime) {
    redirectWithStatus('error', 'Selected time is invalid.');
}

$now = new DateTime('now');
$bookingDateTime = DateTime::createFromFormat('Y-m-d H:i', $bookingDate . ' ' . $bookingTime);

if (!$bookingDateTime || $bookingDateTime < $now) {
    redirectWithStatus('error', 'Please select a future date and time.');
}

$db = $config['db'] ?? [];
$mailConfig = $config['mail'] ?? [];
$googleCalendarConfig = $config['google_calendar'] ?? [];

mysqli_report(MYSQLI_REPORT_OFF);

$dbHost = trim((string) ($db['host'] ?? 'localhost'));
$dbPort = (int) ($db['port'] ?? 3306);
$dbUser = (string) ($db['username'] ?? 'root');
$dbPass = (string) ($db['password'] ?? '');
$dbName = (string) ($db['database'] ?? '');

$hostCandidates = array_values(array_unique(array_filter([
    $dbHost,
    $dbHost === '127.0.0.1' ? 'localhost' : null,
    $dbHost === 'localhost' ? '127.0.0.1' : null,
])));

$mysqli = null;
$lastConnectError = '';

foreach ($hostCandidates as $hostCandidate) {
    $connection = @new mysqli(
        $hostCandidate,
        $dbUser,
        $dbPass,
        $dbName,
        $dbPort
    );

    if (!$connection->connect_errno) {
        $mysqli = $connection;
        break;
    }

    $lastConnectError = sprintf(
        '[%s:%d] (%d) %s',
        $hostCandidate,
        $dbPort,
        $connection->connect_errno,
        $connection->connect_error
    );
}

if (!$mysqli instanceof mysqli) {
    error_log('Book call DB connection failed: ' . $lastConnectError);
    redirectWithStatus('error', 'Database connection failed. Please check host, database name, username, and password in book-call-config.php.');
}

$mysqli->set_charset('utf8mb4');

$createTableSql = "CREATE TABLE IF NOT EXISTS bookcall (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    phone VARCHAR(25) NOT NULL,
    meeting_agenda TEXT NOT NULL,
    booking_date DATE NOT NULL,
    booking_time TIME NOT NULL,
    booking_datetime DATETIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$mysqli->query($createTableSql)) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not create the bookcall table in MySQL.');
}

$mysqli->query('ALTER TABLE bookcall ADD UNIQUE KEY unique_booking_slot (booking_date, booking_time)');
$mysqli->query("ALTER TABLE bookcall ADD COLUMN meeting_agenda TEXT NOT NULL AFTER phone");

$bookingDateForDb = $bookingDateTime->format('Y-m-d');
$bookingTimeForDb = $bookingDateTime->format('H:i:s');
$bookingDateTimeForDb = $bookingDateTime->format('Y-m-d H:i:s');

$slotCheck = $mysqli->prepare('SELECT id FROM bookcall WHERE booking_date = ? AND booking_time = ? LIMIT 1');

if (!$slotCheck) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not verify the selected slot.');
}

$slotCheck->bind_param('ss', $bookingDateForDb, $bookingTimeForDb);
$slotCheck->execute();
$slotCheck->store_result();

if ($slotCheck->num_rows > 0) {
    $slotCheck->close();
    $mysqli->close();
    redirectWithStatus('error', 'This date and time is already booked. Please select another slot.');
}

$slotCheck->close();

$insert = $mysqli->prepare(
    'INSERT INTO bookcall (name, email, phone, meeting_agenda, booking_date, booking_time, booking_datetime) VALUES (?, ?, ?, ?, ?, ?, ?)'
);

if (!$insert) {
    $mysqli->close();
    redirectWithStatus('error', 'Could not prepare the booking save query.');
}

$insert->bind_param(
    'sssssss',
    $name,
    $email,
    $phone,
    $meetingAgenda,
    $bookingDateForDb,
    $bookingTimeForDb,
    $bookingDateTimeForDb
);

if (!$insert->execute()) {
    $insert->close();
    $mysqli->close();
    redirectWithStatus('error', 'This slot may already be booked. Please choose another date or time and try again.');
}

$insert->close();
$mysqli->close();

$formattedDate = $bookingDateTime->format('d M Y');
$formattedTime = $bookingDateTime->format('H:i');
$formattedTimeIst = $formattedTime . ' IST';
$clientTimezoneObject = resolveTimezone($userTimezone);
$clientDateTime = clone $bookingDateTime;
$clientTimezoneLabel = 'IST';

if ($clientTimezoneObject instanceof DateTimeZone) {
    $clientDateTime->setTimezone($clientTimezoneObject);
    $clientTimezoneLabel = $clientDateTime->format('T');
}

$clientFormattedDate = $clientDateTime->format('d M Y');
$clientFormattedTime = $clientDateTime->format('H:i') . ' ' . $clientTimezoneLabel;
$mailProblem = false;
$meetData = null;
$meetProblem = false;
$meetMessage = '';

if (googleCalendarIsReady($googleCalendarConfig)) {
    list($meetData, $meetError) = createGoogleMeetLink($googleCalendarConfig, $bookingDateTime, $name, $email, $meetingAgenda);

    if (!$meetData) {
        $meetProblem = true;
        $meetMessage = $meetError ?: 'Google Meet link could not be created.';
        error_log('Book call Google Meet error: ' . $meetMessage);
    }
}

$smtpReady = !empty($mailConfig['host']) && !empty($mailConfig['username']) && !empty($mailConfig['password']);

if ($smtpReady) {
    require __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
    require __DIR__ . '/PHPMailer/class.phpmailer.php';
    require __DIR__ . '/PHPMailer/class.smtp.php';

    $meetSectionAdmin = '';
    $meetSectionClient = '';
    $safeName = htmlspecialchars($name);
    $safeEmail = htmlspecialchars($email);
    $safePhone = htmlspecialchars($phone);
    $safeMeetingAgenda = nl2br(htmlspecialchars($meetingAgenda));
    $safeFormattedDate = htmlspecialchars($formattedDate);
    $safeFormattedTime = htmlspecialchars($formattedTimeIst);
    $safeClientFormattedDate = htmlspecialchars($clientFormattedDate);
    $safeClientFormattedTime = htmlspecialchars($clientFormattedTime);
    $safeSubmittedAt = htmlspecialchars((new DateTime('now'))->format('d M Y H:i'));
    $safeUserTimezone = htmlspecialchars($clientTimezoneObject instanceof DateTimeZone ? $clientTimezoneObject->getName() : 'Asia/Kolkata');

    if (!empty($meetData['meet_link'])) {
        $safeMeetLink = htmlspecialchars($meetData['meet_link']);
        $meetSectionAdmin = [
            ['label' => 'Google Meet Link', 'value' => '<a href="' . $safeMeetLink . '" style="color:#003366;text-decoration:none;">Join Google Meet</a>'],
            ['label' => 'Meeting Duration', 'value' => (int) ($meetData['duration_minutes'] ?? 30) . ' minutes'],
        ];
        $meetSectionClient = [
            ['label' => 'Google Meet Link', 'value' => '<a href="' . $safeMeetLink . '" style="color:#003366;text-decoration:none;">Join Google Meet</a>'],
            ['label' => 'Meeting Note', 'value' => 'Please join the call using the above link at your selected time.'],
        ];
    } elseif (googleCalendarIsReady($googleCalendarConfig)) {
        $meetSectionAdmin = [
            ['label' => 'Google Meet Link', 'value' => 'Could not be created automatically. Please create it manually.'],
        ];
        $meetSectionClient = [
            ['label' => 'Google Meet Link', 'value' => 'We could not attach the Google Meet link automatically right now. Our team will share it with you shortly.'],
        ];
    }

    $adminSummaryRows = array_merge([
        ['label' => 'Name', 'value' => $safeName],
        ['label' => 'Email', 'value' => $safeEmail],
        ['label' => 'Phone', 'value' => $safePhone],
        ['label' => 'Meeting Agenda', 'value' => $safeMeetingAgenda],
        ['label' => 'Booking Date', 'value' => $safeFormattedDate],
        ['label' => 'Booking Time', 'value' => $safeFormattedTime],
        ['label' => 'Client Timezone', 'value' => $safeUserTimezone],
    ], $meetSectionAdmin, [
        ['label' => 'Submitted At', 'value' => $safeSubmittedAt],
    ]);

    $clientSummaryRows = array_merge([
        ['label' => 'Booking Date', 'value' => $safeClientFormattedDate],
        ['label' => 'Booking Time', 'value' => $safeClientFormattedTime],
        ['label' => 'Meeting Agenda', 'value' => $safeMeetingAgenda],
        ['label' => 'Contact Email', 'value' => $safeEmail],
        ['label' => 'Contact Phone', 'value' => $safePhone],
    ], $meetSectionClient);

    $adminBody = renderBookCallEmail([
        'preheader' => 'A new call booking has been submitted on the Technofra website.',
        'headline' => 'Appointment Scheduled via Website – Technofra',
        'lead' => 'A new enquiry has just been scheduled. Below is the complete booking summary captured from the website form.',
        'cta_label' => 'Review Booking',
        'cta_href' => 'mailto:' . $safeEmail,
        'summary_title' => 'Booking Summary',
        'summary_rows' => $adminSummaryRows,
        'steps_title' => 'Recommended Next Steps',
        'steps' => [
            ['icon' => '1', 'title' => 'Review the client details', 'text' => 'Verify the submitted contact information and preferred meeting slot.'],
            ['icon' => '2', 'title' => 'Prepare for the discussion', 'text' => 'Check project context so the conversation starts with the right direction.'],
            ['icon' => '3', 'title' => 'Connect on time', 'text' => 'Use the shared meeting details and follow up quickly if anything needs rescheduling.'],
        ],
        'footer_title' => 'Quick Actions',
        'footer_links' => [
            ['label' => 'Reply to Client', 'href' => 'mailto:' . $safeEmail],
            ['label' => 'Visit Website', 'href' => 'https://technofra.com/'],
            ['label' => 'Support Team', 'href' => 'mailto:' . htmlspecialchars($mailConfig['from_email'])],
        ],
        'footer_note' => 'This notification was generated automatically after a successful booking submission on the Technofra website.',
        'preheader_date' => $safeSubmittedAt,
        'accent_color' => '#003366',
    ]);

    $clientBody = renderBookCallEmail([
        'preheader' => 'Your call with Technofra has been booked successfully.',
        'headline' => 'Your Call with Technofra is Confirmed',
        'lead' => 'Thank you for scheduling a call with Technofra. Your booking has been received successfully, and our team is looking forward to speaking with you.',
        'intro_html' => '<p style="margin:18px 0 0;font-size:14px;line-height:1.8;color:#60656b;">Hi ' . $safeName . ', here are your confirmed booking details.</p>',
        'cta_label' => 'Contact Technofra',
        'cta_href' => 'mailto:' . htmlspecialchars($mailConfig['from_email']),
        'summary_title' => 'Call Details',
        'summary_rows' => $clientSummaryRows,
        'steps_title' => 'What Happens Next',
        'steps' => [
            ['icon' => '1', 'title' => 'Keep your slot reserved', 'text' => 'Please be available on the selected date and time so we can start on schedule.'],
            ['icon' => '2', 'title' => 'Join using the shared details', 'text' => 'If a Google Meet link is included above, simply open it a few minutes before the call starts.'],
            ['icon' => '3', 'title' => 'Expect a focused discussion', 'text' => 'Our team will connect with you to understand your goals and guide the next steps clearly.'],
        ],
        'footer_title' => 'Helpful Links',
        'footer_links' => [
            ['label' => 'Email Us', 'href' => 'mailto:' . htmlspecialchars($mailConfig['from_email'])],
            ['label' => 'Visit Website', 'href' => 'https://technofra.com/'],
            ['label' => 'Call Support', 'href' => 'tel:' . preg_replace('/\s+/', '', $safePhone)],
        ],
        'footer_note' => 'If you need to update your booking, please reply to this email and our team will assist you.',
        'preheader_date' => $safeSubmittedAt,
        'closing_html' => '<div style="margin-bottom:14px;">Regards,<br>Technofra Team</div>',
        'accent_color' => '#003366',
    ]);

    $adminMailer = new PHPMailer();
    $adminMailer->isSMTP();
    $adminMailer->Host = $mailConfig['host'];
    $adminMailer->SMTPAuth = true;
    $adminMailer->Username = $mailConfig['username'];
    $adminMailer->Password = $mailConfig['password'];
    $adminMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $adminMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $adminMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $adminMailer->addAddress($mailConfig['admin_email'], $mailConfig['admin_name'] ?? 'Admin');
    $adminMailer->addReplyTo($email, $name);
    $adminMailer->isHTML(true);
    $adminMailer->Subject = 'New Book A Call Request';
    $adminMailer->Body = $adminBody;

    $clientMailer = new PHPMailer();
    $clientMailer->isSMTP();
    $clientMailer->Host = $mailConfig['host'];
    $clientMailer->SMTPAuth = true;
    $clientMailer->Username = $mailConfig['username'];
    $clientMailer->Password = $mailConfig['password'];
    $clientMailer->SMTPSecure = $mailConfig['encryption'] ?? 'tls';
    $clientMailer->Port = (int) ($mailConfig['port'] ?? 587);
    $clientMailer->setFrom($mailConfig['from_email'], $mailConfig['from_name']);
    $clientMailer->addAddress($email, $name);
    $clientMailer->isHTML(true);
    $clientMailer->Subject = 'Thank you for booking a call with Technofra';
    $clientMailer->Body = $clientBody;

    $adminMailSent = $adminMailer->send();
    $clientMailSent = $clientMailer->send();

    if (!$adminMailSent || !$clientMailSent) {
        $mailProblem = true;
    }
} else {
    $mailProblem = true;
}

if ($mailProblem && $meetProblem) {
    redirectWithStatus('error', 'Booking was saved, but confirmation emails and the Google Meet link could not be completed automatically. Please review SMTP and Google Calendar settings in book-call-config.php.');
}

if ($mailProblem) {
    redirectWithStatus('error', 'Booking was saved, but admin/client confirmation emails could not be sent. Please review SMTP settings in book-call-config.php.');
}

if ($meetProblem) {
    redirectWithStatus('success', 'Booking submitted successfully and confirmation emails were sent, but the Google Meet link could not be created automatically. Please check Google Calendar settings in book-call-config.php.');
}

redirectWithStatus('success', 'Booking submitted successfully. Admin and client confirmation emails were sent successfully.');
