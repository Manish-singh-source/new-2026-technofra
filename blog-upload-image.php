<?php
require_once __DIR__ . '/blog-helpers.php';
header('Content-Type: application/json; charset=UTF-8');
if (!blog_is_admin()) {
    http_response_code(403);
    echo json_encode(['error' => 'Please sign in before uploading an article image.']);
    exit;
}
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_FILES['image'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Choose an image to upload.']);
    exit;
}
try {
    $file = $_FILES['image'];
    if (($file['error'] ?? UPLOAD_ERR_NO_FILE) !== UPLOAD_ERR_OK) throw new RuntimeException('The image upload failed.');
    if (($file['size'] ?? 0) > 5 * 1024 * 1024) throw new RuntimeException('The image must be smaller than 5 MB.');
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    $mime = $finfo->file($file['tmp_name']);
    $types = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp', 'image/gif' => 'gif'];
    if (!isset($types[$mime]) || @getimagesize($file['tmp_name']) === false) throw new RuntimeException('Upload a valid JPG, PNG, WebP, or GIF image.');
    $directory = __DIR__ . '/blog-content/uploads';
    if (!is_dir($directory) && !mkdir($directory, 0755, true) && !is_dir($directory)) throw new RuntimeException('The upload folder could not be created.');
    $filename = bin2hex(random_bytes(8)) . '.' . $types[$mime];
    if (!move_uploaded_file($file['tmp_name'], $directory . '/' . $filename)) throw new RuntimeException('The image could not be saved.');
    echo json_encode(['url' => blog_image_url('blog-content/uploads/' . $filename)]);
} catch (Throwable $exception) {
    error_log('Blog inline image upload failed: ' . $exception->getMessage());
    http_response_code(400);
    echo json_encode(['error' => 'The image could not be uploaded. Please choose a valid image and try again.']);
}