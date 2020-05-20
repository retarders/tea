<?php

	// load config
	$config = include('config.php');
	$uploads = $config['uploads'];

	// create uploads directory if it doesn't already exist
	if (!is_dir($upoloads)) {
		mkdir($uploads, 0777, true);
	}

	// check if the request method is POST, if not,
	// throw the user an error
	if ($_SERVER['REQUEST_METHOD'] != 'POST') {
		echo 'not a post request';
		return;
	}

	// get file's data
	$file = $_FILES['content'];
	$name = $file['name'];

	// move the file to the uploads directory
	move_uploaded_file($file['tmp_name'], "$uploads/$name");
	
	// redirect the user to the uploaded file
	header("Location: $uploads/$name");

?>