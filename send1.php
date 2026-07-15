<?php

require(__DIR__ . '/PHPMailer/PHPMailerAutoload.php');
require 'PHPMailer/class.phpmailer.php';
require 'PHPMailer/class.smtp.php';

$config = require __DIR__ . '/contact-config.php';
$mailConfig = $config['mail'] ?? [];
$recaptchaConfig = $config['recaptcha'] ?? [];


// Server-side validation
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$company = trim($_POST['company'] ?? '');
$contact = trim($_POST['contact'] ?? '');
$designation = trim($_POST['designation'] ?? '');
$delivery_time = trim($_POST['delivery_time'] ?? '');
$nature_of_project = trim($_POST['nature_of_project'] ?? '');
$message = trim($_POST['message'] ?? '');
$hidden_field = trim($_POST['hidden_field'] ?? ''); // Honeypot field

// Set the default timezone to Indian Standard Time (IST)
date_default_timezone_set('Asia/Kolkata');

// Get the current date and time
$currentDateTime = date('Y-m-d H:i:s');

$errors = [];

// Validate Honeypot
if (!empty($hidden_field)) {
    $errors[] = "Bot detected!";
}

// Validate Email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

// Validate Phone Number (10 digits only)
if (!preg_match('/^\d{10}$/', $contact)) {
    $errors[] = "Invalid phone number. Please enter a 10-digit number.";
}

// Validate required fields
if (
    empty($name) ||
    empty($email) ||
    empty($company) ||
    empty($contact) ||
    empty($designation) ||
    empty($delivery_time) ||
    empty($nature_of_project) ||
    empty($message)
) {
    $errors[] = "Please complete all required fields.";
}

// Validate Google reCAPTCHA
$recaptcha_secret = (string) ($recaptchaConfig['secret_key'] ?? '');
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

