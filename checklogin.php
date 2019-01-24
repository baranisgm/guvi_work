<?php 
	session_start();
	include('connection.php');

	$email    = $_POST['email'];
	$password = $_POST['userpassword'];

	if ($email != "" ){

        $sql_query = "select * from users where email='".$email."'";
        $result    = mysqli_query($con,$sql_query);
        $row       = mysqli_fetch_array($result);

        if (crypt($password, $row['password']) == $row['password']){
        $_SESSION['user_email'] = $email;
        echo "Login Successful"; exit;
        return true;
    	}
    	else {
        	echo "Wrong Username or Password"; exit;
        	header('Location: login.php');
        	// return false;
    	}
    }
?>