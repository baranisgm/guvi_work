<?php
//Connection Details
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "guvi";

// Sql connection
	$con = mysqli_connect($servername, $username, $password,$database);

// Check sql connection
	if (!$con) {
	    die("Connection failed: ");
	} 
?>