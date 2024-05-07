<?php
                     // Step 1: Making connection with MySQL (Database)
    $server = 'localhost';
    $username = 'root';
    $password = 'Flyhigh14';
    $dataBase = 'form';

    $connection = mysqli_connect($server, $username, $password, $dataBase);

                    // Step 2: Checking connection is successful or not
    if ($connection) {
        echo "<script>console.log('Connection Successful');</script>";
    } else {
        echo "<script>console.error('Connection Failed: " . mysqli_connect_error() . "');</script>";
    }
?>
