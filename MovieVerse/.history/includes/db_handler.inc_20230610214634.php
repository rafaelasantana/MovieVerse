<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "movieverseprojekt";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}

if (!mysqli_ping($conn)) {
    printf ("Error: %s\n", mysqli_error($conn));
}