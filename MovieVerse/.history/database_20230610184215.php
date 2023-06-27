<?php

//for Rafaela

// $host ="localhost";
//$user = "root";
//$password ="mysql";
//$database = "movieverse";

// for Livia
$host ="localhost";
$user = "root";
$password ="";
$database = "movieVerseProject";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}

