<?php
	//create connection
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	//check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>