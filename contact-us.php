<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->

			<!-- site content -->
			<div id="main">
				<!--Breadcrumb Section Start Here-->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Contact Us</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Contact Us
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->
				<div class="content-wrapper container" id="page-info">
					<div class="row">
						<div class="col-xs-12 col-sm-6 contact-form">
							<div class="col-xs-12" id="success"></div>
							<h2>Send us Message</h2>
							<form role="form" >
								<div class="row">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Name<span>*</span></label>
										<input type="text" class="form-control" id="name">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="email">Email<span>*</span></label>
										<input type="email" class="form-control" id="email">
									</div>
								</div>
								<div class="form-group">
									<label for="sub">Subject<span>*</span></label>
									<input type="text" class="form-control" id="sub" >
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<textarea class="form-control" id="message"></textarea>
								</div>

								<button type="button" class="btn btn-default" id="submit">
									Submit
								</button>
							</form>
						</div>
						<div class="col-xs-12 col-sm-5 col-sm-offset-1 contact-address">
							<h2>Get in touch</h2>
							<address>
								<span> <strong>Address :</strong> <span>A-2, Sector-63,
										<br>
										Noida, 201301, India</span> </span>
								<span> <strong>E-Mail :</strong> <span><a href="mailto:contact@charity.com">contact@charity.com</a></span> </span>
								<span> <strong>Tel :</strong> <span><a href="tel:+17079217269">+1 707 921 7269</a></span> </span>
								<span> <strong>Fax :</strong> <span>+1 206 973 7944</span> </span>
							</address>
						</div>
					</div>
				</div>
			</div>
			<!-- site content ends -->

		<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Js--> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider Js End -->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>
	</body>
</html>