<?php
session_start();
include "header.php";
include "navbar.php";
include "database.php";


// Prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO movies (title, duration, genre, cast, ratings, review, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $title, $duration, $genre, $cast, $ratings, $review, $description);

// Set parameters and execute
$title = $_POST['title'];
$duration = $_POST['duration'];
$genre = $_POST['genre'];
$cast = $_POST['cast'];
$ratings = $_POST['ratings'];
$review = $_POST['review'];
$description = $_POST['description'];
$stmt->execute();

echo "New movie added successfully";

$stmt->close();
$conn->close();
?>
