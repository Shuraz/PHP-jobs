<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $db = "myDB";
    try {
        $conn = mysqli_connect($servername, $username, $password, $db);
         echo "Connected successfully";  
        }
    catch(exception $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
 ?>