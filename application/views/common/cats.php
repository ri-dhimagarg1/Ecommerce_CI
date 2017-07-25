<?php include('public_header.php'); ?>

		<div id="content_area">
	

	<div id="products_box">
		<?php
			if(count($cat_pros>=1)):
			foreach($cat_pros as $pro):?>

		<div id='single_product'>
				
					<h3><?= $pro['product_title']; ?></h3>
					
					
					<img src='<?= base_url(); ?>public/assets/images/admin_area/product_images/<?= $pro['product_image'];?>' width='180' height='180' />
					
					<p><b> Price: $ <?=$pro['product_price']; ?></b></p>
					
					<?= anchor("welcome/details/{$pro['product_id']}",'Details') ?>
					
					<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
	<?php endforeach;?>
	<?php else: ?>
		<p>No records found</p>
	<?php endif;?>
	</div>





	</div>

</div>
	</div>



</html>