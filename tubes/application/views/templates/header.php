<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/img/drewicon.ico">
	<title><?php echo $judul ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="body">

	<a name="top"></a>

	<nav class="topnav">
		<div class="left">
			<a href="<?php echo site_url('Login'); ?>" style="text-decoration: none; color: black">LOGIN</a>
			<a style="cursor: default;">/</a>
			<a href="<?php echo site_url('AkunController/register'); ?>" style="text-decoration: none; color: black">JOIN</a>
			<a style="cursor: default;">/</a>
			<a><img src="<?php echo base_url(); ?>assets/img/search.png"></a>
			<a class="search" style="padding-left: 49%; margin-top: -26px;">
				<form>
					<input type="text" name="search" placeholder="SEARCH">
				</form>
			</a>
		</div>
		<div>
			<div class="right" style="padding-left: 25px">
				<a href="<?php echo site_url('AkunController');?>" style="text-decoration: none; color: black">PROFILE</a>
				<a style="cursor: default;"> / </a>
				<a href="" style="text-decoration: none; color: black">0</a>
				<a style="cursor: default;"> / </a>
				<a href="" style="text-decoration: none; color: black">$0.00</a>
			</div>
			<a href="https://www.instagram.com/drewhouse/?hl=id" target="_blank"><img src="<?php echo base_url(); ?>assets/img/instagram.png" width="20" style="float: right;"></a>
			<a href=""><img src="<?php echo base_url(); ?>assets/img/cart.png" style="width: 15px; margin-left: 92%; margin-top: -60px"></a>
		</div>
	</nav>

	<br>
	<br>
	<br>
	<br>
	<br>

	<a href="<?php echo site_url('HomeController'); ?>">
		<img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo" class="logo">
	</a>

	<br>
	<br>

	<nav class="navi">
		<a href="<?php echo site_url('HomeController'); ?>">Home</a>
		<a href="<?php echo site_url('HomeController/about'); ?>">About Us</a>
		<a href="<?php echo site_url('HomeController/katalog'); ?>">Shop</a>
	</nav>

	<br>
	<br>
