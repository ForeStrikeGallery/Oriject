<?php


function is_admin(){
	$user_id = $_SESSION['user_id'];
	$query = mysql_query("SELECT `type` FROM `users` WHERE `user_id` = '$user_id'");
	$result = mysql_result($query, 0);
	return ($result == 1) ? true: false;

}

function admin_protect(){
	if(is_admin() == false)
		header("Location: index.php");
}



function register_user($registered_data){
	$fields = '`'.implode('`,`', array_keys($registered_data) ). '`';
	$data = '\''.implode('\',\'', $registered_data). '\'';

	

	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");

}
function user_count(){

	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` ");
	return mysql_result($query, 0);
}

function user_data($user_id){
	$data = array();
	$user_id = (int)$user_id;
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();

	if ($func_get_args > 1) {
		unset($func_get_args[0]);
		$fields = '`' . implode('`,`', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
		//print_r($data);
	
		//die();
		return $data;
	}
}
function logged_in(){
	return (isset($_SESSION['user_id'])) ? true: false;
}

function user_exists($username){
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'");

	return (mysql_result($query, 0) == 1) ? true: false;
}

function user_id_from_username($username){
	$username = sanitize($username);
	$query = mysql_query("SELECT `user_id` FROM `users` WHERE `username` = '$username'");
	
	return mysql_result($query, 0, 'user_id');
}

function login($username, $password){
	$user_id = user_id_from_username($username);
	echo "The user ID is" . $user_id;
	$username = sanitize($username);	
	$password = md5($password);
	$query = mysql_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username`= '$username' AND `password` = '$password'");
	return (mysql_result($query, 0) == 1) ? $user_id : false;
}

function first_name_from_user_id($user_id){
	$query = mysql_query("SELECT `first_name` FROM `users` WHERE `user_id` = '$user_id'");
	return mysql_result($query, 0, 'first_name');
}

?>
