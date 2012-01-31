<?php

	$type = array('image/png', 'image/gif', 'image/jpeg');
	$path = './uploads/';
	$milli = time();
	
	if (isset($_SERVER['HTTP_X_FILE_NAME']) && in_array($_SERVER['HTTP_X_FILE_TYPE'], $type)){
		file_put_contents(
			$path . $milli . $_SERVER['HTTP_X_FILE_NAME'],
			file_get_contents('php://input')
		);
		echo $_SERVER['HTTP_X_FILE_NAME'] . ' uploaded <span>'.$milli.$_SERVER['HTTP_X_FILE_NAME']. '</span><img src="'.$path.$milli.$_SERVER['HTTP_X_FILE_NAME'].'" width="auto" height="15" align="right" />';
		exit();
	
	}else{
		echo $_SERVER['HTTP_X_FILE_NAME'] . ' Upload Error.';
	}
	
?>