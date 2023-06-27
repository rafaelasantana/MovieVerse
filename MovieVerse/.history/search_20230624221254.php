<?php
session_start();
include "includes/db_handler.inc.php";
include "header.php";
include "navbar.php";

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
        echo '<div class="row justify-content-center">';

        while ($row = $result->fetch_assoc()) {
            // display each result as desired
            echo '
                <div class="col-lg-3 mb-2">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="'.htmlspecialchars($row['coverImage']).'" alt="Cover Image" style="width: 100%; height: 320px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">' . $row["title"] . '</h5>
                            <div class="card-text text-muted">Duration: ' . $row["duration"] . '</div>
                            <div class="card-text text-muted">Cast: ' . $row["cast"] . '</div>
                            <div class="card-text text-muted">Ratings: ' . $row["ratings"] . '</div>
                        </div>
                    </div>
                </div>
            ';
        }

        echo '</div>';
    } else {
        echo "No results found for '" . htmlspecialchars($search_term) . "'.";
    }

    // close connection
    $conn->close();
} else {
    echo "Please enter a search term.";
}
?>