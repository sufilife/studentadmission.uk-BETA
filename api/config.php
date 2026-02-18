<?php
// api/config.php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: https://studentadmission.uk");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

$DB_HOST = "studentadmission.uk.mysql";
$DB_NAME = "studentadmission_ukstudentportaldb";
$DB_USER = "studentadmission_ukstudentportaldb";
$DB_PASS = "STUDENT ADMISSION_@123";

try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => "Database connection failed"
    ]);
    exit;
}
