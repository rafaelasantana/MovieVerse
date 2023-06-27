<?php
session_start();
include "includes/db_handler.inc.php";
include "header.php";
include "navbar.php";
?>

<main class="container mt-4">
    <?php
    // check if search data was submitted
    if (isset($_GET['search'])) {
        $search_term = $_GET['search'];

        // prepare your query, replacing 'title', 'cast', and 'genre' with your actual column names
        $stmt = $conn->prepare("SELECT * FROM movie WHERE title LIKE ? OR cast LIKE ? OR genre LIKE ?");
        $like_term = "%" . $search_term . "%";
        $stmt->bind_param("sss", $like_term, $like_term, $like_term);
        
        // execute the query
        $stmt->execute();
        $result = $stmt->get_result();

        // process and display the result
        if ($result->num_rows > 0) {
            echo '<h2 class="text-center mb-4">Search Results for "' . htmlspecialchars($search_term) . '"</h2>';
            echo '<div class="row">';

            while ($row = $result->fetch_assoc()) {
                // display each result as desired
                echo '
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card h-100">
                            <img class="card-img-top" src="'.htmlspecialchars($row['coverImage']).'" alt="Cover Image" style="width: 100%; height: 320px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">' . $row["title"] . '</h5>
                                <p class="card-text">Duration: ' . $row["duration"] . '</p>
                                <p class="card-text">Cast: ' . $row["cast"] . '</p>
                                <p class="card-text">Ratings: ' . $row["ratings"] . '</p>
                                <a href="movie_detail.php?movie_id=' . $row['id'] . '" class="mt-auto btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                ';
            }

            echo '</div>';
        } else {
            echo '<h2 class="text-center mb-4">No results found for "' . htmlspecialchars($search_term) . '".</h2>';
        }

        // close connection
        $conn->close();
    } else {
        echo '<h2 class="text-center mb-4">Please enter a search term.</h2>';
    }
    ?>
</main>