<?php
session_start();
include "header.php";
include "navbar.php";
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
} 
$conn->close();
?>

<body>

<div class="container col-xs-10 col-lg-6 mt-3">
  <form action="insert_movie.php" method="POST" class="row g-3 needs-validation" novalidate>
    <div class="fs-2 mt-3 text-center">Add Movie</div>

    <hr>

    <div class="col-md-12">
      <label for="validationCustom01" class="form-label">Title</label>
      <input type="text" class="form-control" id="validationCustom01" placeholder="Title" name="title" required>
      <div class="invalid-feedback">
        Please enter a title!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Duration</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Duration" name="duration" required>
      <div class="invalid-feedback">
        Please enter the duration!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom03" class="form-label">Genre</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Genre" name="genre" required>
      <div class="invalid-feedback">
        Please enter the genre!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom04" class="form-label">Cast</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Cast" name="cast" required>
      <div class="invalid-feedback">
        Please enter the cast!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom05" class="form-label">Ratings</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Ratings" name="ratings" required>
      <div class="invalid-feedback">
        Please enter the ratings!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom06" class="form-label">Review</label>
      <input type="text" class="form-control" id="validationCustom06" placeholder="Review" name="review" required>
      <div class="invalid-feedback">
        Please enter the review!
      </div>
    </div>

    <div class="col-md-12">
      <label for="validationCustom07" class="form-label">Description</label>
      <textarea class="form-control" id="validationCustom07" placeholder="Description" name="description" required></textarea>
      <div class="invalid-feedback">
        Please enter the description!
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-login">Add Movie</button>
    </div>
  </form>
</div>
    <hr class="featurette-divider">

    <?php

    include "footer.php";

    ?>

