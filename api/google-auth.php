<?php
header('Content-Type: application/json');
// api/google-auth.php
require __DIR__ . '/config.php';

// Get raw JSON data from the request body
$json = file_get_contents('php://input');
$data = json_decode($json, true);

// Check if data was decoded correctly
if (!$data) {
    echo json_encode(['success' => false, 'message' => 'Invalid JSON input']);
    exit;
}

try {
    // Example: Accessing data (Use your actual DB logic here)
    $email = $data['email'] ?? null;
    $google_sub = $data['google_sub'] ?? null;

    // TODO: Perform database insert/update logic here

    echo json_encode(['success' => true]);
} catch (Exception $e) {
    // Return error message instead of crashing with a 500
    http_response_code(500);
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}

$data = json_decode(file_get_contents("php://input"), true);

if (empty($data['google_sub']) || empty($data['email'])) {
    http_response_code(400);
    echo json_encode(["success" => false, "error" => "Invalid Google data"]);
    exit;
}

$google_sub = $data['google_sub'];
$name       = $data['name'];
$email      = $data['email'];
$picture    = $data['picture'] ?? null;

// check existing user
$stmt = $pdo->prepare("SELECT id FROM users WHERE google_sub = ?");
$stmt->execute([$google_sub]);
$user = $stmt->fetch();

if (!$user) {
    $stmt = $pdo->prepare("
        INSERT INTO users (google_sub, name, email, picture, created_at)
        VALUES (?, ?, ?, ?, NOW())
    ");
    $stmt->execute([$google_sub, $name, $email, $picture]);
    $user_id = $pdo->lastInsertId();
} else {
    $user_id = $user['id'];
}

echo json_encode([
    "success" => true,
    "user_id" => $user_id
]);
