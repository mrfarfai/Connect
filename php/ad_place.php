<?php 
	
	require '../config/db_connect.php';

	$place = $_POST["place"];

	$query = "insert into `route` (`name`) values ('$place')";

	mysqli_query($conn, $query);

	header("location: /ad_route.php");
?>