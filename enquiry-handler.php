<?php

session_start();

date_default_timezone_set('Asia/Kolkata');

require __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
require __DIR__ . '/PHPMailer/class.phpmailer.php';
require __DIR__ . '/PHPMailer/class.smtp.php';

function redirectEnquiryForm($status, $title, $message, array $formData = null)
{
    $_SESSION['enquiry_form_notice'] = [
        'status' => $status,
        'title' => $title,
        'message' => $message,
    ];

    $_SESSION['enquiry_form_data'] = $formData ?? [
        'name' => '',
        'email' => '',
        'company' => '',
        'contact' => '',
        'designation' => '',
        'delivery_time' => '',
        'nature_of_project' => '',
        'message' => '',
    ];

    header('Location: enquirynow.php#enquiryForm');
    exit;
}

function renderEnquiryInfoRow($label, $value)
{
    return '<tr><td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;font-weight:700;color:#3f4348;width:180px;vertical-align:top;">' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</td><td style="padding:12px 14px;border-bottom:1px solid #e8edf2;font-size:13px;line-height:1.7;color:#60656b;">' . nl2br(htmlspecialchars($value, ENT_QUOTES, 'UTF-8')) . '</td></tr>';
}

function buildAdminEnquiryEmail(array $data, $submittedAt)
{
    $rows = '';
    $rows .= renderEnquiryInfoRow('Full Name', $data['name']);
    $rows .= renderEnquiryInfoRow('Email ID', $data['email']);
    $rows .= renderEnquiryInfoRow('Company Name', $data['company']);
    $rows .= renderEnquiryInfoRow('Mobile No', $data['contact']);
    $rows .= renderEnquiryInfoRow('Service Required', $data['designation']);
    $rows .= renderEnquiryInfoRow('Delivery Time', $data['delivery_time']);
    $rows .= renderEnquiryInfoRow('Nature of Project', $data['nature_of_project']);
    $rows .= renderEnquiryInfoRow('Project Details', $data['message']);

    return '<html><body style="background:#f3f3f3;font-family:Arial,Helvetica,sans-serif;"><div style="max-width:680px;margin:0 auto;background:#ffffff;border:1px solid #d9e1ec;"><div style="background:#000;padding:18px 26px;"><img src="https://technofra.com/logo.png" alt="Technofra" style="width:220px;max-width:100%;height:auto;"></div><div style="padding:28px 30px;"><h2 style="margin:0 0 10px;color:#162033;">New Project Enquiry Received</h2><p style="margin:0 0 24px;color:#5d6675;line-height:1.7;">A new enquiry has been submitted through the Technofra website on ' . htmlspecialchars($submittedAt, ENT_QUOTES, 'UTF-8') . '.</p><table role="presentation" style="width:100%;border-collapse:collapse;">' . $rows . '</table><p style="margin:24px 0 0;color:#5d6675;line-height:1.7;">Regards,<br>Team Technofra<br>Email: <a href="mailto:support@technofra.com">support@technofra.com</a><br>Contact No: +91 8080 80 3374</p></div></div></body></html>';
}

function buildClientEnquiryEmail(array $data)
{
    return '<html><body style="background:#f3f3f3;font-family:Arial,Helvetica,sans-serif;"><div style="max-width:680px;margin:0 auto;background:#ffffff;border:1px solid #d9e1ec;"><div style="background:#000;padding:18px 26px;"><img src="https://technofra.com/logo.png" alt="Technofra" style="width:220px;max-width:100%;height:auto;"></div><div style="padding:28px 30px;"><h2 style="margin:0 0 14px;color:#162033;">Hi ' . htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8') . ',</h2><p style="margin:0 0 16px;color:#5d6675;line-height:1.8;">Thank you for sharing your enquiry with Technofra. We have received your requirement and our business advisor will get in touch with you within the next 12 hours.</p><p style="margin:0 0 16px;color:#5d6675;line-height:1.8;">In the meantime, if you have any specific queries, you can mail us at <a href="mailto:info@technofra.com">info@technofra.com</a>. You can also explore more of our services at <a href="https://technofra.com/">technofra.com</a>.</p><p style="margin:0;color:#5d6675;line-height:1.8;">Best Regards,<br>Team Technofra<br>Email: <a href="mailto:support@technofra.com">support@technofra.com</a><br>Contact No: +91 8080 80 3374</p></div></div></body></html>';
}

