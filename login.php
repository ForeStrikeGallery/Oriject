<?php
include 'core/init.php';
include 'includes/overall/overallheader.php';

if (empty($_POST) === false){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(empty($username) || empty($password)){
		$errors[] = 'You need to type in a username and password';
	} else if(user_exists($username) == false){
		$errors[] = "We can't find the username, have you registered?";	
	} else{
		$login = login($username, $password);
		if($login == false){
			$errors[] = "Incorrect username or password";
		} else{
			$_SESSION['user_id'] = $login;
			header("Location: index.php");			
		}
	}

	echo output_error($errors);
}
include 'includes/overall/overallfooter.php';
?>
