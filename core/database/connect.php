<?php
	$connect_error = "Sorry, we'r experiencing connection issues";
	mysql_connect('localhost', 'root', 'beefnbrocolli') or die($connect_error);
	mysql_select_db('lr') or die($connect_error);
?>
