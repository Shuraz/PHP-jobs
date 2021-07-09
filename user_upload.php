<?php
include 'db.php';
$conn = getdb();
$temp_name=$temp_surname=$temp_email='test';
			
			$sql = "INSERT INTO users(name,surname,email) VALUES ('".$temp_name."','".$temp_surname."','".$temp_email."')";  
		
			if(mysqli_query($conn,$sql)){
				echo "Record Successfully Inserted.";
			}
			else{
				echo "Record not inserted , ".mysqli_error($conn);
			}
		
		mysqli_close($conn);



?>