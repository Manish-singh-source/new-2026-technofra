<?php

require __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
require __DIR__ . '/PHPMailer/class.phpmailer.php';
require __DIR__ . '/PHPMailer/class.smtp.php';

date_default_timezone_set('Asia/Kolkata');

function redirectWithAlert($message, $target = 'about-us.php')
{
    echo '<script>';
    echo 'alert(' . json_encode($message) . ');';
    echo 'window.location.href = ' . json_encode($target) . ';';
    echo '</script>';
    exit;
}

function buildMailer(array $mailConfig)
{
    $mailer = new PHPMailer();
    $mailer->isSMTP();
    $mailer->Host = (string) ($mailConfig['host'] ?? 'smtp.gmail.com');
    $mailer->SMTPAuth = true;
    $mailer->Username = (string) ($mailConfig['username'] ?? '');
    $mailer->Password = (string) ($mailConfig['password'] ?? '');
    $mailer->SMTPSecure = (string) ($mailConfig['encryption'] ?? 'tls');
    $mailer->Port = (int) ($mailConfig['port'] ?? 587);
    $mailer->CharSet = 'UTF-8';
    $mailer->isHTML(true);

    return $mailer;
}

function verifyRecaptcha($secretKey, $responseToken)
{
    if ($secretKey === '' || $responseToken === '') {
        return false;
    }

    if (!function_exists('curl_init')) {
        return false;
    }

    $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => $secretKey,
        'response' => $responseToken,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);

    $result = curl_exec($ch);
    curl_close($ch);

    $decoded = json_decode((string) $result, true);

    return is_array($decoded) && !empty($decoded['success']);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: about-us.php');
    exit;
}

$configPath = __DIR__ . '/contact-config.php';
if (!is_file($configPath)) {
    redirectWithAlert('Required contact configuration file was not found.');
}

