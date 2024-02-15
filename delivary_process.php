<?php
include 'header.php';
  //connect to database server
  include 'config/db.php';
//what to do with the data

if (isset($_POST['submitDelivary']))
{
    $oder_id= $_POST['order_id'];
    $delivery_address= $_POST['delivery_address'];
    $delivery_date= $_POST['delivery_date'];
    $delivery_time= $_POST['delivery_time'];
    $delivery_method= $_POST['delivery_method'];
    $payment_method= $_POST['payment_method'];
    $oder_status= 0;


  

    // write sql statment to insert data
    $sql = "INSERT INTO delivery(oder_id, delivery_address, delivery_date, delivery_time, delivery_method, payment_method, oder_status)
    VALUES ('$oder_id', '$delivery_address', '$delivery_date', '$delivery_time', '$delivery_method', '$payment_method', '$oder_status')";

    if ($conn-> query($sql)===TRUE)
    {
        echo "Your data was recorded";
    }

    else{
        echo "Error:" .$sql. "<br>" . $conn-> error;
    }
    // close the database connection

    $conn-> close();
}


?>