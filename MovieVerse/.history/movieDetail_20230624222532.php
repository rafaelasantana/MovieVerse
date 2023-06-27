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
                        <img class="img-fluid rounded mb-3" src="'.htmlspecialchars($row['coverImage']).'" alt="Cover Image">
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">' . $row["title"] . '</h2>
                                <p class="card-text"><strong>Duration:</strong> ' . $row["duration"] . '</p>
                                <p class="card-text"><strong>Cast:</strong> ' . $row["cast"] . '</p>
                                <p class="card-text"><strong>Ratings:</strong> ' . $row["ratings"] . '</p>
                                <p class="card-text"><strong>Description:</strong> ' . $row["description"] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            echo '<div class="alert alert-danger text-center mt-4" role="alert">No movie found with id: ' . htmlspecialchars($movie_id) . '.</div>';
        }

        // close connection
        $conn->close();
    } else {
        echo '<div class="alert alert-danger text-center mt-4" role="alert">No movie id provided.</div>';
    }
    ?>
</main>
