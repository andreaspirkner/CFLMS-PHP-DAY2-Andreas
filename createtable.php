<?php
$servername = "localhost";
$username = "root";
$password = "" ; 
$dbname = "my_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
// sql to create table
$sql = "CREATE TABLE Cars (
car_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
make VARCHAR(20) NOT NULL,
model VARCHAR(20) NOT NULL,
location VARCHAR(50) NOT NULL,
price INT(15),
availability INT(10)
)" ;
if (mysqli_query($conn, $sql)) {
   echo "Table Cars created successfully"  . "\n";
} else {
   echo  "Error creating table: " . mysqli_error($conn) . "\n";
}
mysqli_close($conn);
?>