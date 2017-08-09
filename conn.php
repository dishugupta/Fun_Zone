<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "game";

// Create connection
// $conn = mysqli_connect($servername,$username,$password,$database);
$con= mysqli_connect("localhost","root","","game");


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
