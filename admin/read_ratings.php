<?php
include 'header_adminpages.php';
include '../config/db.php';

// SQL query to retrieve data from the 'restuarant_rating' table
$sql = "SELECT * FROM restaurant_rating";


// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>rating_id</th>
                    <th>member_id</th>
                    <th>name</th>
                    <th>rating_type</th>
                    <th>rating</th>
                    <th>Update/Delete</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>        
                <td>{$row['rating_id']}</td>
                <td>{$row['member_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['rating_type']}</td>
                <td>{$row['rating']}</td>
                <td><a class='btn btn-primary btn-sm' href='manage_ratings.php?rating_id=$row[rating_id]'>Update or Delete</a></td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>