<?php
// save_review.php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];
    $place = $_POST['place'];

    $stmt = $pdo->prepare("INSERT INTO reviews (name, email, rating, comments, place) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $rating, $comments, $place]);

    echo json_encode(['status' => 'success']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}
?>