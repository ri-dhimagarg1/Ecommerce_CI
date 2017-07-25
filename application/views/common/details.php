<?php include('public_header.php'); ?>

<?php
foreach($detail_pros as $pro):?>

		<div id='single_product'>
				
					<h3><?= $pro['product_title']; ?></h3>
					
					
					<img src='<?= base_url(); ?>public/assets/images/admin_area/product_images/<?= $pro['product_image'];?>' width='400' height='400' />
					
					<p><b> Price: $ <?=$pro['product_price']; ?></b></p>
					
					<?= anchor("welcome/index",'Go back') ?>
					
					<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
				
				</div>
<?php endforeach; ?>
