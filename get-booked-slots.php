<?php

header('Content-Type: application/json');

$config = require __DIR__ . '/contact-config.php';
$db = $config['db'] ?? [];
$date = trim($_GET['date'] ?? '');

if ($date === '') {
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

mysqli_report(MYSQLI_REPORT_OFF);
$dbHost = trim((string) ($db['host'] ?? 'localhost'));
$dbPort = (int) ($db['port'] ?? 3306);
$dbUser = (string) ($db['username'] ?? 'root');
$dbPass = (string) ($db['password'] ?? '');
$dbName = trim((string) ($db['database'] ?? 'tech_2026_manish'));

$mysqli = @new mysqli($dbHost, $dbUser, $dbPass, $dbName, $dbPort);
if ($mysqli->connect_errno) {
    echo json_encode(['success' => true, 'slots' => []]);
    exit;
}

$mysqli->set_charset('utf8mb4');
$tableCheck = $mysqli->query("SHOW TABLES LIKE 'book_call_bookings'");
if (!$tableCheck || $tableCheck->num_rows === 0) {
    echo json_encode(['success' => true, 'slots' => []]);
    $mysqli->close();
    exit;
}
if ($tableCheck) {
    $tableCheck->close();
}

$stmt = $mysqli->prepare('SELECT booking_time FROM book_call_bookings WHERE booking_date = ?');
$stmt->bind_param('s', $date);
$stmt->execute();
$result = $stmt->get_result();
$slots = [];
while ($row = $result->fetch_assoc()) {
    $slots[] = $row['booking_time'];
}
$stmt->close();
$mysqli->close();

echo json_encode(['success' => true, 'slots' => $slots]);