$recaptcha_data = [
    'secret' => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $recaptcha_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($recaptcha_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$recaptcha_result = curl_exec($ch);
curl_close($ch);

$recaptcha_decoded = json_decode($recaptcha_result, true);

if (empty($recaptcha_decoded['success'])) {
    $errors[] = "reCAPTCHA verification failed. Please try again.";
}

// Display errors and exit if any
if (!empty($errors)) {
    echo '<script>';
    echo 'alert("' . implode('\\n', $errors) . '");';
    echo 'window.location.href = "enquirynow.php";';
    echo '</script>';
    exit;
}

// Prepare email content for admin
// Prepare email content for admin
$htmlbody = '
    <html>
    <head>
        <title>Request a Quote Submission</title>
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <table width="630" cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="middle" align="center">
                                        <table width="630" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="middle" style="background-color:#000000;">
                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="left" style="width:75%">
                                                                        <img style="display: inline-block; position: relative; max-width: 100%" src="https://technofra.com/logo.png" width="250px" height="45px" border="0">
                                                                    </td>
                                                                    <td valign="middle" align="left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                            <b>A new quote request has been submitted through the Technofra website.</b>
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="580" cellspacing="5" cellpadding="0" border="0" bgcolor="#DCECF5">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Fast Name :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($name) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Email ID :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($email) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Company Name :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($company) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Mobile No :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($contact) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Service Required :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($designation) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                               <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Delivery Time :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($delivery_time) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Nature of Project :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($nature_of_project) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="top" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            <strong>Project Details :</strong>
                                                                                        </font>
                                                                                    </td>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            ' . htmlspecialchars($message) . '
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                                 
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="600" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="580" cellspacing="0" cellpadding="0" border="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="left">
                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                            Regards,<br />
                                                                                            Team Technofra <br />
                                                                                            <span>Email: <a href="mailto:support@technofra.com">support@technofra.com</a></span><br />
                                                                                            <span>Contact No:+91 808 080 3374</span><br />
                                                                                        </font>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>    
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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

// Prepare email content for client
$client_htmlbody = '
<html>
    <head>
        <title>Thank You for Contacting Us</title>
    </head>
    <body>
        <table>
            <tbody>
                <tr>
                    <td valign="middle" align="center">
                        <table width="630" cellspacing="0" cellpadding="0" border="1">
                            <tbody>
                                <tr>
                                    <td valign="middle" align="center">
                                        <table width="630" cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td valign="middle" align="middle" style="background-color:#000000;">
                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="left" style="width:75%">
                                                                        <img style="display: inline-block; position: relative; max-width: 100%" src="https://technofra.com/logo.png" width="250px" height="45px" border="0">
                                                                    </td>
                                                                    <td valign="middle" align="left"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="middle" align="center">
                                                        <table width="620" cellspacing="20" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <font style="font-size: 13px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                            <b>Hi ' . htmlspecialchars($name) . ',</b>
                                                                            
                                                                        </font>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td valign="middle" align="center">
                                                                        <table width="580" cellspacing="10" cellpadding="0" border="0" bgcolor="#DCECF5">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td valign="middle" align="center">
                                                                                        <table width="570" cellspacing="10" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td valign="middle" align="left">
                                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                        <span>We are delighted to welcome you to the Technofra family! We hope you enjoy using our services. We have created a request for you. Our business advisor will get in touch with you in the next 12 hours and guide you through all your requirements. In the meanwhile, If you have any specific queries you mail us at: <a href="mailto:info@technofra.com">info@technofra.com</a></span><br />
                                                                                                        <span>Please visit our Website: <a href="https://technofra.com/">Technofra.com</a> for more services. Our priority is to ensure that you get help & support from our team business advisor as quick and stress-free as possible - by keeping you updated on the progress. Again, thank you for deciding to work with us. We hope we can give you the same satisfaction as what our loyal clients have been experiencing from us. We look forward to a long-term relationship.</span><br />
                                                                                                        </font>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td valign="middle" align="center">
                                                                                        <table width="600" cellspacing="10" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td valign="middle" align="center">
                                                                                                        <table width="580" cellspacing="0" cellpadding="0" border="0">
                                                                                                            <tbody>
                                                                                                                <tr>
                                                                                                                    <td valign="middle" align="left">
                                                                                                                        <font style="font-size: 12px" color="#333333" face="Arial, Helvetica, sans-serif">
                                                                                                                            Best Regards,<br />
                                                                                                                            <span>Team Technofra</span><br />
                                                                                                                            <span>Email: <a href="mailto:support@technofra.com">support@technofra.com</a></span><br />
                                                                                                                            <span>Contact No:+91 808 080 3374</span>
                                                                                                                        </font>
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
// SMTP settings are loaded from contact-config.php
// Admin Email Setup
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = (string) ($mailConfig['host'] ?? 'smtp.gmail.com');
$mail->SMTPAuth = true;
$mail->Username = (string) ($mailConfig['username'] ?? '');
$mail->Password = (string) ($mailConfig['password'] ?? '');
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom((string) ($mailConfig['from_email'] ?? ''), (string) ($mailConfig['from_name'] ?? 'Technofra'));
$mail->addAddress((string) ($mailConfig['admin_email'] ?? ''), (string) ($mailConfig['admin_name'] ?? 'Technofra Admin'));
$mail->isHTML(true);
$mail->Subject = 'New Project Enquiry Received – Technofra Website (' . $currentDateTime . ')';
$mail->Body = $htmlbody;

// Send Admin Email
if (!$mail->send()) {
    header('Location: failed.php');
    exit;
}

// Client Email Setup
$client_mail = new PHPMailer();
$client_mail->IsSMTP();
$client_mail->Host = (string) ($mailConfig['host'] ?? 'smtp.gmail.com');
$client_mail->SMTPAuth = true;
$client_mail->Username = (string) ($mailConfig['username'] ?? '');
$client_mail->Password = (string) ($mailConfig['password'] ?? '');
$client_mail->SMTPSecure = 'tls';
$client_mail->Port = 587;

$client_mail->setFrom((string) ($mailConfig['from_email'] ?? ''), (string) ($mailConfig['from_name'] ?? 'Technofra'));
$client_mail->addAddress($email);
$client_mail->isHTML(true);
$client_mail->Subject = 'Thank You for Your Enquiry – Technofra Team Will Get Back to You (' . $currentDateTime . ')';
$client_mail->Body = $client_htmlbody;

// Send Client Email
if (!$client_mail->send()) {
    header('Location: failed.php');
    exit;
}

header('Location: success.php');


