<?php 
	require 'header.php';
?>
<?php 
	$id = $_GET["id"];
	$query = "select * from `transport` where id = ".$id;
	$row = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>

<div class="slider">
	<img src="/images/map.png" width="100%" height="400px" alt="">

	<div class="profile">
		<h1><?= $lang[$row["type"]]. " #".$row["name"] ?></h1><br>
		<p><?= $row["route"] ?></p>
		<div class="clearfix"></div>
	</div>

	<div class="clearfix"></div>
</div>

<?php 
	require 'footer.php';
?>