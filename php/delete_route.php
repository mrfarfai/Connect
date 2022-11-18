<?php 

	require '../config/db_connect.php';
	$id = $_GET["id"];
	if($id) {
		$query = "delete from `transport` where id = ".$id;
		mysqli_query($conn, $query);
		header("location: route_list.php");
	}
	else header("location: /");

?>