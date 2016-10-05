<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php'
?>
<h1>Blog Page</h1>
<br>
<?php
 $query = "SELECT `content` FROM `blog` WHERE `blog_id` = 1";
 echo mysql_result(mysql_query( $query,0,`content`));

?>
<?php include 'includes/overall/overallfooter.php'?>

