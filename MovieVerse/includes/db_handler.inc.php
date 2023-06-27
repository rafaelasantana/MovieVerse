<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//for Rafaela
$host ="localhost";
$user = "root";
$password ="mysql";
$database = "movieverse";

// for Livia
// $host ="localhost";
// $user = "root";
// $password ="";
// $database = "movieverseprojekt";

// Create the database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}

// Test the connection using mysqli_ping()
if (mysqli_ping($conn)) {
} else {
    printf("Error: %s\n", mysqli_error($conn));
}
