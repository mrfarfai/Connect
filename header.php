<?php  
	
	require 'config/db_connect.php';

	if($_COOKIE["lang"]) require 'lang/lang_'.$_COOKIE["lang"].'.php';
	else require 'lang/lang_ru.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Connect</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Transporters web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web Designs" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /><!-- for testimonials -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->


<!--select-2-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

</head>
<body>
<div class="header">
	<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php"><img src="images/logo.png" width="300px" height="65px"></a>
			</div>
			<div class="top-nav-text">
				<div class="nav-contact-w3ls">
					<div class="row">
						<img src="images/lang/ru.png" onclick="document.cookie = 'lang = ru'; location.reload();" style="cursor: pointer;width: 30px;">
						<img src="images/lang/en.png" onclick="document.cookie = 'lang = en'; location.reload();" style="cursor: pointer;width: 30px;">
						<img src="images/lang/tj.png" onclick="document.cookie = 'lang = tj'; location.reload();" style="cursor: pointer;width: 30px;">
						<img src="images/lang/uz.png" onclick="document.cookie = 'lang = uz'; location.reload();" style="cursor: pointer;width: 30px;">
						<img src="images/lang/tu.png" onclick="document.cookie = 'lang = tu'; location.reload();" style="cursor: pointer;width: 30px;">
					</div>
				</div> 
			</div>
			<!-- navbar-header -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<?php if($_SESSION["admin"]) { ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="hvr-underline-from-center active" href="index.php"><?= $lang["home"]; ?></a></li>
						<li class="">
							<a href="#" data-toggle="dropdown" aria-expanded="false">
								<span data-hover="ShortCodes"><?= $lang["route"]; ?></span><span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="route_list.php"><span data-hover="list"><?= $lang["list"]; ?></span></a></li>
								<li><a href="ad_route.php"><span data-hover="ad"><?= $lang["ad"]; ?></span></a></li>
							</ul>
						</li>				
						<li><a class="hvr-underline-from-center active" href="exit.php"><?= $lang["exit"]; ?></a></li>
					</ul>
				<?php } else { ?>
					<ul class="nav navbar-nav navbar-right">
						<li><a class="hvr-underline-from-center active" href="index.php"><?= $lang["home"]; ?></a></li>
						<li><a href="index.php#mobile" class="hvr-underline-from-center scroll scroll"><?= $lang["mobile"]; ?></a></li>
						<li><a href="index.php#team" class="hvr-underline-from-center scroll scroll"><?= $lang["team"]; ?></a></li>					
						<li><a class="hvr-underline-from-center scroll scroll" href="#contacts"><?= $lang["contacts"]; ?></a></li>
						<li><a class="hvr-underline-from-center active" href="admin.php"><?= $lang["enter"]; ?></a></li>
					</ul>
				<?php } ?>
				
			</div>

		<div class="clearfix"> </div>	
	</nav>
	
</div>