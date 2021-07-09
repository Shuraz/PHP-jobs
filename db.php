<?php
function getdb(){
    echo "Hello db script.";
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $db = "myDB";
    $conn="";
    
    try {
        $conn = mysqli_connect($servername, $username, $password, $db);
       
         if(!$conn){  
            die('Could not connect: '.mysqli_connect_error());  
          }  
          else{
            echo 'Connected successfully<br/>'; 

            $sql = "create table users(id int AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20) NOT NULL,  
            surname VARCHAR(30) NOT NULL, email VARCHAR(30), UNIQUE KEY unique_email (email))";  
    
                if(mysqli_query($conn, $sql)){  
        
                echo "Table users created successfully";  
                }else{  
                echo "Could not create table: ". mysqli_error($conn);  
            }
        }
 
        }
    catch(exception $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }        
 ?>