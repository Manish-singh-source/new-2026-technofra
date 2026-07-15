<?php

session_start();
date_default_timezone_set('Asia/Kolkata');

function redirectContactForm($status, $title, $message, array $formData = null)
{
    $_SESSION['contact_form_notice'] = [
        'status' => $status,
        'title' => $title,
        'message' => $message,
    ];

    $_SESSION['contact_form_data'] = $formData ?? [
        'fname' => '',
        'lname' => '',
        'contact' => '',
        'email' => '',
        'massage' => '',
    ];

    header('Location: contact.php#contactForm');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectContactForm('error', 'Invalid Request', 'Please submit the contact form properly.');
}

$configPath = __DIR__ . '/contact-config.php';
if (!file_exists($configPath)) {
    redirectContactForm('error', 'Configuration Missing', 'Required contact configuration file was not found.');
}

$config = require $configPath;
$db = $config['db'] ?? [];

$fname = trim($_POST['fname'] ?? '');
$lname = trim($_POST['lname'] ?? '');
$contact = preg_replace('/\D+/', '', $_POST['contact'] ?? '');
$email = trim($_POST['email'] ?? '');
$massage = trim($_POST['massage'] ?? ($_POST['message'] ?? ''));
$hiddenField = trim($_POST['hidden_field'] ?? '');

$formData = [
    'fname' => $fname,
    'lname' => $lname,
    'contact' => $contact,
    'email' => $email,
    'massage' => $massage,
];

$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Invalid submission detected.';
}

if ($fname === '') {
    $errors[] = 'Please enter your first name.';
}

if ($lname === '') {
    $errors[] = 'Please enter your last name.';
}

if ($contact === '' || strlen($contact) < 10) {
    $errors[] = 'Please enter a valid phone number.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Please enter a valid email address.';
}

if (!empty($errors)) {
    redirectContactForm('error', 'Submission Failed', implode(' ', array_unique($errors)), $formData);
}

mysqli_report(MYSQLI_REPORT_OFF);

$dbHost = trim((string) ($db['host'] ?? 'localhost'));
$dbPort = (int) ($db['port'] ?? 3306);
$dbUser = (string) ($db['username'] ?? 'root');
$dbPass = (string) ($db['password'] ?? '');
$dbName = trim((string) ($db['database'] ?? 'tech_2026_manish'));

$hostCandidates = array_values(array_unique(array_filter([
    $dbHost,
    $dbHost === '127.0.0.1' ? 'localhost' : null,
    $dbHost === 'localhost' ? '127.0.0.1' : null,
])));

$serverConnection = null;
$lastConnectError = '';

foreach ($hostCandidates as $hostCandidate) {
    $connection = @new mysqli($hostCandidate, $dbUser, $dbPass, '', $dbPort);

    if (!$connection->connect_errno) {
        $serverConnection = $connection;
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

if (!$serverConnection instanceof mysqli) {
    error_log('Contact form DB server connection failed: ' . $lastConnectError);
    redirectContactForm('error', 'Database Error', 'Database connection failed. Please update contact-config.php.', $formData);
}

$serverConnection->set_charset('utf8mb4');
$dbNameEscaped = str_replace('`', '``', $dbName);

if (!$serverConnection->query("CREATE DATABASE IF NOT EXISTS `{$dbNameEscaped}` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci")) {
    $serverConnection->close();
    redirectContactForm('error', 'Database Error', 'Could not create the contact form database.', $formData);
}

$serverConnection->select_db($dbName);
$serverConnection->query("SET time_zone = '+05:30'");

$createTableSql = "CREATE TABLE IF NOT EXISTS contactform (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(150) NOT NULL,
    lname VARCHAR(150) NOT NULL,
    contact VARCHAR(25) NOT NULL,
    email VARCHAR(150) NOT NULL,
    massage TEXT NOT NULL,
    source_page VARCHAR(120) NOT NULL DEFAULT 'contact.php',
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

if (!$serverConnection->query($createTableSql)) {
    $serverConnection->close();
    redirectContactForm('error', 'Database Error', 'Could not create the contactform table.', $formData);
}

$submittedAtForDb = date('Y-m-d H:i:s');
$sourcePage = 'contact.php';

$insert = $serverConnection->prepare(
    'INSERT INTO contactform (fname, lname, contact, email, massage, source_page, created_at) VALUES (?, ?, ?, ?, ?, ?, ?)'
);

if (!$insert) {
    $serverConnection->close();
    redirectContactForm('error', 'Database Error', 'Could not prepare the contact save query.', $formData);
}

$insert->bind_param('sssssss', $fname, $lname, $contact, $email, $massage, $sourcePage, $submittedAtForDb);

if (!$insert->execute()) {
    $insert->close();
    $serverConnection->close();
    redirectContactForm('error', 'Database Error', 'Contact data could not be saved right now. Please try again.', $formData);
}

$insert->close();
$serverConnection->close();

redirectContactForm(
    'success',
    'Contact Submitted Successfully',
    'Thank you for contacting us. Your details have been saved successfully.'
);
