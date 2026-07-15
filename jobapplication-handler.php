<?php

session_start();
date_default_timezone_set('Asia/Kolkata');

$jobApplicationTimezone = new DateTimeZone('Asia/Kolkata');

function redirectJobApplicationForm($status, $title, $message, array $formData = null, array $skillRows = null, array $aiToolRows = null)
{
    $_SESSION['job_application_form_notice'] = [
        'status' => $status,
        'title' => $title,
        'message' => $message,
    ];

    $_SESSION['job_application_form_data'] = $formData ?? [
        'fname' => '',
        'email' => '',
        'contact' => '',
        'role' => '',
        'applicant_type' => '',
        'experience' => '',
        'ctc' => '',
        'ectc' => '',
        'location' => '',
        'notice' => '',
        'rn' => '',
        'refrence' => '',
        'link' => '',
    ];

    $_SESSION['job_application_skill_rows'] = $skillRows ?? [['name' => '', 'percentage' => '']];
    $_SESSION['job_application_ai_tool_rows'] = $aiToolRows ?? [['name' => '', 'level' => '']];

    header('Location: job-application.php#job-application-form');
    exit;
}

function jobApplicationEmailInfoRow($label, $value)
{
    return '
        <tr>
            <td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;font-weight:700;color:#3f4348;width:180px;vertical-align:top;">' . $label . '</td>
            <td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;line-height:1.7;color:#60656b;">' . $value . '</td>
        </tr>
    ';
}

function renderJobApplicationEmail(array $options)
{
    $summaryHtml = '';
    foreach ($options['summary_rows'] as $row) {
        $summaryHtml .= jobApplicationEmailInfoRow($row['label'], $row['value']);
    }

    return '
    <div style="margin:0;padding:20px 0;background:#f3f3f3;font-family:Arial,Helvetica,sans-serif;color:#4a4a4a;">
        <div style="width:100%;max-width:620px;margin:0 auto;background:#ffffff;">
            <div style="padding:18px 28px 0;font-size:11px;color:#8a8a8a;">
                <table role="presentation" style="width:100%;border-collapse:collapse;">
                    <tr>
                        <td>' . $options['preheader'] . '</td>
                        <td style="text-align:right;">' . $options['preheader_date'] . '</td>
                    </tr>
                </table>
            </div>
            <div style="padding:34px 70px 10px;">
                <div style="margin-bottom:22px;">
                    <img src="https://technofra.com/logo-black.png" alt="Technofra" style="width:250px;height:auto;display:block;">
                </div>
                <h1 style="margin:0 0 24px;font-size:24px;line-height:1.25;color:#3f4348;font-weight:700;">' . $options['headline'] . '</h1>
                <div style="margin:0;font-size:16px;line-height:1.7;color:#60656b;">' . $options['lead'] . '</div>
                <a href="' . $options['cta_href'] . '" style="display:inline-block;margin-top:28px;background:#003366;color:#ffffff;text-decoration:none;padding:16px 34px;font-size:14px;line-height:1;">' . $options['cta_label'] . '</a>
            </div>
            <div style="margin:42px 70px 36px;border:1px solid rgba(0,51,102,0.35);padding:30px 26px 22px;">
                <h2 style="margin:0 0 24px;font-size:18px;font-weight:700;color:#3f4348;">' . $options['summary_title'] . '</h2>
                <table role="presentation" style="width:100%;border-collapse:collapse;margin-bottom:18px;">
                    ' . $summaryHtml . '
                </table>
            </div>
            <div style="margin:24px 50px 0;background:#f4f6f8;padding:28px 28px 26px;font-size:11px;line-height:1.8;color:#8a9198;">
                ' . $options['closing_html'] . '
                <div>' . $options['footer_note'] . '</div>
            </div>
        </div>
    </div>
    ';
}

function collectJobApplicationSkills(array $names, array $percentages)
{
    $rows = [];
    $labels = [];

    foreach ($names as $index => $name) {
        $name = trim((string) $name);
        $percentage = isset($percentages[$index]) ? trim((string) $percentages[$index]) : '';

        if ($name === '' && $percentage === '') {
            continue;
        }

        $rows[] = [
            'name' => $name,
            'percentage' => $percentage,
        ];

        if ($name !== '' && $percentage !== '') {
            $labels[] = $name . ' (' . $percentage . '%)';
        }
    }

    return [$rows, implode(', ', $labels)];
}

