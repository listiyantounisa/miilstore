<?php

// Connection variables
$host = "localhost";
$user = "id10149176_eirenekw";
$pass = "admin123";
$dbs = "id10149176_miistore";

// Connect to MySQLi database
$conn = mysqli_connect($host, $user, $pass, $dbs);

// Check connection
if(mysqli_connect_errno()){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit;
}

?>