$config = require $configPath;
$mailConfig = $config['mail'] ?? [];
$recaptchaConfig = $config['recaptcha'] ?? [];

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$contact = trim($_POST['contact'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');
$recaptchaResponse = trim($_POST['g-recaptcha-response'] ?? '');
$currentDateTime = date('Y-m-d H:i:s');
$brochurePath = __DIR__ . '/assets/pdf/technofra-brochure.pdf';
$cleanContact = preg_replace('/\D+/', '', $contact);
$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Bot detected.';
}

if ($name === '' || $email === '' || $contact === '') {
    $errors[] = 'All fields are required.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($cleanContact === '' || strlen($cleanContact) < 10 || strlen($cleanContact) > 15) {
    $errors[] = 'Please enter a valid contact number.';
}

if (!verifyRecaptcha((string) ($recaptchaConfig['secret_key'] ?? ''), $recaptchaResponse)) {
    $errors[] = 'reCAPTCHA verification failed. Please try again.';
}

if (!file_exists($brochurePath)) {
    $errors[] = 'Company profile PDF file was not found on the server.';
}

$smtpRequired = [
    'username' => (string) ($mailConfig['username'] ?? ''),
    'password' => (string) ($mailConfig['password'] ?? ''),
    'from email' => (string) ($mailConfig['from_email'] ?? ''),
    'admin email' => (string) ($mailConfig['admin_email'] ?? ''),
];

foreach ($smtpRequired as $key => $value) {
    if ($value === '') {
        $errors[] = 'Mail configuration is incomplete for ' . $key . '.';
    }
}

if (!empty($errors)) {
    redirectWithAlert(implode("\n", array_unique($errors)));
}

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safeContact = htmlspecialchars($contact, ENT_QUOTES, 'UTF-8');
$safeCurrentDateTime = htmlspecialchars($currentDateTime, ENT_QUOTES, 'UTF-8');

$htmlBody = '
<html>
    <head>
        <title>Company Profile Download Enquiry</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif; background:#f7f9fc; margin:0; padding:24px;">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table width="640" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff; border:1px solid #dfe6ee;">
                            <tbody>
                                <tr>
                                    <td style="background:#000000; padding:18px 24px;">
                                        <img src="https://technofra.com/logo.png" alt="Technofra" style="max-width:250px; height:45px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:28px 24px 12px;">
                                        <h2 style="margin:0; color:#0b2e59;">Company Profile Request</h2>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.7;">
                                            A visitor submitted the brochure request form on the website.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 24px 28px;">
                                        <table width="100%" cellspacing="0" cellpadding="10" border="0" style="background:#eef6fb; border:1px solid #d8e7f2;">
                                            <tbody>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Full Name</strong></td>
                                                    <td style="color:#334155;">' . $safeName . '</td>
                                                </tr>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Email ID</strong></td>
                                                    <td style="color:#334155;">' . $safeEmail . '</td>
                                                </tr>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Contact Details</strong></td>
                                                    <td style="color:#334155;">' . $safeContact . '</td>
                                                </tr>
                                                <tr>
                                                    <td width="180" style="color:#0b2e59;"><strong>Requested At</strong></td>
                                                    <td style="color:#334155;">' . $safeCurrentDateTime . '</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 24px 24px; color:#4a5568; line-height:1.7;">
                                        Regards,<br>
                                        Team Technofra<br>
                                        Email: <a href="mailto:support@technofra.com">support@technofra.com</a><br>
                                        Contact No: +91 808 080 3374
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';

$clientHtmlBody = '
<html>
    <head>
        <title>Thank You for Requesting the Company Profile</title>
    </head>
    <body style="font-family: Arial, Helvetica, sans-serif; background:#f7f9fc; margin:0; padding:24px;">
        <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table width="640" cellspacing="0" cellpadding="0" border="0" style="background:#ffffff; border:1px solid #dfe6ee;">
                            <tbody>
                                <tr>
                                    <td style="background:#000000; padding:18px 24px;">
                                        <img src="https://technofra.com/logo.png" alt="Technofra" style="max-width:250px; height:45px;">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:28px 24px 12px;">
                                        <h2 style="margin:0; color:#0b2e59;">Hi ' . $safeName . ',</h2>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.8;">
                                            Thank you for requesting the Technofra company profile. We have attached the brochure PDF with this email for your reference.
                                        </p>
                                        <p style="margin:12px 0 0; color:#4a5568; line-height:1.8;">
                                            Our team will review your enquiry and get in touch with you shortly. If you have any immediate questions, you can reply to this email or write to
                                            <a href="mailto:info@technofra.com">info@technofra.com</a>.
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:12px 24px 24px;">
                                        <table width="100%" cellspacing="0" cellpadding="16" border="0" style="background:#eef6fb; border:1px solid #d8e7f2;">
                                            <tbody>
                                                <tr>
                                                    <td style="color:#334155; line-height:1.8;">
                                                        Website: <a href="https://technofra.com/">https://technofra.com/</a><br>
                                                        Brochure attached: <strong>Technofra Company Profile PDF</strong><br>
                                                        Support: <a href="mailto:support@technofra.com">support@technofra.com</a><br>
                                                        Contact: +91 808 080 3374
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 24px 24px; color:#4a5568; line-height:1.7;">
                                        Best Regards,<br>
                                        Team Technofra
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>';

$mail = buildMailer($mailConfig);
$mail->setFrom((string) $mailConfig['from_email'], (string) ($mailConfig['from_name'] ?? 'Technofra'));
$mail->addAddress((string) $mailConfig['admin_email'], (string) ($mailConfig['admin_name'] ?? 'Technofra Admin'));
$mail->addReplyTo($email, $name);
$mail->Subject = 'New Brochure Download Enquiry - Technofra Website (' . $currentDateTime . ')';
$mail->Body = $htmlBody;
$mail->AltBody = "Company profile request from {$name} ({$email}).";

if (!$mail->send()) {
    error_log('Company profile admin email failed: ' . $mail->ErrorInfo);
    redirectWithAlert('We could not send your request right now. Please try again.');
}

$clientMail = buildMailer($mailConfig);
$clientMail->setFrom((string) $mailConfig['from_email'], (string) ($mailConfig['from_name'] ?? 'Technofra'));
$clientMail->addAddress($email, $name);
$clientMail->addBCC((string) $mailConfig['admin_email'], (string) ($mailConfig['admin_name'] ?? 'Technofra Admin'));
$clientMail->Subject = 'Thank you for requesting the Technofra company profile';
$clientMail->Body = $clientHtmlBody;
$clientMail->AltBody = 'Download - Technofra Company Profile.';
$clientMail->addAttachment($brochurePath, 'technofra-brochure.pdf');

if (!$clientMail->send()) {
    error_log('Company profile client email failed: ' . $clientMail->ErrorInfo);
    redirectWithAlert('Your request was received, but the brochure email could not be sent right now. Please try again.');
}

redirectWithAlert('Thank you! The company profile request has been submitted successfully.');
