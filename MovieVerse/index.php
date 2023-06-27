<?php
$page = "index";
session_start();
include "header.php";
include "navbar.php";
?>

<main id="main" class="container-fluid">
    <!-- greet user -->
    <div class="row">
        <div class="col-lg-12 mb-3">
            <?php
            // greet user if he/she is logged in
            if (isset($_SESSION["firstname"])) {
                echo '<div class="fs-2 mt-3 text-center">Welcome back, ' . $_SESSION["username"] . '!</div>';
            } else {
                echo '<div class="fs-2 mt-3 text-center">Welcome to MovieVerse!</div>';
            }
            ?>
        </div>
    </div>

    <!-- search tab -->
    <div class="row justify-content-center">
        <div class="col-xs-10 col-lg-6">
            <div class="well search-result">
                <form action="search.php" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for a genre, director, actor or actress">
                        <span class="input-group-btn">
                            <button class="btn mx-2 mt-1" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                Search
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    // display new movies
    include "includes/db_handler.inc.php";

    // execute search for new movies
    $stmt = $conn->prepare("SELECT * FROM movie ORDER BY id DESC LIMIT 5;");
    $stmt->execute();
    $result = $stmt->get_result();

    // display new movies
    if ($result->num_rows > 0) {

        // display section title
        echo '
        <div class="row justify-content-center">
            <div class="col-xs-10 col-lg-6">
                <p class="fs-2 mt-3">New Movies</p>
            </div>
        </div>';

        echo '<div class="row justify-content-center">
                <div class="col-xs-10 col-lg-6">
                    <div class="row">';

        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="card-container col-lg-6 col-12 my-3" id="card-container">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="' . htmlspecialchars($row['coverImage']) . '" alt="Cover Image" style="width: 100%; height: 320px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["title"] . '</h5>
                            <div class="card-text text-muted">Duration: ' . $row["duration"] . '</div>
                            <div class="card-text text-muted">Cast: ' . $row["cast"] . '</div>
                            <div class="card-text text-muted">Ratings: ' . $row["ratings"] . '</div>
                            <div class="card-buttons">
                                <a href="movieDetail.php?movie_id=' . $row["id"] . '" class="btn btn-primary btn-sm mt-1">View Details</a>
                                <a href="add_to_favorites.php?movie_id=' . $row["id"] . '" class="btn btn-primary btn-sm mt-1">Favourites</a>
                                <a href="add_to_watched.php?movie_id=' . $row["id"] . '" class="btn btn-primary btn-sm mt-1">Watched</a>
                                <a href="add_to_watch_later.php?movie_id=' . $row["id"] . '" class="btn btn-primary btn-sm mt-1">Watch Later</a>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }

        // close div for new movies
        echo '      </div>
                </div>
            </div>';

        // close connection
        $conn->close();
    }

    ?>

    <script>
        // Function to set the same height for all cards
        function setCardHeight() {
            const cards = document.querySelectorAll('.card');
            let maxHeight = 0;

            cards.forEach(card => {
                card.style.height = 'auto';
                const cardHeight = card.offsetHeight;
                maxHeight = Math.max(maxHeight, cardHeight);
            });

            cards.forEach(card => {
                card.style.height = maxHeight + 'px';
            });
        }

        // Call the function when the page is loaded and when it is resized
        window.addEventListener('DOMContentLoaded', setCardHeight);
        window.addEventListener('resize', setCardHeight);
    </script>


</main>

<?php
include "footer.php";
?>
