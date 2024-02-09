<?php
    $servername = "php24-db-1";
    $username = "app1";
    $password = "password";
    $dbname ="app1";

    // create db connection
    $conn= new mysqli($servername,$username,$password,$dbname);

    //check connection
    if($conn->connect_error){
        die("Connection Failed:". $conn->connect_error);
    }
?>