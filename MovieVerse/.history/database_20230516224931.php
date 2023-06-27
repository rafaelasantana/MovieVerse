<?php

//for Rafaela

//$host ="localhost";
//$user = "root";
//$password ="mysql";
//$database = "movieverse";

$host ="localhost";
$user = "root";
$password ="";
$database = "movieverse";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}