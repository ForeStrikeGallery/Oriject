<?php
	session_start();
	//error_reporting(0);

	require 'database/connect.php';
	require 'functions/users.php';
	require 'functions/general.php';
	$errors = array();

	if(logged_in() == true){
		$user_data = user_data($_SESSION['user_id'],'username','user_id','first_name', 'last_name', 'password');
		
	}
		
	//if(loggedin() === true){}
?>
