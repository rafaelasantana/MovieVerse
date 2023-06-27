<?php

if (isset($_POST["submit"])) {
    var_dump($_POST);
    $title = $_POST["title"];
    $duration = $_POST["duration"];
    $genre = $_POST["genre"];
    $cast = $_POST["cast"];
    $ratings = $_POST["ratings"];
    $review = $_POST["review"];
    $description = $_POST["description"];

    require_once "db_handler.inc.php";
    require_once "functions.inc.php";

    if (empty_input_movie($title, $duration, $genre, $cast, $ratings, $review, $description) !== false) {
        header("location: ../index.php?error=emptyInputMovie");
        exit();
    }

    add_movie($conn, $title, $duration, $genre, $cast, $ratings, $review, $description);
    exit();

}
else {
    header("location: ../index.php");
    exit();
}