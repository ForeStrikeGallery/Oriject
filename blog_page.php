<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php'
?>
<h1>Blog Page</h1>
<br>


<?php
 
	
	$user_id = 80;
	$blog_id = 1;
	
	
	$query = mysql_query("SELECT `content`,`author_id`,`blog_title` FROM `blog`");
	while($rows = mysql_fetch_assoc($query)){
		echo "<div class='well'>"	;	
		echo "<h2>". $rows['blog_title']. "</h2>";
		echo "<h4>". first_name_from_user_id($rows['author_id'])."</h4><br>";		
		echo  $rows['content'];
		echo "<br>";
		echo "</div>";
		}

?>

  <?php if(logged_in() == true){ ?>
	<form action="post_blog.php" method="post">
		<button type="submit" class="btn btn-default">Post Blog</button>
	</form>
<?php

 }

?>
<?php include 'includes/overall/overallfooter.php'?>

