<?php

$servername = "localhost";
$db_username = "root";    
$db_password = "";        
$dbname = "studentsystem";


$conn = mysqli_connect($servername, $db_username, $db_password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
