<?php
// What to do with the data
if (isset($_POST['submit']))
{
    // $memberid=$_POST['memberid'];
    $firstname =$_POST['firstname'];
    $lastname =$_POST['lastname'];
    $contactnumber =$_POST['contactnumber'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $send_offers = 0;
    $user_name =$_POST['user_name'];
    $pass_word =$_POST['pass_word'];


// come to the database server
include 'config/db.php';

// write sql statement to insert data
$sql="insert into user_registration(first_name,last_name,contact_number,e_mail,address,send_offers,user_name,password)values('$firstname','$lastname','$contactnumber','$email','$address','$send_offers','$user_name','$pass_word')";

if($conn -> query($sql)==TRUE)
{
    echo "Your data was recorded";
}
else
{
    echo "Error" . $sql . "<br>" . $conn -> error;
}
//close the data base connection
    $conn->close();
}
?>