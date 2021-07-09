<?php
    include 'db.php';
    $conn=getdb();
    $filename = 'users.csv';
    $temp_name=$temp_surname=$temp_email='temp';

try{

    $sql = "INSERT INTO users(name,surname,email) VALUES ('".$temp_name."','".$temp_surname."','".$temp_email."')";  
	//echo $sql;	
    if(mysqli_query($conn,$sql)){
        echo "Record Successfully Inserted.";
    }
    else{
        echo "Record not inserted , ".mysqli_error($conn);
    }

    mysqli_close($conn);

} catch (Exception $e) {
	echo $e->getMessage();
} finally {
	
}
			
		


?>