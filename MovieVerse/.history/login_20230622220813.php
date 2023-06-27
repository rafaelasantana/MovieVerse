<?php
$page = "login";
session_start();
include "header.php";
include "navbar.php";
include "database.php";
?>
<?php

$errordata = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "Please fill out all the fields!";
    } else if (isset($_POST["username"]) && isset($_POST["password"])) {

        //include_once "conn.php";
        $username = $_POST["username"];
        $password = $_POST["password"];

        //selektieren wir die daten von tabelle users in datenbank um die login zu machen
        $sql = "SELECT id, username, password, role,  firstname, email FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    //echo "got results from the database";

    if (password_verify($password, $row["password"])) {
        //echo "verifying password";
        $username = $row["username"];
        $role = $row["role"];
        $id = $row["id"];
        //$status = $row["status"];
        $firstname = $row["firstname"];
        $email = $row["email"];

        $_SESSION["username"] = $username;
        $_SESSION["role"] = $role;
        //$_SESSION["status"] = $status;
        $_SESSION["id"] = $id;
        $_SESSION["firstname"] = $firstname;
        $_SESSION["email"] = $email;

        //echo "login worked!";
        //echo "<script>window.location.href='welcome.php'</script>";
        exit();
    } else if (!password_verify($password, $row["password"])) {
        $error = "Wrong username or password. Please try again!";
    } else if ($row["status"] == 'Inactive') {
        $error = "You are no longer allowed to access on this website!";
    }
}}
}

?>

<body>
    <div class="row justify-content-center">
        <div class="col-xs-10 col-lg-6">
            <!-- Testing with includes/ logic -->
            <form action="login.php" method="post" class="sign-in-form">
                <div class="fs-2 mt-3 text-center mb-3">Login</div>
                <div class="text-center">Not a user yet? <a href="registration.php" style="color:#8294C4"> SIGN UP</a></div>

                <div class="form-group mb-3">
                    <label>User Name:</label>
                    <input type="text" class="form-control" id="email" value="" name="username" required>
                </div>

                <div class="form-group mb-3">
                    <label>Password:</label>
                    <input type="password" class="form-control" id="password" value="" name="password" required>
                </div>

                <div style="color: red;">
                    <?php

                    if (isset($error)) {
                        echo "<p class=\"Rerror\">" . $error . "</p>";
                    }
                    ?>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-login">Log In</button>
                </div>
            </form>
        </div>

    </div>
    <hr class="featurette-divider">

    <?php

    include "footer.php";

    ?>