<?php
// api/reviews-approved.php
require __DIR__ . '/config.php';

$stmt = $pdo->query("
    SELECT 
        name,
        picture,
        service_used,
        rating,
        review,
        created_at
    FROM reviews
    WHERE status = 'approved'
    ORDER BY created_at DESC
");

$reviews = $stmt->fetchAll();

echo json_encode([
    "success" => true,
    "data" => $reviews
]);
