<?php
include 'header_adminpages.php';
include '../config/db.php';
// SQL query to retrieve data from the 'customer_feedback' table
// $sql = "SELECT * FROM customer_feedback where message_type='feedback'";
$sql = "SELECT * FROM customer_feedback";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>feedback_id</th>
                    <th>member_id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>subject</th>
                    <th>message_type</th>
                    <th>message</th>
                    <th>Update/Delete</th>
                    
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['feedback_id']}</td>
                <td>{$row['member_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['subject']}</td>
                <td>{$row['message_type']}</td>
                <td>{$row['message']}</td>

                <td><a class='btn btn-primary btn-sm' href='manage_feedback.php?feedback_id=$row[feedback_id]'>Update or Delete</a></td>
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