function verifyEnquiryRecaptcha($secretKey)
{
    $response = trim($_POST['g-recaptcha-response'] ?? '');
    if ($secretKey === '' || $response === '') {
        return false;
    }

    if (!function_exists('curl_init')) {
        return false;
    }

    $payload = http_build_query([
        'secret' => $secretKey,
        'response' => $response,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? '',
    ]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $result = curl_exec($ch);
    curl_close($ch);

    if (!is_string($result) || $result === '') {
        return false;
    }

    $decoded = json_decode($result, true);
    return !empty($decoded['success']);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectEnquiryForm('error', 'Invalid Request', 'Please submit the enquiry form properly.');
}

$configPath = __DIR__ . '/contact-config.php';
if (!file_exists($configPath)) {
    redirectEnquiryForm('error', 'Configuration Missing', 'Required enquiry configuration file was not found.');
}

$config = require $configPath;
$mailConfig = $config['mail'] ?? [];
$recaptchaConfig = $config['recaptcha'] ?? [];

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$contact = preg_replace('/\D+/', '', $_POST['contact'] ?? '');
$designation = trim($_POST['designation'] ?? '');
$deliveryTime = trim($_POST['delivery_time'] ?? '');
$natureOfProject = trim($_POST['nature_of_project'] ?? '');
$message = trim($_POST['message'] ?? '');
$hiddenField = trim($_POST['hidden_field'] ?? '');
$submittedAt = date('Y-m-d H:i:s');

$formData = [
    'name' => $name,
    'email' => $email,
    'company' => $company,
    'contact' => $contact,
    'designation' => $designation,
    'delivery_time' => $deliveryTime,
    'nature_of_project' => $natureOfProject,
    'message' => $message,
];

$errors = [];

if ($hiddenField !== '') {
    $errors[] = 'Bot detected.';
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email address.';
}

if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = 'Invalid phone number. Please enter a 10-digit number.';
}

if ($name === '' || $email === '' || $company === '' || $contact === '' || $designation === '' || $deliveryTime === '' || $natureOfProject === '' || $message === '') {
    $errors[] = 'Please complete all required fields.';
}

if (!verifyEnquiryRecaptcha((string) ($recaptchaConfig['secret_key'] ?? ''))) {
    $errors[] = 'reCAPTCHA verification failed. Please try again.';
}

if (!empty($errors)) {
    redirectEnquiryForm('error', 'Submission Failed', implode(' ', array_unique($errors)), $formData);
}

$host = trim((string) ($mailConfig['host'] ?? ''));
$port = (int) ($mailConfig['port'] ?? 587);
$username = trim((string) ($mailConfig['username'] ?? ''));
$password = (string) ($mailConfig['password'] ?? '');
$encryption = trim((string) ($mailConfig['encryption'] ?? 'tls'));
$fromEmail = trim((string) ($mailConfig['from_email'] ?? $username));
$fromName = trim((string) ($mailConfig['from_name'] ?? 'Technofra'));
$adminEmail = trim((string) ($mailConfig['admin_email'] ?? ''));
$adminName = trim((string) ($mailConfig['admin_name'] ?? 'Technofra Admin'));

if ($host === '' || $username === '' || $password === '' || $fromEmail === '' || $adminEmail === '') {
    redirectEnquiryForm('error', 'Mail Configuration Missing', 'SMTP settings are incomplete. Please update contact-config.php.', $formData);
}

$adminMail = new PHPMailer();
$adminMail->IsSMTP();
$adminMail->Host = $host;
$adminMail->SMTPAuth = true;
$adminMail->Username = $username;
$adminMail->Password = $password;
$adminMail->SMTPSecure = $encryption;
$adminMail->Port = $port;
$adminMail->setFrom($fromEmail, $fromName);
$adminMail->addAddress($adminEmail, $adminName);
$adminMail->isHTML(true);
$adminMail->Subject = 'New Project Enquiry Received - Technofra Website (' . $submittedAt . ')';
$adminMail->Body = buildAdminEnquiryEmail($formData, $submittedAt);

if (!$adminMail->send()) {
    redirectEnquiryForm('error', 'Mail Failed', 'Admin enquiry email could not be sent right now. Please try again.', $formData);
}

$clientMail = new PHPMailer();
$clientMail->IsSMTP();
$clientMail->Host = $host;
$clientMail->SMTPAuth = true;
$clientMail->Username = $username;
$clientMail->Password = $password;
$clientMail->SMTPSecure = $encryption;
$clientMail->Port = $port;
$clientMail->setFrom($fromEmail, $fromName);
$clientMail->addAddress($email, $name !== '' ? $name : $email);
$clientMail->isHTML(true);
$clientMail->Subject = 'Thank You for Your Enquiry - Technofra Team Will Get Back to You (' . $submittedAt . ')';
$clientMail->Body = buildClientEnquiryEmail($formData);

if (!$clientMail->send()) {
    redirectEnquiryForm('error', 'Mail Failed', 'Client confirmation email could not be sent right now. Please try again.', $formData);
}

redirectEnquiryForm('success', 'Enquiry Submitted Successfully', 'Thank you for sharing your enquiry. We have emailed our team and also sent a confirmation to your email address.');
