<?php
    $serverName = "php24-db-1";
    $userName = "root";
    $password = "password";
<<<<<<< Updated upstream
=======
     $dbName = "web_programm_project_db";
    //$dbName = "udashi";
    // $dbName = "project";
>>>>>>> Stashed changes


    //create the connection with the Database

    $conn = new mysqli($serverName,$userName,$password,$dbName);

    //Checking the connection established correctly
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

?>