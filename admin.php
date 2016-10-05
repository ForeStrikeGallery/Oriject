<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php';


admin_protect();

?>

<h1>Admin Page</h1>
<p> This is the admin page. </p>
<br>
<div >
<?php
	$query = mysql_query("SELECT `username`,`first_name`,`last_name`,`email` FROM `users`");
	while($rows = mysql_fetch_assoc($query)){
		?>
		<div class="well">
		<?php
		echo "<b>Username:</b> " . $rows['username'];
		echo " <b>First Name:</b> ".$rows['first_name'];
		?>
		</div>
		<?php
	}
?>
</div>
<?php include 'includes/overall/overallfooter.php'?>

