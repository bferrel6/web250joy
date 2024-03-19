<?php
    $mysqli = new mysqli('localhost', 'testuser', 'qAJ)Phl3FVleSgxg', 'cars');
            
    //check connection
    if (mysqli_connect_errno()) {
        printf("Connection failed: %s\n", mysqli_connect_error());
        exit();
    }

    echo 'Connected successfully to MySQL. <br>';

    //select database to work with
    $mysqli->select_db('cars');
    echo 'Selected the <em>cars</em> database. <br>';
?>