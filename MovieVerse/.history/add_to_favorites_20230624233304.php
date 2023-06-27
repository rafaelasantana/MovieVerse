<?php
session_start();
include "includes/db_handler.inc.php";

// check if movie id was submitted and user is logged in
if (isset($_GET['movie_id']) && isset($_SESSION['username'])) {
    $movie_id = $_GET['movie_id'];
    $username = $_SESSION['username'];

    // Prepare the query
    $stmt = $conn->prepare("INSERT INTO favorites (username, movie_id) VALUES (?, ?)");
    $stmt->bind_param("si", $username, $movie_id);

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
