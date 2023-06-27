<?php
session_start();
include "includes/db_handler.inc.php";

// check if movie id was submitted and user is logged in
if (isset($_GET['movie_id']) && isset($_SESSION['id'])) {
    $movie_id = $_GET['movie_id'];
    $user_id = $_SESSION['id'];

    // Prepare the query
    $stmt = $conn->prepare("INSERT INTO watched (user_id, movie_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $user_id, $movie_id);  // Here you should use "ii" because both user_id and movie_id should be integers

    // Execute the query
    $stmt->execute();

    // Redirect back to the previous page or a success message page
    header("Location: index.php");
} else {
    // Redirect to login page
    header("Location: login.php");
}

// Close the connection
$conn->close();
?>