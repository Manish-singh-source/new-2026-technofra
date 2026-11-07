<?php

$config = [
    'username' => getenv('TECHNOFRA_BLOG_ADMIN_USERNAME') ?: 'admin',
    'password_hash' => getenv('TECHNOFRA_BLOG_ADMIN_PASSWORD_HASH') ?: '',
];

$localConfigPath = __DIR__ . '/blog-config.local.php';
if (is_file($localConfigPath)) {
    $localConfig = require $localConfigPath;
    if (is_array($localConfig)) {
        $config = array_replace($config, $localConfig);
    }
}

return $config;
