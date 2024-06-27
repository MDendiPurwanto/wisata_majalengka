<?php
// get_reviews.php - Script to fetch all reviews for all places

include 'db.php';

try {
    // Prepare statement to fetch all ratings for all places
    $stmt = $pdo->prepare("SELECT rating FROM reviews");
    $stmt->execute();

    // Fetch all ratings
    $ratings = $stmt->fetchAll(PDO::FETCH_COLUMN);

    // Calculate total ratings count and sum
    $totalRatings = count($ratings);
    $totalSum = array_sum($ratings);

    // Calculate average rating
    $averageRating = $totalRatings > 0 ? round($totalSum / $totalRatings, 1) : 0;

    // Prepare data for JSON response
    $response = [
        'total_ratings' => $totalRatings,
        'total_sum' => $totalSum,
        'average_rating' => $averageRating
    ];

    // Output JSON response
    echo json_encode($response);

} catch (PDOException $e) {
    // Handle database errors
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
?>
