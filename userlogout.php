<?php 
    session_start();
	include('connection.php');
    
    // Check user login or not
    if(!isset($_SESSION['user_email'])){
        echo "string32"; exit;
        header('Location: index.php');
    }

    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();
        header('Location: index.php');
    }

?>