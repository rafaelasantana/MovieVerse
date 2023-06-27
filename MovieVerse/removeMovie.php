<?php
session_start();
include "includes/db_handler.inc.php";

// Check if the user is logged in
if (!isset($_SESSION["id"])) {
    // Redirect the user to the login page
    echo "user not logged in";
    header("Location: login.php");
    exit();
}

// Check if the required parameters are provided
if (!isset($_GET["list"]) || !isset($_GET["id"])) {
    // Redirect the user to the profile page
    echo "required parameters are not provided";
    header("Location: profile.php");
    exit();
}

$list = $_GET["list"];
$id = $_GET["id"];

// Remove the movie from the respective list based on the list type
$userId = $_SESSION["id"];

switch ($list) {
  case "watched":
    $stmt = $conn->prepare("DELETE FROM watched WHERE movie_id = ? AND user_id = ?");
    break;
  case "favorites":
    $stmt = $conn->prepare("DELETE FROM favorites WHERE movie_id = ? AND user_id = ?");
    break;
  case "watch_later":
    $stmt = $conn->prepare("DELETE FROM watch_later WHERE movie_id = ? AND user_id = ?");
    break;
  default:
    // Redirect the user to the profile page
    header("Location: profile.php");
    exit();
}

$stmt->bind_param("ii", $id, $userId);
$stmt->execute();

// Redirect the user to the profile page
header("Location: profile.php");
exit();
?>
