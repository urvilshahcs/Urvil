<?php
require("constants.php");

	$connection= mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
	if (!$connection){
		die("Database Connection falied: " . mysql_error());
	}
	/*
	$db_select=mysql_select_db(DB_NAME,$connection);
	if(!$db_select){
		die("Database selection failed: " . mysql_error());
	}
	*/
	//close($connection);
?>