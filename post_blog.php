<?php 
include 'core/init.php';
include 'includes/overall/overallheader.php'
?>
<h1>Blog Page</h1>
<br>

<?php

$blog_title = $_POST['title'];
$blog_content = $_POST['content'];
$author_id = $_SESSION['user_id'];

if(empty($blog_title) == false && empty($blog_content) == false){

	$query = "INSERT INTO `blog` (`blog_title`, `content`,`author_id`) VALUES ('$blog_title', '$blog_content', '$author_id')";
	mysql_query($query);
	header("Location: blog_page.php");
}
?>

<form action="post_blog.php" method="post">
	  <div class="form-group">
		<label for="username">Title</label>
		<input type="text" class="form-control" name="title">
	  </div>
	  
	  <div class="form-group">
	 	<label for="username">Content</label>
		<textarea type="textarea" rows="10" class="form-control" name="content"></textarea>
	  </div>
	  <button type="submit" class="btn btn-success">Post</button>
	  
	  
</form>

<?php include 'includes/overall/overallfooter.php'?>
<?php ?>

