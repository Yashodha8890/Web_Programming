<?php
include 'headers/reservation_header.php';
// What to do with the data
if (isset($_POST['reserve_submit']))
{
    $memberId=$_POST['member_id'];
    $name =$_POST['name'];
    $contactNumber =$_POST['contact_number'];
    $bookingDate =$_POST['booking_date'];
    $reservationDate =$_POST['reservation_date'];
    $numberOfGuests =$_POST['number_of_guests'];
    $CheckInTime =$_POST['check_in_time'];
    $CheckOutTime =$_POST['check_out_time'];
    $PreferableView =$_POST['preferable_view'];
    $SpecialArrangement =$_POST['special_arrangements'];


// come to the database server
include 'config/db.php';

// write sql statement to insert data
$sql="insert into table_reservation(member_id,name,contact_number,booking_date,reservation_date,number_of_guests,check_in_time,check_out_time,preferable_view,special_arrangements)values('$memberId','$name','$contactNumber','$bookingDate','$reservationDate','$numberOfGuests','$CheckInTime','$CheckOutTime','$PreferableView','$SpecialArrangement')";

if($conn -> query($sql)==TRUE)
{
    // echo "Your data was recorded";
    $sql = "SELECT * FROM table_reservation where member_id = 2";

// Execute the SQL query and store the result
    $result = $conn->query($sql);


    // Check if there are any results
    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-responsive'>
                <thead>
                    <tr>
                        <th>reservation_id </th>
                        <th>member_id</th>
                        <th>name</th>
                        <th>contact_number</th>
                        <th>booking_date</th>
                        <th>reservation_date</th>
                        <th>number_of_guests</th>
                        <th>check_in_time</th> 
                        <th>check_out_time</th> 
                        <th>preferable_view</th>
                        <th>special_arrangements</th> 


                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>";

        // Loop through the result set and display data in rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['reservation_id']}</td>
                    <td>{$row['member_id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['contact_number']}</td>
                    <td>{$row['booking_date']}</td>
                    <td>{$row['reservation_date']}</td>
                    <td>{$row['number_of_guests']}</td>
                    <td>{$row['check_in_time']}</td>
                    <td>{$row['check_out_time']}</td>
                    <td>{$row['preferable_view']}</td>
                    <td>{$row['special_arrangements']}</td>
                    <td><a class='btn btn-primary btn-sm' href='update_reservation.php?reservation_id=$row[reservation_id]'>Update</a></td>
                    <td><a class='btn btn-danger btn-sm' href='update_reservation.php?reservation_id=$row[reservation_id]'>Delete</a></td>
                </tr>";
        }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
/* $conn->close();
?> */
}
else
{
    echo "Error" . $sql . "<br>" . $conn -> error;
}
//close the data base connection
     $conn->close();
}
?>


