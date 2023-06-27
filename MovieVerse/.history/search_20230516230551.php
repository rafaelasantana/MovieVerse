<?php
include "database.php";

$search = $_GET['search'];

$stmt = $conn->prepare("SELECT * FROM movie WHERE titel LIKE ? OR genre LIKE ? OR cast LIKE ?");
$search_param = "%" . $search . "%";
$stmt->bind_param('sss', $search_param, $search_param, $search_param);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["titel"]. " - Duration: " . $row["duration"]. " - Genre: " . $row["genre"]. " - Cast: " . $row["cast"]. " - Ratings: " . $row["ratings"]. " - Review: " . $row["review"]. " - Description: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
