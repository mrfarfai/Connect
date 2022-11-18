<?php 
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "root";
	$db_name = "connect";

	$a = $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	session_start();
?>