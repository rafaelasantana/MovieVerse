<?php
$page = "search";
session_start();
include "header.php";
include "navbar.php";

if (isset($_GET['search'])) {
    $search_term = $_GET['search'];

    include "includes/db_handler.inc.php";

    $stmt = $conn->prepare("SELECT * FROM movie WHERE title LIKE ? OR cast LIKE ? OR genre LIKE ?");
    $search_term = '%' . $search_term . '%'; // use wildcards for the LIKE comparison
    $stmt->bind_param("sss", $search_term, $search_term, $search_term);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <p class="fs-2 mt-3">Search Results</p>
                </div>
            </div>';

        echo '<div class="row justify-content-center">';

        while ($row = $result->fetch_assoc()) {
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
        echo "No results found for '" . htmlspecialchars($_GET['search']) . "'";
    }

    $conn->close();
} else {
    echo "Please enter a search term.";
}
?>
