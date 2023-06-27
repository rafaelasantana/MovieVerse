<?php
$page = "profile";
session_start();
include "header.php";
include "navbar.php";
include "includes/db_handler.inc.php";

$userId = $_SESSION["id"];
$watchlist_count = 0;
$favorites_count = 0;
$tobewatched_count = 0;

if ($userId) {
  // get movie list counts
  $stmt = $conn->prepare("SELECT COUNT(*) as count FROM watched WHERE user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $watchlist_count = $row['count'];

  $stmt = $conn->prepare("SELECT COUNT(*) as count FROM watch_later WHERE user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $tobewatched_count = $row['count'];

  $stmt = $conn->prepare("SELECT COUNT(*) as count FROM favorites WHERE user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $result = $stmt->get_result();
  $row = $result->fetch_assoc();
  $favorites_count = $row['count'];

  // Fetch the movie data for each movie list
  $stmt = $conn->prepare("SELECT movie.* FROM watched INNER JOIN movie ON watched.movie_id = movie.id WHERE watched.user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $watched_movies = $stmt->get_result();

  $stmt = $conn->prepare("SELECT movie.* FROM favorites INNER JOIN movie ON favorites.movie_id = movie.id WHERE favorites.user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $favorite_movies = $stmt->get_result();

  $stmt = $conn->prepare("SELECT movie.* FROM watch_later INNER JOIN movie ON watch_later.movie_id = movie.id WHERE watch_later.user_id = ?");
  $stmt->bind_param("i", $userId);
  $stmt->execute();
  $tobewatched_movies = $stmt->get_result();
}

// Close the connection
$conn->close();
?>


<main>
  <div class="container my-5">
    <div class="row my-3">
      <div class="col-md-4">
        <p class="fs-2 mx-3 mt-3">Profile</p>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION["firstname"]; ?></h5>
            <p class="card-text"><?php echo $_SESSION["email"]; ?></p>
            <p class="card-text">Location: Vienna, Austria</p>
            <a href="editProfile.php" class="btn btn-primary"><i class="fas fa-edit"></i> Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-md-12 my-3">
        <p class="fs-2 mx-3 mt-3">Movie Lists</p>
        <div class="row my-3">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Watched</h5>
                <p class="card-text">You have added <?php echo $watchlist_count; ?> movies to your watchlist.</p>
                <ul class="list-group mt-3">
                  <?php while ($row = $watched_movies->fetch_assoc()) : ?>
                    <li class="list-group-item">
                      <a href="movieDetail.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                      <a href="removeMovie.php?list=watched&id=<?php echo $row['id']; ?>" class="float-end"><i class="fas fa-trash"></i></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Favorites</h5>
                <p class="card-text">You have added <?php echo $favorites_count; ?> movies to your favorites.</p>
                <ul class="list-group mt-3">
                  <?php while ($row = $favorite_movies->fetch_assoc()) : ?>
                    <li class="list-group-item">
                      <a href="movieDetail.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                      <a href="removeMovie.php?list=favorites&id=<?php echo $row['id']; ?>" class="float-end"><i class="fas fa-trash"></i></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Watch Later</h5>
                <p class="card-text">You have added <?php echo $tobewatched_count; ?> movies to watch in the future.</p>
                <ul class="list-group mt-3">
                  <?php while ($row = $tobewatched_movies->fetch_assoc()) : ?>
                    <li class="list-group-item">
                      <a href="movieDetail.php?movie_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
                      <a href="removeMovie.php?list=watch_later&id=<?php echo $row['id']; ?>" class="float-end"><i class="fas fa-trash"></i></a>
                    </li>
                  <?php endwhile; ?>
                </ul>
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
