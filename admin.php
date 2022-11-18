<?php 
	require 'header.php';
?>

<div class="slider">
	<div class="callbacks_container">
		<ul class="rslides" id="slider">
			<li>
				<div class="w3layouts-banner-top w3layouts-banner-top1">
					<div class="banner-dott">
					<div class="container">
						<div class="slider-info">
							<div class="col-md-6">
								<div class="banner-form-agileinfo">
									<h5><span><?= $lang["admin_panel"]; ?></span></h5><br>
									<form action="php/admin.php" method="post">
										<span style="color: red;font-weight: 600;font-size: 20px;"><?= $lang["admin_error"]; ?></span><br><br>
										<input type="text" name="login" placeholder="<?= $lang["login"]; ?>" id="login" required="">
										<input type="text" name="pass" id="pass" placeholder="<?= $lang["password"]; ?>" required="">

										<input type="submit" class="hvr-shutter-in-vertical" value="<?= $lang["enter"]; ?>" id="admin_btn">  	
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

<?php 
	require 'footer.php';
?>