<?php
// api/submit-review.php
require __DIR__ . '/config.php';

$data = json_decode(file_get_contents("php://input"), true);

$required = [
    'google_sub', 'name', 'email',
    'whatsapp', 'service_used',
    'rating', 'review'
];

foreach ($required as $field) {
    if (empty($data[$field])) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "error" => "Missing field: $field"
        ]);
        exit;
    }
}

// auto approved
$status = "approved";

$stmt = $pdo->prepare("
INSERT INTO reviews
(google_sub, name, email, picture, whatsapp, service_used, rating, review, status, created_at)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())
");

$stmt->execute([
    $data['google_sub'],
    $data['name'],
    $data['email'],
    $data['picture'] ?? null,
    $data['whatsapp'],
    $data['service_used'],
    (int)$data['rating'],
    $data['review'],
    $status
]);

echo json_encode([
    "success" => true,
    "message" => "Review submitted successfully"
]);
