<?php

include "db_handler.inc.php";

function empty_input_registration($anrede, $firstname, $lastname, $email, $username, $password, $password_repeat) {
    $is_empty = false;
    if (empty($anrede) || empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($password_repeat)) {
        $is_empty = true;
    }
    return $is_empty;
}

function empty_input_login($email, $password) {
    $is_empty = false;
    if (empty($email) || empty($password)) {
        $is_empty = true;
    }
    return $is_empty;
}

function invalid_names($name, $last_name) {
    $is_invalid = false;
    // check if name and last name match the pattern (only letters a-z or numbers)
    if (!preg_match('/^[a-zA-Z0-9]*$/', $name) || !preg_match('/^[a-zA-Z0-9]*$/', $last_name)) {
        $is_invalid = true;
    }
    return $is_invalid;
}

function invalid_email($email) {
    $email_invalid = false;
    // built in function to check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_invalid = true;
    }
    return $email_invalid;
}

function no_password_match($password, $password_repeat) {
    $no_match = false;
    if ($password !== $password_repeat) {
        $no_match = true;
    }
    return $no_match;
}

function user_exists($conn, $username) {
    $sql = "select * from user where username = ?;"; // '?' is a placeholder. Using prepared statements to avoid eg. sql injections
    $stmt = mysqli_stmt_init($conn); // initialize statement

    // checking if statement is valid for db
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtFailed");
        exit();
    }

    // binding data to the statement
    mysqli_stmt_bind_param($stmt, "s", $username); // 's' for type=string;

    // execute statement
    mysqli_stmt_execute($stmt);
    $result_data = mysqli_stmt_get_result($stmt);

    // analyse returned results
    if ($row = mysqli_fetch_assoc($result_data)) {
        return $row;
    }
    else {
        $exists = false;
        return $exists;
    }

    mysqli_stmt_close($stmt);
}

function create_user($conn, $firstname, $lastname, $email, $username, $password) {

    $sql = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `username`, `password`) VALUES (?, ?, ?, ?, ?);"; // '?' is a placeholder. Using prepared statements to avoid eg. sql injections
    $stmt = mysqli_stmt_init($conn); // initialize statement

    // checking if statement is valid
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtFailed" . mysqli_error($conn));
        exit();
    }

    // hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    // binding data to the statement
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $username, $hashed_password); // 's' for type=string, one for each parameter

    // execute statement
    mysqli_stmt_execute($stmt);
    header("location: ../registration.php?error=none");

    // close statement
    mysqli_stmt_close($stmt);
    exit();
}

function loginUser($conn, $username, $password) {
    // user_exists returns an associative array with all column values
    $user_exists = user_exists($conn, $username);

    // check if user exists
    if ($user_exists === false) {
        header("location: ../login.php?error=loginInvalid");
        exit();
    }

    // get hashed password from associative array
    $password_hashed = $user_exists["password"];
    $check_passwords = password_verify($password, $password_hashed);

    if ($check_passwords === false) {
        header("location: ../login.php?error=loginInvalid");
        exit();
    }
    // login user
    else if ($check_passwords === true) {
        // set session for this user
        session_start();
        echo "login worked!";

        $_SESSION["username"] = $user_exists["username"];
        $_SESSION["firstname"] = $user_exists["firstname"];
        $_SESSION["email"] = $user_exists["email"];
        $_SESSION["role"] = $user_exists["role"];
        $_SESSION["status"] = $user_exists["status"];
        $_SESSION["id"] = $user_exists["id"];
        header("location: ../index.php");
        exit();
    }
}

function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

function getAllUsers($conn) {
    $sql = "SELECT * FROM users_with_rights WHERE usersId != " . $_SESSION["usersId"] . ";";
    return mysqli_query($conn, $sql);
}

function empty_input_movie($title, $duration, $genre, $cast, $ratings, $review, $description) {
    $is_empty = false;
    if (empty($title) || empty($duration) || empty($genre) || empty($cast) || empty($ratings) || empty($review) || empty($description)) {
        $is_empty = true;
    }
    return $is_empty;
}

// adds a new movie to the database
function add_movie($conn, $title, $duration, $genre, $cast, $ratings, $review, $description) {
    $sql = "INSERT INTO `movie`(`titel`, `duration`, `genre`, `cast`, `ratings`, `review`, `description`) VALUES (?, ?, ?, ?, ?, ?, ?);"; // '?' is a placeholder. Using prepared statements to avoid eg. sql injections
    $stmt = mysqli_stmt_init($conn); // initialize statement

    // checking if statement is valid
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=addMovieStmtFailed" . mysqli_error($conn));
        exit();
    }

    // binding data to the statement
    mysqli_stmt_bind_param($stmt, "sssssss", $title, $duration, $genre, $cast, $ratings, $review, $description); // 's' for type=string, one for each parameter

    // execute statement
    mysqli_stmt_execute($stmt);
    header("location: ../index.php?error=none");

    // close statement
    mysqli_stmt_close($stmt);
    exit();
}