function collectJobApplicationAiTools(array $names, array $levels)
{
    $rows = [];
    $labels = [];

    foreach ($names as $index => $name) {
        $name = trim((string) $name);
        $level = isset($levels[$index]) ? trim((string) $levels[$index]) : '';

        if ($name === '' && $level === '') {
            continue;
        }

        $rows[] = [
            'name' => $name,
            'level' => $level,
        ];

        if ($name !== '' && $level !== '') {
            $labels[] = $name . ' - ' . $level;
        }
    }

    return [$rows, implode(', ', $labels)];
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectJobApplicationForm('error', 'Invalid Request', 'Please submit the job application form properly.');
}

$configPath = __DIR__ . '/contact-config.php';
if (!file_exists($configPath)) {
    redirectJobApplicationForm('error', 'Configuration Missing', 'Required configuration file was not found.');
}

$config = require $configPath;
$db = $config['db'] ?? [];
$mailConfig = $config['mail'] ?? [];

$fname = trim($_POST['fname'] ?? '');
$email = trim($_POST['email'] ?? '');
$contact = preg_replace('/\D+/', '', $_POST['contact'] ?? '');
$role = trim($_POST['role'] ?? '');
$applicantType = trim($_POST['applicant_type'] ?? '');
$experience = trim($_POST['experience'] ?? '');
$ctc = trim($_POST['ctc'] ?? '');
$ectc = trim($_POST['ectc'] ?? '');
$location = trim($_POST['location'] ?? '');
$notice = trim($_POST['notice'] ?? '');
$rn = trim($_POST['rn'] ?? '');
$refrence = trim($_POST['refrence'] ?? '');
$link = trim($_POST['link'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');

[$skillRows, $skillsCombined] = collectJobApplicationSkills($_POST['skill_name'] ?? [], $_POST['skill_percentage'] ?? []);
[$aiToolRows, $aiToolsCombined] = collectJobApplicationAiTools($_POST['ai_tool_name'] ?? [], $_POST['ai_tool_level'] ?? []);

$formData = [
    'fname' => $fname,
    'email' => $email,
    'contact' => $contact,
    'role' => $role,
    'applicant_type' => $applicantType,
    'experience' => $experience,
    'ctc' => $ctc,
    'ectc' => $ectc,
    'location' => $location,
    'notice' => $notice,
    'rn' => $rn,
    'refrence' => $refrence,
    'link' => $link,
];

$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Invalid submission detected.';
}

foreach ([
    'full name' => $fname,
    'email address' => $email,
    'contact number' => $contact,
    'role' => $role,
    'location' => $location,
    'notice period' => $notice,
] as $label => $value) {
    if ($value === '') {
        $errors[] = 'Please enter your ' . $label . '.';
    }
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if ($contact === '' || strlen($contact) < 10) {
    $errors[] = 'Please enter a valid contact number.';
}

if (!in_array($applicantType, ['Fresher', 'Experience'], true)) {
    $errors[] = 'Please select Fresher or Experience.';
}

if ($refrence === '' || $refrence === 'Please Select') {
    $errors[] = 'Please select how you heard about this job opening.';
}

if (empty($skillRows)) {
    $errors[] = 'Please add at least one skill.';
}

foreach ($skillRows as $skillRow) {
    if (($skillRow['name'] ?? '') === '' || ($skillRow['percentage'] ?? '') === '') {
        $errors[] = 'Please complete every skill row.';
        break;
    }

    $percentage = (int) $skillRow['percentage'];
    if ($percentage < 0 || $percentage > 100) {
        $errors[] = 'Skill percentage must be between 0 and 100.';
        break;
    }
}

if (empty($aiToolRows)) {
    $errors[] = 'Please add at least one AI tool.';
}

$allowedAiLevels = ['Basic', 'Intermediate', 'Advanced', 'Expert'];
foreach ($aiToolRows as $aiToolRow) {
    if (($aiToolRow['name'] ?? '') === '' || ($aiToolRow['level'] ?? '') === '') {
        $errors[] = 'Please complete every AI tool row.';
        break;
    }

    if (!in_array($aiToolRow['level'], $allowedAiLevels, true)) {
        $errors[] = 'Please select a valid AI tool level.';
        break;
    }
}

if (!isset($_FILES['file']) || ($_FILES['file']['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) {
    $errors[] = 'Please upload your resume or portfolio file.';
}

if (!empty($errors)) {
    redirectJobApplicationForm('error', 'Submission Failed', implode(' ', array_unique($errors)), $formData, $skillRows, $aiToolRows);
}

if ($applicantType === 'Fresher') {
    $experience = 'N/A';
    $ctc = 'N/A';
}

if ($experience === '') {
    $experience = 'N/A';
}

if ($ctc === '') {
    $ctc = 'N/A';
}

if ($ectc === '') {
    $ectc = 'N/A';
}

$uploadedFile = $_FILES['file'];
$originalFileName = (string) $uploadedFile['name'];
$fileTemp = (string) $uploadedFile['tmp_name'];
$fileSize = (int) $uploadedFile['size'];
$fileExtension = strtolower(pathinfo($originalFileName, PATHINFO_EXTENSION));
$allowedExtensions = ['pdf', 'doc', 'docx'];
$allowedMimeTypes = [
    'application/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
];

$fileMimeType = function_exists('mime_content_type') ? mime_content_type($fileTemp) : '';

if (!in_array($fileExtension, $allowedExtensions, true)) {
    $errors[] = 'Resume / portfolio must be a PDF, DOC, or DOCX file.';
}

if ($fileMimeType !== '' && !in_array($fileMimeType, $allowedMimeTypes, true)) {
    $errors[] = 'Uploaded file type is not allowed.';
}

if ($fileSize <= 0 || $fileSize > 8 * 1024 * 1024) {
    $errors[] = 'Resume / portfolio file size must be less than 8 MB.';
}

if (!empty($errors)) {
    redirectJobApplicationForm('error', 'Upload Failed', implode(' ', array_unique($errors)), $formData, $skillRows, $aiToolRows);
}

$uploadDir = __DIR__ . '/uploads/jobapplication';
if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
    redirectJobApplicationForm('error', 'Upload Failed', 'Could not prepare the upload directory.', $formData, $skillRows, $aiToolRows);
}

$safeBaseName = preg_replace('/[^A-Za-z0-9_-]+/', '-', pathinfo($originalFileName, PATHINFO_FILENAME));
$safeBaseName = trim($safeBaseName, '-') ?: 'resume';
$storedFileName = date('YmdHis') . '-' . bin2hex(random_bytes(4)) . '-' . $safeBaseName . '.' . $fileExtension;
$storedFilePath = $uploadDir . '/' . $storedFileName;
$storedFileRelativePath = 'uploads/jobapplication/' . $storedFileName;

if (!move_uploaded_file($fileTemp, $storedFilePath)) {
    redirectJobApplicationForm('error', 'Upload Failed', 'Resume / portfolio could not be uploaded right now.', $formData, $skillRows, $aiToolRows);
}

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
    $connection = @new mysqli($hostCandidate, $dbUser, $dbPass, $dbName, $dbPort);

    if (!$connection->connect_errno) {
        $mysqli = $connection;
        break;
    }

    $lastConnectError = sprintf('[%s:%d] (%d) %s', $hostCandidate, $dbPort, $connection->connect_errno, $connection->connect_error);
}

if (!$mysqli instanceof mysqli) {
    error_log('Job application DB connection failed: ' . $lastConnectError);
    redirectJobApplicationForm('error', 'Database Error', 'Database connection failed. Please check contact-config.php.', $formData, $skillRows, $aiToolRows);
}

$mysqli->set_charset('utf8mb4');
$mysqli->query("SET time_zone = '+05:30'");

$submittedAt = new DateTime('now', $jobApplicationTimezone);
$submittedAtForDb = $submittedAt->format('Y-m-d H:i:s');

$createTableSql = "CREATE TABLE IF NOT EXISTS jobapplication (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    contact VARCHAR(25) NOT NULL,
    role VARCHAR(150) NOT NULL,
    applicant_type VARCHAR(30) NOT NULL DEFAULT '',
    experience VARCHAR(100) NOT NULL DEFAULT 'N/A',
    ctc VARCHAR(100) NOT NULL DEFAULT 'N/A',
    ectc VARCHAR(100) NOT NULL DEFAULT 'N/A',
    location VARCHAR(150) NOT NULL,
    skills_text TEXT NOT NULL,
    skills_json LONGTEXT NULL,
    ai_tools_text TEXT NOT NULL,
    ai_tools_json LONGTEXT NULL,
    notice VARCHAR(120) NOT NULL,
    rn VARCHAR(150) NOT NULL DEFAULT '',
    refrence VARCHAR(150) NOT NULL,
    resume_file VARCHAR(255) NOT NULL,
    portfolio_link VARCHAR(255) NOT NULL DEFAULT '',
    source_page VARCHAR(120) NOT NULL DEFAULT 'job-application.php',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$mysqli->query($createTableSql)) {
    $mysqli->close();
    redirectJobApplicationForm('error', 'Database Error', 'Could not create the jobapplication table.', $formData, $skillRows, $aiToolRows);
}

$applicantTypeColumn = $mysqli->query("SHOW COLUMNS FROM jobapplication LIKE 'applicant_type'");
if ($applicantTypeColumn instanceof mysqli_result) {
    $hasApplicantTypeColumn = $applicantTypeColumn->num_rows > 0;
    $applicantTypeColumn->close();

    if (!$hasApplicantTypeColumn) {
        $mysqli->query("ALTER TABLE jobapplication ADD applicant_type VARCHAR(30) NOT NULL DEFAULT '' AFTER role");
    } else {
        $mysqli->query("ALTER TABLE jobapplication MODIFY applicant_type VARCHAR(30) NOT NULL DEFAULT ''");
    }
}

$mysqli->query("ALTER TABLE jobapplication MODIFY experience VARCHAR(100) NOT NULL DEFAULT 'N/A'");
$mysqli->query("ALTER TABLE jobapplication MODIFY ctc VARCHAR(100) NOT NULL DEFAULT 'N/A'");
$mysqli->query("ALTER TABLE jobapplication MODIFY ectc VARCHAR(100) NOT NULL DEFAULT 'N/A'");

$skillsJson = json_encode($skillRows, JSON_UNESCAPED_UNICODE);
$aiToolsJson = json_encode($aiToolRows, JSON_UNESCAPED_UNICODE);
$sourcePage = 'job-application.php';

$insert = $mysqli->prepare(
    'INSERT INTO jobapplication (fname, email, contact, role, applicant_type, experience, ctc, ectc, location, skills_text, skills_json, ai_tools_text, ai_tools_json, notice, rn, refrence, resume_file, portfolio_link, source_page, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)'
);

if (!$insert) {
    $mysqli->close();
    redirectJobApplicationForm('error', 'Database Error', 'Could not prepare the application save query.', $formData, $skillRows, $aiToolRows);
}

$insert->bind_param(
    'ssssssssssssssssssss',
    $fname,
    $email,
    $contact,
    $role,
    $applicantType,
    $experience,
    $ctc,
    $ectc,
    $location,
    $skillsCombined,
    $skillsJson,
    $aiToolsCombined,
    $aiToolsJson,
    $notice,
    $rn,
    $refrence,
    $storedFileRelativePath,
    $link,
    $sourcePage,
    $submittedAtForDb
);

if (!$insert->execute()) {
    $insert->close();
    $mysqli->close();
    redirectJobApplicationForm('error', 'Database Error', 'Application data could not be saved right now. Please try again.', $formData, $skillRows, $aiToolRows);
}

$insert->close();
$mysqli->close();

redirectJobApplicationForm(
    'success',
    'Application Submitted Successfully',
    'Thank you for applying. Your application has been saved successfully.'
);

