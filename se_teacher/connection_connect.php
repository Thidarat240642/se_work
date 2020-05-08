<?php
$servername = "localhost";
$username = "se62_17";
$password = "se62_17";
$dbname = "se62_17";
$conn =  new mysqli($servername, $username, $password);
if($conn->connect_error){
	die ("Connection failed:".$conn->connect_error);
}
if(!$conn->select_db($dbname)){
	die ("Connection failed:".$conn->connect_error);
}
?>
