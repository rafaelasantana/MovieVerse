<?php
$page = "registration";
session_start();
include "header.php";
include "navbar.php";
include "database.php";
?>

<?php

$error = false;
$erroranrede = "";
$errorfirstname = "";
$errorlastname = "";
$erroremail = "";
$errorpassword = "";
$errorrepeatpassword = "";
$errorusername = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = $_POST["username"];
  require_once('conn.php');


  if (empty($_POST["anrede"])) {
    $error = true;
    $erroranrede = "Please select an alternative!";
  }

  if (empty($_POST["firstname"])) {
    $error = true;
    $errorfirstname = "Please write your first name!";
  }

  if (empty($_POST["lastname"])) {
    $error = true;
    $errorlastname = "Please write your last name!";
  }

  if (empty($_POST["email"])) {
    $error = true;
    $erroremail = "Please write your E-mail!";
  } else {
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      $error = true;
      $erroremail = "Please write a correct E-mail!";
    }
  }

  if (empty($_POST["password"])) {
    $error = true;
    $errorrepeatpassword = "Please write your password!";
  } else {
    if (strlen($_POST["password"]) >= 8) {
      if (strcmp($_POST['password'], $_POST['pwdconfirm']) != 0) {
        $error = true;
        $errorpassword = "Please rewrite your password!";
      }
    } else {
      $error = true;
      $errorrepeatpassword = "Password must be at least 8 characters long!";
    }
  }

  if (empty($_POST["username"])) {
    $error = true;
    $errorusername = "Please write an username!";
  } else {
    if (isset($_POST['username'])) {
      $sql_u = "SELECT * FROM user WHERE username='$username'";
      $res_u = mysqli_query($conn, $sql_u);
      if (mysqli_num_rows($res_u) > 0) {
        $error = true;
        $errorusername = "Sorry, this username is already taken.";
      }
    }
  }
}
if (!$error) {
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once('conn.php');

    $anrede = $_POST["anrede"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $username = $_POST["username"];

    $sql = "INSERT INTO user(anrede, firstname, lastname, email, password, username) values(?,?,?,?,?,?);";
    $insert = $conn->prepare($sql);
    $insert->bind_param("ssssss", $anrede, $firstname, $lastname, $email, $password, $username);
    $insert->execute();
    echo "<script>window.location.href='login.php'</script>";
    $conn = null;
  }
}
?>

<br>
<br>

<div class="container col">
  <!--
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="row g-3 needs-validation" novalidate> -->
  <!-- testing with includes/ logic -->
  <form action="includes/registration.inc.php" method="POST" class="row g-3 needs-validation" novalidate>

    <h1 class="text-center text-muted ">Sign Up</h1>

    <br>

    <div class="text"> Already a user? <a href="login.php" style="color:#8294C4"> LOGIN </a></div>

    <hr>

    <div class="form-group">
      <label for="validationCustom01">Anrede:</label>
      <select class="form-control" id="validationCustom01" name="anrede" required>
        <option value="" disabled selected>Please select</option>
        <option>Mr</option>
        <option>Mrs</option>
        <option>Other</option>
      </select>
      <div class="invalid-feedback">
        Please select an alternative!
      </div>

      <?php
      if (isset($erroranrede)) {
        echo "<p class=\"errortxt\">" . $erroranrede . "</p>";
      }

      ?>
    </div>

    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">First Name</label>
      <input type="text" class="form-control" value="<?PHP /*if(!empty($_POST["firstname"])){echo $_POST["firstname"];} */ ?>" id="validationCustom02" placeholder="First name" name="firstname" required>
      <div class="invalid-feedback">
        Please write your first name!
      </div>
      <?php
      if (isset($errorfirstname)) {
        echo "<p class=\"errortxt\">" . $errorfirstname . "</p>";
      }
      ?>
    </div>

    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Last Name</label>
      <input type="text" class="form-control" value="<?PHP /* if(!empty($_POST["lastname"])){echo $_POST["lastname"];} */ ?>" id="validationCustom03" placeholder="Last name" name="lastname" required>
      <div class="invalid-feedback">
        Please write your last name!
      </div>
      <?php
      if (isset($errorlastname)) {
        echo "<p class=\"errortxt\">" . $errorlastname . "</p>";
      }
      ?>
    </div>

    <div class="col-md-6">
      <label for="validationCustom04" class="form-label">Email</label>
      <input type="email" class="form-control" value="<?PHP /* if(!empty($_POST["email"])){echo $_POST["email"];} */ ?>" id="validationCustom04" placeholder="example@gmail.com" name="email" required>
      <div class="invalid-feedback">
        Please write your E-mail!
      </div>
      <?php
      if (isset($erroremail)) {
        echo "<p class=\"errortxt\">" . $erroremail . "</p>";
      }
      ?>
    </div>

    <div class="col-md-6">
      <label for="validationCustom05" class="form-label">User Name</label>
      <input type="text" class="form-control" value="<?PHP /* if(!empty($_POST["username"])){echo $_POST["username"];} */ ?>" id="validationCustom05" placeholder="User name" name="username" required>
      <div class="invalid-feedback">
        Please write an username!
      </div>
      <?php

      if (isset($errorusername)) {
        echo "<p class=\"errortxt\">" . $errorusername . "</p>";
      }
      ?>
    </div>

    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
      <div class="invalid-feedback">
        Please write your password!
      </div>
      <?php

      if (isset($errorrepeatpassword)) {
        echo "<p class=\"errortxt\">" . $errorrepeatpassword . "</p>";
      }
      ?>
    </div>

    <div class="col-md-6">
      <label for="inputRepeatPassword4" class="form-label">Repeat Password</label>
      <input type="password" class="form-control" id="inputRepeatPassword4" placeholder="Repeat password" name="pwdconfirm" required>
      <div class="invalid-feedback">
        Please rewrite your password!
      </div>
      <?php

      if (isset($errorpassword)) {
        echo "<p class=\"errortxt\">" . $errorpassword . "</p>";
      }
      ?>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-login" name="submit" value="Submit">Sign Up</button>
    </div>

  </form>

</div>
<hr class="featurette-divider">

<?php
include "footer.php";
?>

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>