<?php
$page = "profile";
session_start();
include "header.php";
include "navbar.php";
?>


<main>
  <div class="container my-5">
    <div class="row my-3">
      <div class="col-md-3">
        <p class="fs-2 mx-3 mt-3">Profile</p>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION["firstname"];?></h5>
            <p class="card-text"><?php echo $_SESSION["email"];?></p>
            <p class="card-text">Location: Vienna, Austria</p>
            <a href="editProfile.php" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-md-9 my-3">
        <p class="fs-2 mx-3 mt-3">Movie Lists</p>
        <div class="row my-3">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Watchlist</h5>
                <p class="card-text">You have added 10 movies to your watchlist.</p>
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Add Movie</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Favorites</h5>
                <p class="card-text">You have added 5 movies to your favorites.</p>
                <a href="#" class="btn btn-primary"><i class="fas fa-plus"></i> Add Movie</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  </div>

</main>

<?php
include "footer.php";
?>