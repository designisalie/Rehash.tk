<?php
	include 'connect.php';
	
	$name = strip_tags($_POST['name']);
	$com = nl2br(strip_tags($_POST['comment'], '<a><img><b>'));
	$reply = strip_tags($_POST['reply-id']);
	if(!$reply)
		$reply = 0;
	$post = strip_tags($_POST['post-id']);
	$date = time();
	
	$query = "INSERT INTO comments (name,comment,post_id,reply_to,date) values('".mysql_real_escape_string($name)."','".mysql_real_escape_string($com)."','".mysql_real_escape_string($post)."','".mysql_real_escape_string($reply)."','$date')";
	$sql = mysql_query($query) or die ( "Query failed due to: ".mysql_error()); 
	
	mysql_close($connection);
?>