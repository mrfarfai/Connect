<?php 
	require 'header.php';
?>

<!-- Slider -->
<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-8">
								<h4><?= $lang["banner_title"]; ?></h4>
								<div class="bannergrids">
									<div class="col-md-4 grid1">
										<i class="fa fa-truck" aria-hidden="true"></i>
										<p><?= $lang["micro_bus"]; ?></p>
									</div>									
									<div class="col-md-4 grid1">
										<i class="fa fa-bus" aria-hidden="true"></i>
										<p><?= $lang["bus"]; ?></p>
									</div>
									<div class="col-md-4 grid1">
										<i class="fa fa-subway" aria-hidden="true"></i>
										<p><?= $lang["trolley_bus"]; ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="banner-form-agileinfo">
									<h5><span><?= $lang["search_route"]; ?></span></h5><br>
									<form action="route.php" method="post">
										<input type="text" name="from" placeholder="<?= $lang["whence"]; ?>" required="">
										<input type="text" name="to" placeholder="<?= $lang["where"]; ?>" required="">
										<input type="submit" class="hvr-shutter-in-vertical" value="<?= $lang["search"]; ?>">  	
									</form>
								</div>
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

<div class="res_div">
	<h1><?= $lang["problem"]; ?></h1>
	<div class="col-md-6">
		<img src="images/success.png" width="200px" height="200px">
	</div>
	<div class="col-md-6">
		<ul>
			<li><h3><?= $lang["problem1"]; ?></h3></li>
			<li><h3><?= $lang["problem2"]; ?></h3></li>
			<li><h3><?= $lang["problem3"]; ?></h3></li>
		</ul>
	</div>
	<span><strong><?= $lang["problem4"]; ?></strong></span>
	<div class="clearfix"></div>
</div>

<div class="res_div">
	<h1><?= $lang["solve"]; ?></h1>
	<div class="col-md-6">
		<ul>
			<li><h3><?= $lang["solve1"]; ?></h3></li>
			<li><h3><?= $lang["solve2"]; ?></h3></li>
			<li><h3><?= $lang["solve3"]; ?></h3></li>
		</ul>
	</div>
	<div class="col-md-6">
		<img src="images/success.png" width="200px" height="200px">
	</div>
	<div class="clearfix"></div>
</div>
<!-- //Slider -->
<div></div>			
<!-- banner-bottom -->
<div class="banner-bottom" id="mobile">

	<div class="col-md-6 mobile_app">
		<h2><?= $lang["download_on"]; ?> Google Play</h2>
		<img src="images/phone/mobile.png" alt="" class="img-responsive" style="width: 300px; margin: 0 auto;" />
		<a href="#"><img src="images/phone/googleplay.png" class="download_btn"></a>
	</div>
	<div class="col-md-6 mobile_app">
		<h2><?= $lang["telegramm_title"]; ?></h2>
		<img src="images/phone/telega.png" alt="" class="img-responsive" style="width: 300px; margin: 0 auto;" />
		<h3><?= $lang["telegramm_href"]; ?><br><a href="tg://resolve?domain=ConnectTj_Bot"> ConnectTj_Bot</a></h3>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //banner-bottom -->



<?php 
	require 'footer.php';
?>