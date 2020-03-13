<?php
//$connection = mysqli_connect("localhost", "nedrock", "nedrock@#2016%","nedrock");


$connection = mysqli_connect("localhost","root","");
	if (!$connection) {
		die("Database connection failed: " . mysqli_error());
	}

	// 2. Select a database to use
	$db_select = mysqli_select_db($connection, "kalayatan2017");
	if (!$db_select) {
		die("Database selection failed: " . mysqli_error());
	}
?>
