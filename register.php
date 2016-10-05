<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php';


?>
<div class=" well">
<h1>Register</h1>
<br>
<?php
	
	$registered_data = array(
		'username' => $_POST['username'],
		 'password' => md5($_POST['password']),
		 'first_name' => $_POST['first_name'],
		 'last_name' => $_POST['last_name'],
		 'email' => $_POST['email']
	); 


	if(empty($registered_data['username']) || empty($registered_data['password'])){
		$errors ="Enter a Username and a Password";
		
	} else if(user_exists($registered_data['username'])){
		$errors ="The username already exists";
	} else if($_POST['password'] != $_POST['cnfmpassword']){	
		$errors = "Passwords don't match";
	} else{			
			register_user($registered_data);
			echo "Successfully Registered";
				
	}

print_r($errors);

	
?>


<form action="register.php" method="post">
	  <div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username">
	  </div>
	  <div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" name="password">
	  </div>
	
	  <div class="form-group">
		<label for="pwd">Confirm Password:</label>
		<input type="password" class="form-control" name="cnfmpassword">
	  </div>


  	  <div class="form-group">
		<label for="pwd">First Name:</label>
		<input type="text" class="form-control" name="first_name">
	  </div>


  	  <div class="form-group">
		<label for="pwd">Last Name:</label>
		<input type="text" class="form-control" name="last_name">
	  </div>


  	  <div class="form-group">
		<label for="pwd">Email:</label>
		<input type="email" class="form-control" name="email">
	  </div>	
	  
	  <button type="submit" class="btn btn-success">Register</button>
	  
	  
</form>
	
</div>

<?php include 'includes/overall/overallfooter.php'?>


