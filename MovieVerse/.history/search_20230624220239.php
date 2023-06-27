<?php
include "includes/db_handler.inc.php";

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
        while ($row = $result->fetch_assoc()) {
            // display each result as desired
        }
    } else {
        echo "No results found for '" . htmlspecialchars($search_term) . "'.";
    }

    // close connection
    $conn->close();
} else {
    echo "Please enter a search term.";
}
?>
