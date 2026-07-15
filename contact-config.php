<?php

$config = [
    'db' => [
        'host' => getenv('TECHNOFRA_DB_HOST') ?: 'localhost',
        'port' => (int) (getenv('TECHNOFRA_DB_PORT') ?: 3306),
        'database' => getenv('TECHNOFRA_DB_NAME') ?: '',
        'username' => getenv('TECHNOFRA_DB_USER') ?: '',
        'password' => getenv('TECHNOFRA_DB_PASSWORD') ?: '',
    ],
    'mail' => [
        'host' => getenv('TECHNOFRA_SMTP_HOST') ?: 'smtp.gmail.com',
        'port' => (int) (getenv('TECHNOFRA_SMTP_PORT') ?: 587),
        'username' => getenv('TECHNOFRA_SMTP_USER') ?: '',
        'password' => getenv('TECHNOFRA_SMTP_PASSWORD') ?: '',
        'encryption' => getenv('TECHNOFRA_SMTP_ENCRYPTION') ?: 'tls',
        'from_email' => getenv('TECHNOFRA_FROM_EMAIL') ?: '',
        'from_name' => getenv('TECHNOFRA_FROM_NAME') ?: 'Technofra',
        'admin_email' => getenv('TECHNOFRA_ADMIN_EMAIL') ?: '',
        'admin_name' => getenv('TECHNOFRA_ADMIN_NAME') ?: 'Technofra Admin',
    ],
    'recaptcha' => [
        'site_key' => getenv('TECHNOFRA_RECAPTCHA_SITE_KEY') ?: '',
        'secret_key' => getenv('TECHNOFRA_RECAPTCHA_SECRET_KEY') ?: '',
    ],
    'google_calendar' => [
        'enabled' => filter_var(getenv('TECHNOFRA_GOOGLE_CALENDAR_ENABLED') ?: false, FILTER_VALIDATE_BOOLEAN),
        'client_id' => getenv('TECHNOFRA_GOOGLE_CLIENT_ID') ?: '',
        'client_secret' => getenv('TECHNOFRA_GOOGLE_CLIENT_SECRET') ?: '',
        'refresh_token' => getenv('TECHNOFRA_GOOGLE_REFRESH_TOKEN') ?: '',
        'calendar_id' => getenv('TECHNOFRA_GOOGLE_CALENDAR_ID') ?: 'primary',
        'timezone' => getenv('TECHNOFRA_GOOGLE_TIMEZONE') ?: 'Asia/Kolkata',
        'meeting_duration_minutes' => (int) (getenv('TECHNOFRA_MEETING_DURATION_MINUTES') ?: 60),
    ],
];

$localConfigPath = __DIR__ . '/contact-config.local.php';
if (is_file($localConfigPath)) {
    $localConfig = require $localConfigPath;
    if (is_array($localConfig)) {
        $config = array_replace_recursive($config, $localConfig);
    }
}

return $config;
