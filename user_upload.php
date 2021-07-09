<?php
    include 'db.php';
    $conn=getdb();
    $filename = 'users.csv';
    $data = [];
    $temp_name=$temp_surname=$temp_email='';

try{
    //opening the file in read only mode
    $holder = fopen($filename, 'r');
    //using while loop to get all the csv in line by line
    while ($row = fgetcsv($holder, 1000, ",")) {
        $data[] = $row;
    }
        for ($r = 1; $r < 12; $r++) 
        {  
            //string conversion to lower case and first leter capital
            $temp_name=ucfirst(strtolower($data[$r][0]));
            $temp_surname=ucfirst(strtolower($data[$r][1])); 
            $temp_email=strtolower($data[$r][2]);
            //email validation with filter
                if (!filter_var($temp_email, FILTER_VALIDATE_EMAIL)) {
                    echo "Invalid email format: ";

                }
                else{

                //querry to insert data in to table
                $sql = "INSERT INTO users(name,surname,email) VALUES ('".$temp_name."','".$temp_surname."','".$temp_email."')";  
                        
                    if(mysqli_query($conn,$sql)){
                        echo "Record Successfully Inserted.<br/>";
                    }
                    else{
                        echo " Record not inserted <br/>".mysqli_error($conn);
                    }
                }
         }
    mysqli_close($conn);

} catch (Exception $e) {
	echo $e->getMessage();

} finally {
    if (!$holder) {
		fclose($holder);
	}
}		
?>