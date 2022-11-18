<?php 
	
	require '../config/db_connect.php';

	$login = $_POST["login"];
	$pass = $_POST["pass"];

	if($login == "admin" && $pass == "admin") {
		$_SESSION["admin"] = "admin";
		header("location: /");
	}
	else header("location: /admin.php");
?>