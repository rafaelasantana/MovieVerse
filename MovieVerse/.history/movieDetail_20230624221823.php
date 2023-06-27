<?php
session_start();
include "includes/db_handler.inc.php";
include "header.php";
include "navbar.php";
?>

<main class="container mt-4">
    <?php
    // check if movie id was submitted
    if (isset($_GET['movie_id'])) {
        $movie_id = $_GET['movie_id'];

        // prepare your query, replace 'id' with your actual id column name
        $stmt = $conn->prepare("SELECT * FROM movie WHERE id = ?");
        $stmt->bind_param("i", $movie_id);
        
        // execute the query
        $stmt->execute();
        $result = $stmt->get_result();

        // process and display the result
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // display the result as desired
            echo '
                <div class="row">
                    <div class="col-md-6">
                        <img class="img-fluid" src="'.htmlspecialchars($row['coverImage']).'" alt="Cover Image">
                    </div>
                    <div class="col-md-6">
                        <h2>' . $row["title"] . '</h2>
                        <p>Duration: ' . $row["duration"] . '</p>
                        <p>Cast: ' . $row["cast"] . '</p>
                        <p>Ratings: ' . $row["ratings"] . '</p>
                        <p>Description: ' . $row["description"] . '</p>
                    </div>
                </div>
            ';
        } else {
            echo '<h2 class="text-center mb-4">No movie found with id: ' . htmlspecialchars($movie_id) . '.</h2>';
        }

        // close connection
        $conn->close();
    } else {
        echo '<h2 class="text-center mb-4">No movie id provided.</h2>';
    }
    ?>
</main>