<?php

if (isset($_POST["submit"])) {

    $anrede = $_POST["anrede"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_repeat = $_POST["pwdconfirm"];

    require_once "db_handler.inc.php";
    require_once "functions.inc.php";

    if (invalid_names($firstname, $lastname) !== false) {
        header("location: ../registration.php?error=invalidNameOrLastName");
        exit();
    }
    if (invalid_email($email) !== false) {
        header("location: ../registration.php?error=invalidEmail");
        exit();
    }
    if (no_password_match($password, $password_repeat) !== false) {
        header("location: ../registration.php?error=noPasswordMatch");
        exit();
    }
    if (user_exists($conn, $email) !== false) {
        header("location: ../registration.php?error=userTaken");
        exit();
    }

    create_user($conn, $firstname, $lastname, $email, $username, $password);
}
else {
    // if did not click on button, send user back to page to avoid manual access
    header("location: ../registration.php");
}
