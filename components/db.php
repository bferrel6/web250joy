<?php
    $mysqli = new mysqli('localhost', 'u433082664_testuser', 'qAJ)Phl3FVleSgxg', 'u433082664_phpJoy');
            
    //check connection
    if (mysqli_connect_errno()) {
        printf("Connection failed: %s\n", mysqli_connect_error());
        exit();
    }

    echo 'Connected successfully to MySQL. <br>';

    //select database to work with
    $mysqli->select_db('u433082664_phpJoy');
    echo 'Selected the <em>cars</em> database. <br>';
?>