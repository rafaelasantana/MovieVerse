<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "db_handler.inc.php";
    require_once "functions.inc.php";

    if (empty_input_login($username, $password) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $username, $password);
    exit();

}
else {
    header("location: ../registration.php");
    exit();
}