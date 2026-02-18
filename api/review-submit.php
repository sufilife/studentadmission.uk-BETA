<?php
ob_start();
header('Content-Type: application/json');

if (session_status() === PHP_SESSION_NONE) {
    session_name('review_session');
    session_start();
}

require_once __DIR__ . '/../config/db.php';

try {
    if (!isset($_SESSION['user_id'])) {
        throw new Exception('Not logged in');
    }

    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data) throw new Exception('Invalid JSON');

    $rating  = (int)$data['rating'];
    $comment = trim($data['comment']);

    if ($rating < 1 || $rating > 5 || $comment === '') {
        throw new Exception('Invalid input');
    }

    $stmt = $pdo->prepare("
        INSERT INTO reviews (user_id, rating, comment, created_at)
        VALUES (?, ?, ?, NOW())
    ");
    $stmt->execute([$_SESSION['user_id'], $rating, $comment]);

    echo json_encode(['success' => true]);

} catch (Throwable $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}

ob_end_flush();
