<!DOCTYPE html>
<html>
<head>
	<title>CIBlog</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a href="<?= base_url(); ?>index.php" class="navbar-brand">ciBlog</a>
			</div>
			<div id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url(); ?>index.php">Home</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
					<li><a href="<?php echo base_url(); ?>index.php/posts">Blog</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		