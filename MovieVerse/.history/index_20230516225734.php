<?php
$page = "index";
session_start();
include "header.php";
include "navbar.php";
?>

<main id="main">
    <!-- greet user -->
    <div class="row">
        <div class="col-lg-12 text-center mb-3">
            <?php
            // greet user if he/she is logged in
            if (isset($_SESSION["firstname"])) {
                echo '<p class="fs-2 mx-3 mt-3">Welcome back, ' . $_SESSION["username"] . '!</p>';
            } else {
                echo '<p class="fs-2 mx-3 mt-3">Welcome to MovieVerse!</p>';
            }
            ?>
        </div>
    </div>

    <!-- search tab -->
    <div class="row justify-content-center">
        <div class="col-xs-12 col-md-10 col-lg-8">
        <form action="search.php" method="get">
    <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search for a genre, director, actor or actress">
        <span class="input-group-btn">
            <button class="btn mx-2" type="submit">
                <i class="glyphicon glyphicon-search"></i>
                Search
            </button>
        </span>
    </div>
</form>

            <div class="well search-result">
                <div class="row mb-2">
                    <div class="col-sm-3 col-xl-2">
                        <img class="search-image-responsive" src="assets/img/Pulp-Fiction.jpg.webp" alt="...">
                    </div>
                    <div class="col-sm-9 col-xl-10">
                        <a href="#">
                            <h3>Pulp Fiction</h3>
                            <p class="card-text">Ut quis libero id orci semper porta ac vel ante. In nec laoreet sapien. Nunc hendrerit ligula at massa sodales, ullamcorper rutrum orci semper.</p>
                        </a>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-sm-3 col-xl-2">
                        <img class="search-image-responsive" src="assets/img/triangle-of-sadness.jpeg" alt="...">
                    </div>
                    <div class="col-sm-9 col-xl-10">
                        <a href="#">
                            <h3>Triangle of Sadness</h3>
                            <p class="card-text">Ut quis libero id orci semper porta ac vel ante. In nec laoreet sapien. Nunc hendrerit ligula at massa sodales, ullamcorper rutrum orci semper.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- add movie option and recommended movies if user is logged in -->
    <div class="container" id="optionsForLoggedInUsers" <?php
                                                        if (!isset($_SESSION["firstname"])) { ?>style="display:none" <?php } ?>>
        <!-- add movie button to toggle form -->
        <div class="row justify-content-center my-3">
            <p class="text-center">Did not find the movie you were looking for?</p>
            <div class="col-sm-3 text-center">
                <button type="submit" name="addMovieToggle" id="addMovieToggle" class="btn btn-primary my-3">Add Movie</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-10 col-md-8 col-lg-6 my-3" id="addMovieForm" style="display: none;">
                <!-- add movie form -->
                <h2 class="text-center mb-4">Add New Movie</h2>
                <form action="includes/add_movie.inc.php" method="post">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" id="duration" name="duration" required>
                    </div>
                    <div class="form-group">
                        <label for="genre">Genre:</label>
                        <input type="text" class="form-control" id="genre" name="genre" required>
                    </div>
                    <div class="form-group">
                        <label for="cast">Cast:</label>
                        <input type="text" class="form-control" id="cast" name="cast" required>
                    </div>
                    <div class="form-group">
                        <label for="ratings">Ratings:</label>
                        <input type="text" class="form-control" id="ratings" name="ratings" required>
                    </div>
                    <div class="form-group">
                        <label for="review">Review:</label>
                        <input type="text" class="form-control" id="review" name="review" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="submit" id="addMovieRequest" class="btn btn-primary my-3">Send request</button>
                </form>
            </div>
        </div>
        <!-- recommended movies -->
        <div class="row">
            <!-- carousel of recommended movies-->
            <div class="col-xs-12 col-md-10 col-lg-8">
                <p class="fs-2 mx-3 mt-3">Recommended to you</p>
                <div id="multipleItemCarousel" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/breakfast-at-tiffanys.jpeg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Breakfast At Tiffany's</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/Halloween-Movie-Poster.jpeg.webp" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Halloween</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/moonlight-poster.jpeg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Moonlight</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/Pulp-Fiction.jpg.webp" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Pulp Fiction</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/silence-of-the-lambs.jpeg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">The Silence Of The Lambs </h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/the-rocketeer.jpeg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">The Rocketeer</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card">
                                    <div class="img-wrapper">
                                        <img src="assets/img/triangle-of-sadness.jpeg" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Trangle of Sadness</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        <a href="#" class="btn btn-primary">Read Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev position-fixed" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next position-fixed" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>