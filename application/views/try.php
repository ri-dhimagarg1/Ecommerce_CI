<!DOCTYPE html>
<html>
<head>
<title>My online Shop</title>
  <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
</head>
<div class="main_wrapper">

<!-- Main header starts here -->
<div class="header_wrapper">
<img src="<?= base_url(); ?>/assets/images/shoplogo.jpg" alt="shoplogo" id="logo" style="height: 100px; width: 333px;">
<img src="<?= base_url(); ?>/assets/images/addbanner.jpg" alt="banner" id="banner" style="width: 667px; height: 100px;">
</div>

<div class="menubar">
<ul id="menu">
	<li><a href="index.php">Home</a></li>
	<li><a href="all_products.php">All Products</a></li>
	<li><a href="customer/my_account.php">Account</a></li>
	<li><a href="#">Sign Up</a></li>
	<li><a href="cart.php">Shopping Cart</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>

<div id="form">
<form action="results.php" method="get" enctype="multipart/form.php" >
<input type="text" name="user_query" placeholder="Search here"/>
<input type="submit" name="search" value="Search"/>
</form>
</div>
</div>

<div class="content_wrapper">

	<div id="sidebar">
		<div id="sidebar_title">Categories</div>
		<ul id="cats">
			<li><a href="index.php">Home</a></li>
			
		</ul>
		<div id="sidebar_title">Brands</div>
		<ul id="cats">
		
			
		</ul>
	</div>

		<div id="content_area">
	

    here new



	</div>

</div>
	</div>



</html>