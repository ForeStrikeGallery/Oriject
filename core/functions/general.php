<?php
function sanitize($data){
	return mysql_real_escape_string($data);
}

function output_error($errors){
	foreach($errors as $error){
		$output[] = '<li>'.$error.'</li>';
	}
	return '<ul>'.implode('',$output).'</ul>';
}
?>
