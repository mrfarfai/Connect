<?php
	require 'header.php';
?>
<?php 
	$from = trim($_POST["from"]);
	$to = trim($_POST["to"]);
	$query = "SELECT * from `transport` where route LIKE '%".$from."%' and route LIKE '%".$to."%';";
	$res = mysqli_query($conn, $query);
?>

<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5><span><?= $lang["search_route"]; ?></span></h5><br>
									<form action="" method="post">
										<input type="text" name="from" placeholder="<?= $lang["whence"]; ?>" required="">
										<input type="text" name="to" placeholder="<?= $lang["where"]; ?>" required="">
										<input type="submit" class="hvr-shutter-in-vertical" value="<?= $lang["search"]; ?>">  	
									</form>
								</div>
							</div>
							<div class="col-md-8">
								<h3><?= $from. " - ". $to ?></h3><br>
								<ul>
									<?php $k = 1; while ($row = mysqli_fetch_assoc($res)) { ?>
										<a href="profile.php?id=<?= $row["id"]?>">
											<li>
												<button class="btn btn-primary route_btn"><?= $k++ ?></button>
												<button class="btn btn-info route_btn"><?= $lang[$row["type"]]." #".$row["name"]  ?></button>
											</li>
										</a>
									<?php } ?>									
								</ul>
							</div>
						</div>
					</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>

<?php 
	require 'footer.php';
?>