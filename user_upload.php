<?php
    include 'db.php';
    $conn=getdb();
    $filename = 'users.csv';
    $data = [];
    $temp_name=$temp_surname=$temp_email='temp';

try{

    $holder = fopen($filename, 'r');
    while ($row = fgetcsv($holder, 1000, ",")) {
        $data[] = $row;
    }
    print_r($data);


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