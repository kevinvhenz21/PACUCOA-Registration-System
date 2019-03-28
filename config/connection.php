<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "pacucoa_betadb";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
	}
?>