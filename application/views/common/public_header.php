<!DOCTYPE html>
<html>
<head>
<title>My online Shop</title>
  <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/assets/css/style.css">
</head>
<div class="main_wrapper">

<!-- Main header starts here -->
<div class="header_wrapper">
<img src="<?= base_url(); ?>public/assets/images/shoplogo.jpg" alt="shoplogo" id="logo" style="height: 100px; width: 333px;">
<img src="<?= base_url(); ?>public/assets/images/addbanner.jpg" alt="banner" id="banner" style="width: 667px; height: 100px;">
</div>

<div class="menubar">
<ul id="menu">
	<li><?= anchor("welcome/index","Home"); ?></li>
	<li><?= anchor("welcome/index","All Products"); ?></li>
	<li><a href="customer/my_account.php">Account</a></li>
	<li><a href="#">Sign Up</a></li>
	<li><a href="cart.php">Shopping Cart</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>

<div id="form">
<!-- <form action="results.php" method="get" enctype="multipart/form.php" > -->
<?php echo form_open('welcome/search');?>
<!-- <input type="text" name="user_query" placeholder="Search here"/> -->
<?php  echo form_input(['name'=>'user_query','placeholder'=>'Search here','value'=>set_value('username')]); ?>
<!-- <input type="submit" name="search" value="Search"/> -->
<?php echo form_submit(['name'=>'search' ,'value'=>'Search']); ?>
</form>
</div>
</div>

<div class="content_wrapper">

	<div id="sidebar">
		<div id="sidebar_title">Categories</div>
		<ul id="cats">
			<!-- <li><a href="index.php">Home</a></li> -->
			 <?php foreach($cats as $cat): $id=$cat->cat_id ?>
   <li> <?= anchor("welcome/cats/{$id}",$cat->cat_title) ?></li>
<?php endforeach; ?>
		</ul>
		<div id="sidebar_title">Brands</div>
		<ul id="cats">
					 <?php foreach($brands as $brand): ?>
   <li> <?= anchor("welcome/brands/{$brand->brand_id}",$brand->brand_title) ?></li>
<?php endforeach; ?>
			
		</ul>
	</div>
	

