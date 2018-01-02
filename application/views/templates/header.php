<!DOCTYPE html>
<html>
<head>
	<title>CIBlog</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>application/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>
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
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>index.php/posts/create">Create Post</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		