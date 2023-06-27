<?php
$search = $_GET['search'];

// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM movies WHERE title LIKE '%$search%' OR director LIKE '%$search%' OR genre LIKE '%$search%' OR cast LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]. " - Director: " . $row["director"]. " - Genre: " . $row["genre"]. " - Cast: " . $row["cast"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
