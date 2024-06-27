<?php
// save_review.php
include 'db.php';

header('Content-Type: application/json');

// Validate and sanitize inputs
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$rating = $_POST['rating']; // Assuming rating is a safe integer from frontend
$comments = filter_var($_POST['comments'], FILTER_SANITIZE_STRING);
$place = filter_var($_POST['place'], FILTER_SANITIZE_STRING);

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($name) && !empty($email) && !empty($rating) && !empty($comments) && !empty($place)) {
    try {
        // Insert review into database
        $stmt = $pdo->prepare("INSERT INTO reviews (name, email, rating, comments, place) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $rating, $comments, $place]);

        // Prepare response for success
        $response = ['status' => 'success'];

        // Optionally, you can include additional data in the response
        // $response['review_id'] = $pdo->lastInsertId(); // Example: Return the inserted review ID

        // Output JSON response
        echo json_encode($response);
    } catch (PDOException $e) {
        // Handle database errors
        echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    // Handle invalid or missing inputs
    echo json_encode(['status' => 'error', 'message' => 'Invalid request or missing fields']);
}
?>
