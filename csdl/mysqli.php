<?php
$servername = "localhost";
$database = "baitap";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully <br>";

// Insert 
$sql = "INSERT INTO my_contacts (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`) VALUES ('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')";     
$result = mysqli_query($conn, $sql); 
    if (!$result) {
        die("Adding record failed: " . mysqli_error($conn)); 
        
    } else {
        echo "successfully";
    }
//update
$sql_1 = "UPDATE my_contacts SET `contact_no` = '785',`email` = 'poseidon@ocean.oc' WHERE `id` = 5";
    
$result_1 = mysqli_query($conn,$sql_1);
    if (!$result_1) {
        die("Deleting record failed: " . mysqli_error($conn));
        
    } else {
        echo "update successfully";
    }
//delete
$id = 5; 
    
$sql_2 = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    
$result_2 = mysqli_query($conn,$sql_2); 
    if (!$result_2) {
        die("Deleting record failed: " . mysqli_error($conn));
    } else {
        echo "ID number $id has been successfully deleted";
    }
//select 
$sql_3 = "SELECT * FROM my_contacts"; 
$result_3 = mysqli_query($conn,$sql_3);
    if (!$result_3)     
        die("Database access failed: " . mysqli_error($conn)); 
        $rows = mysqli_num_rows($result_3); 
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result_3)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 

?>