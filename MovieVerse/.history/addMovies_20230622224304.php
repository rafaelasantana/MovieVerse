<?php
session_start();
include "header.php";
include "navbar.php";
include "database.php";


// Prepared statement to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO movie (titel, duration, genre, cast, ratings, review, description) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $titel, $duration, $genre, $cast, $ratings, $review, $description);

// Set parameters and execute
$titel = $_POST['titel'];
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

<body>

<h2>Add Movies</h2>

<form action="insert_movie.php" method="post">
  Title:<br>
  <input type="text" name="titel">
  <br>
  Duration:<br>
  <input type="text" name="duration">
  <br>
  Genre:<br>
  <input type="text" name="genre">
  <br>
  Cast:<br>
  <input type="text" name="cast">
  <br>
  Ratings:<br>
  <input type="text" name="ratings">
  <br>
  Review:<br>
  <input type="text" name="review">
  <br>
  Description:<br>
  <textarea name="description"></textarea>
  <br><br>
  <input type="submit" value="Submit">
</form> 

</body>