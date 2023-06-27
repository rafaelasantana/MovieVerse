<?php
$page = "editprofile";
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

include "header.php";
include "navbar.php";
include "database.php";

$error = false;
$erroranrede = "";
$errorfirstname = "";
$errorlastname = "";
$erroremail = "";
$errorpassword = "";
$errorrepeatpassword = "";
$errorusername = "";

require_once('./includes/db_handler.inc.php');

$username = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
  $user = $result->fetch_assoc();
} else {
  header("Location: login.php");
  exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
  
    if (empty($firstname)) {
      $error = true;
      $errorfirstname = "Please write your first name!";
    }
  
    if (empty($lastname)) {
      $error = true;
      $errorlastname = "Please write your last name!";
    }
  
    if (empty($email)) {
      $error = true;
      $erroremail = "Please write your E-mail!";
    } else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $erroremail = "Please write a correct E-mail!";
      }
    }
  
    if (!$error) {
      $sql = "UPDATE user SET firstname = ?, lastname = ?, email = ? WHERE username = ?;";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $firstname, $lastname, $email, $username);
  
      if ($stmt->execute()) {
        echo "Profile updated successfully!";
        // Optionally, redirect to a confirmation page
        // header("Location: confirmation_page.php");
      } else {
        echo "Error updating profile: " . $conn->error;
      }
  
      $stmt->close();
      $conn->close();
    }
  }
  

?>

<div class="container col">

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="row g-3 needs-validation" novalidate>

    <h1 class="text-center text-muted">Edit Profile</h1>
    <hr>

    <div class="col-md-6">
      <label for="validationCustom02" class="form-label">First Name</label>
      <input type="text" class="form-control" value="<?php echo $user['firstname']; ?>" id="validationCustom02" name="firstname" required>
      <div class="invalid-feedback">
        Please write your first name!
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom03" class="form-label">Last Name</label>
      <input type="text" class="form-control" value="<?php echo $user['lastname']; ?>" id="validationCustom03" name="lastname" required>
      <div class="invalid-feedback">
        Please write your last name!
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom04" class="form-label">Email</label>
      <input type="email" class="form-control" value="<?php echo $user['email']; ?>" id="validationCustom04" name="email" required>
      <div class="invalid-feedback">
        Please write your E-mail!
      </div>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" name="submit" class="btn btn-login" value="Submit">Update Profile</button>
    </div>

  </form>

</div>
<hr class="featurette-divider">

<?php
include "footer.php";
?>

<script>
  // Your form validation script
</script>
