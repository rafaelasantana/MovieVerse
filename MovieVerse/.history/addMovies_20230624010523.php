<?php
session_start();

//$page == 'addMovies';
include "header.php";
include "navbar.php";
include "database.php";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO movie (title, duration, genre, cast, ratings, review, description, coverImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $title, $duration, $genre, $cast, $ratings, $review, $description, $target_file);

  // Validate inputs - if any of them are empty, add an error message to the errors array
  if (empty($_POST["title"])) {
    $errors["title"] = "Title is required";
  } else {
    $title = $_POST["title"];
  }

  if (empty($_POST["duration"])) {
    $errors["duration"] = "Duration is required";
  } else {
    $duration = $_POST["duration"];
  }

  if (empty($_POST["genre"])) {
    $errors["genre"] = "Genre is required";
  } else {
    $genre = $_POST["genre"];
  }

  if (empty($_POST["cast"])) {
    $errors["cast"] = "Cast is required";
  } else {
    $cast = $_POST["cast"];
  }

  if (empty($_POST["ratings"])) {
    $errors["ratings"] = "Ratings are required";
  } else {
    $ratings = $_POST["ratings"];
  }

  if (empty($_POST["review"])) {
    $errors["review"] = "Review is required";
  } else {
    $review = $_POST["review"];
  }

  if (empty($_POST["description"])) {
    $errors["description"] = "Description is required";
  } else {
    $description = $_POST["description"];
  }

   // Image file handling
   if (isset($_FILES["coverImage"]) && $_FILES["coverImage"]["error"] == 0) { 
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["coverImage"]["tmp_name"]);
    if($check !== false) {
        // File is an image - continue
    } else {
        $errors["coverImage"] = "File is not an image.";
    }

  // Define file size limit (e.g., 500KB)
$maxFileSize = 500 * 1024; // 500KB

// Define allowed file types
$allowedFileTypes = ['jpg', 'jpeg', 'png', 'gif'];

  // Check file size
  if ($_FILES["coverImage"]["size"] > $maxFileSize) {
      $errors["coverImage"] = "Sorry, your file is too large.";
  }

  // Allow certain file formats
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if (!in_array($imageFileType, $allowedFileTypes)) {
      $errors["coverImage"] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  }

  // Check if file already exists
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["coverImage"]["name"]);
  if (file_exists($target_file)) {
      $errors["coverImage"] = "Sorry, file already exists.";
  }

  / Finally, if no errors, move the file to your desired location
    if (empty($errors)) {
        if (move_uploaded_file($_FILES["coverImage"]["tmp_name"], $target_file)) {
            // File was moved, continue with the rest of the process
        } else {
            $errors["coverImage"] = "Sorry, there was an error uploading your file.";
        }
    }
  } else {
    $errors["coverImage"] = "No image was uploaded or there was an error in the upload.";
  }

  // Finally, move the file to your desired location (ensure this directory exists and is writable)
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["coverImage"]["name"]);
  if (move_uploaded_file($_FILES["coverImage"]["tmp_name"], $target_file)) {
      // File was moved, continue with the rest of the process (e.g., inserting data into the database)
  } else {
      $errors["coverImage"] = "Sorry, there was an error uploading your file.";
  }

  // If there are no errors, execute the statement
if (empty($errors)) {
  $stmt->execute();
  // Redirect to the success page
  header("Location: success.php");
  exit;
}


  $stmt->close();
}

$conn->close();
?>

<body>

<div class="container col-xs-10 col-lg-6 mt-3">
  <form action="addMovies.php" method="POST" class="row g-3 needs-validation" novalidate>
    <div class="fs-2 mt-3 text-center">Add Movie</div>

    <hr>

    
    <div class="col-md-12">
        <label for="validationCustom01" class="form-label">Title</label>
        <input type="text" class="form-control" id="validationCustom01" placeholder="Title" name="title" required>
        <?php if (isset($errors['title'])): ?>
          <small class="text-danger">
                <?php echo $errors['title']; ?>
          </small>
        <?php endif; ?>
    </div>


    <div class="col-md-12">
      <label for="validationCustom02" class="form-label">Duration</label>
      <input type="text" class="form-control" id="validationCustom02" placeholder="Duration" name="duration" required>
      <?php if (isset($errors['duration'])): ?>
            <small class="text-danger">
                <?php echo $errors['duration']; ?>
            </small>
        <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom03" class="form-label">Genre</label>
      <input type="text" class="form-control" id="validationCustom03" placeholder="Genre" name="genre" required>
      <?php if (isset($errors['genre'])): ?>
        <small class="text-danger">
            <?php echo $errors['genre']; ?>
      </small>    
      <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom04" class="form-label">Cast</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="Cast" name="cast" required>
      <?php if (isset($errors['cast'])): ?>
        <small class="text-danger">
            <?php echo $errors['cast']; ?>
      </small>    
      <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom05" class="form-label">Ratings</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Ratings" name="ratings" required>
      <?php if (isset($errors['ratings'])): ?>
        <small class="text-danger">
            <?php echo $errors['ratings']; ?>
      </small>    
      <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom06" class="form-label">Review</label>
      <input type="text" class="form-control" id="validationCustom06" placeholder="Review" name="review" required>
      <?php if (isset($errors['review'])): ?>
        <small class="text-danger">
            <?php echo $errors['review']; ?>
      </small>    
      <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom07" class="form-label">Description</label>
      <textarea class="form-control" id="validationCustom07" placeholder="Description" name="description" required></textarea>
      <?php if (isset($errors['description'])): ?>
        <small class="text-danger">
            <?php echo $errors['description']; ?>
      </small>    
      <?php endif; ?>
    </div>

    <div class="col-md-12">
      <label for="validationCustom08" class="form-label">Cover Image</label>
      <div class="input-group mb-3">
        <input type="file" class="form-control" id="validationCustom08" name="coverImage" required>
        <label class="input-group-text" for="validationCustom08">Upload</label>
      </div>
      <?php if (isset($errors['coverImage'])): ?>
        <small class="text-danger">
            <?php echo $errors['coverImage']; ?>
        </small>    
      <?php endif; ?>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-login">Add Movie</button>
    </div>
  </form>
</div>

    <?php

    include "footer.php";

    ?>

