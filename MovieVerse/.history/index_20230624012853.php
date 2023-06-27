<?php
$page = "index";
session_start();
include "header.php";
include "navbar.php";
?>

<main id="main">
    <!-- greet user -->
    <div class="row">
        <div class="col-lg-12 mb-3">
            <?php
            // greet user if he/she is logged in
            if (isset($_SESSION["firstname"])) {
                echo '<div class="fs-2 mt-3 text-center">Welcome back, ' . $_SESSION["username"] . '!</div>';
            } else {
                echo '<div class="fs-2 mt-3 text-center">Welcome to MovieVerse!</div>';
            }
            ?>
        </div>
    </div>

    <!-- search tab -->
    <div class="row justify-content-center">
        <div class="col-xs-10 col-lg-6">
            <div class="well search-result">
                <form action="search.php" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for a genre, director, actor or actress">
                        <span class="input-group-btn">
                            <button class="btn mx-2 mt-1" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                Search
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php


   // display new movies
include "includes/db_handler.inc.php";

// execute search for new movies
$stmt = $conn->prepare("SELECT * FROM movie ORDER BY id DESC LIMIT 5;");
$stmt->execute();
$result = $stmt->get_result();

// display new movies
include "includes/db_handler.inc.php";

// execute search for new movies
$stmt = $conn->prepare("SELECT * FROM movie ORDER BY id DESC LIMIT 5;");
$stmt->execute();
$result = $stmt->get_result();

// display new movies
if ($result->num_rows > 0) {

    // display section title
    echo '
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <p class="fs-2 mt-3">New Movies</p>
            </div>
        </div>';

    // open div for movies
    echo '<div class="row justify-content-center">';

    // display each movie
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="col-lg-4 mb-2 justify-content-center">
                <div class="card mx-1" style="max-width: 200px;">
                    <img class="card-img-top" src="'.htmlspecialchars($row['coverImage']).'" alt="Cover Image" style="width: 200px; height: 320px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">' . $row["title"] . '</h5>
                        <div class="card-text text-muted">' . $row["duration"] . '</div>
                        <div class="card-text text-muted">' . $row["cast"] . ', ' . $row["ratings"] . '</div>
                    </div>
                </div>
            </div>
        ';
    }

    // close div for movies
    echo '</div>';

    // close connection
    $conn->close();
}

 ?>