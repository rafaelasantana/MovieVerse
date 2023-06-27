<?php
$page = "index";
session_start();
include "header.php";
include "navbar.php";
?>

<main id="main">
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

    <!-- check if user is logged in -->
    <div id="optionsForLoggedInUsers" <?php
                                        if (!isset($_SESSION["firstname"])) { ?>style="display:none" <?php } ?>>
        <!-- display recommended movies for this user -->
        <?php
        include "includes/db_handler.inc.php";

        // execute search for recommended movies for this user
        $stmt = $conn->prepare("SELECT * FROM recommended_movies
                                    JOIN movie_import ON recommended_movies.movie_name = movie_import.name
                                    WHERE user_id = ?;");
        $stmt->bind_param('s', $_SESSION["id"]);
        $stmt->execute();
        $result = $stmt->get_result();

        // display recommended movies
        if ($result->num_rows > 0) {

            // display section title
            echo '
                        <div class="row justify-content-center">
                            <div class="col-xs-10 col-lg-6">
                                <p class="fs-2 mt-3">Recommended to you</p>
                            </div>
                        </div>';

            // open div for movies
            echo '
                <div class="well search-result row justify-content-center">
                    <div class="col-xs-10 col-lg-6">';

            // display each movie
            while ($row = $result->fetch_assoc()) {
                echo '
                                <div class="row mb-2 justify-content-center mx-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">' . $row["name"] . '</h5>
                                            <div class="card-text text-muted">' . $row["year"] . '</div>
                                            <div class="card-text text-muted">' . $row["director"] . ', ' . $row["star"] . '</div>
                                        </div>
                                    </div>
                                </div>
                            ';
            }

            // close div for movies
            echo '
                    </div>
                </div>
                ';

            // close connection
            $conn->close();
        };
        ?>
    </div>
</main>

<?php
include "footer.php";
?>