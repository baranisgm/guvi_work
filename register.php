<?php 
	include('connection.php');

	$name      = $_POST['name'];
	$email     = $_POST['email'];
	$password  = password_hash($_POST['userpassword'], PASSWORD_DEFAULT); 
	$degree    = $_POST['degree'];
	$ph_number = $_POST['number'];
	$location  = $_POST['location'];
	$gender    = $_POST['gender'];
	$age       = $_POST['age'];

	//Store Database
	$result = mysqli_query($con, "INSERT INTO users(name, email, password, degree, ph_number, location, gender, age) VALUES('$name', '$email', '$password', '$degree', '$ph_number', '$location', '$gender', '$dob')");

	echo "<font color='green'>Data added successfully.";

	//Store user data to json file
	$response['name']     = $_POST['name'];
	$response['number']   = $_POST['number'];
	$response['email']    = $_POST['email'];
	$response['password'] = password_hash($_POST['userpassword'], PASSWORD_DEFAULT);
	$response['degree']   = $_POST['degree'];
	$response['location'] = $_POST['location'];
	$response['gender']   = $_POST['gender'];
	$response['age']      = $_POST['age'];

	$fp = fopen('config.json', 'w+');
	fwrite($fp, json_encode($response));
	fclose($fp);

	header('Location: userlist.php');

?>
