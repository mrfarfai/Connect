<?php 
	
	require '../config/db_connect.php';

	$type = $_POST["type"];
	$number = $_POST["number"];
	$route = $_POST["route"];

	$r = "";
	foreach ($route as $res) {
		$query = "select * from `route` where id =".$res;
		$row = mysqli_fetch_assoc(mysqli_query($conn, $query));
		$r .= $row["name"]." - ";
	}
	$r = substr($r, 0, -3);
	
	$query = "insert into `transport` (`type`, `name`, `route`) values ('$type', '$number', '$r')";

	mysqli_query($conn, $query);

	header("location: /ad_route.php");
?>