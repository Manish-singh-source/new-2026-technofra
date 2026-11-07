<?php
// Serve blogs through a directory index without extra Apache rewrite rules.
define('BLOG_BASE_PATH', rtrim(str_replace('\\', '/', dirname(dirname((string) ($_SERVER['SCRIPT_NAME'] ?? '/')))), '/'));
require dirname(__DIR__) . '/blog-upload-image.php';
