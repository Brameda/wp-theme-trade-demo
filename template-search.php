<?php
/*
*	Template Name: search template
*/

ini_set('display_errors', 'On');

get_page_search();

get_header();

?>

<div class="row">
	<div class="col-md-8">
		<ol class="breadcrumb">
			<li>
				<a href="<?= get_site_url(); ?>/collection">Collection</a>
			</li>
			<li class="active">
				Search
			</li>
		</ol>
	</div>
	<div class="col-md-4">
		<form action="<?= search_url(); ?>" method="get">
			<label labelfor="q">Search :</label>
			<input name="q" value="<?= $search['meta']['query']; ?>" placeholder="<?php _e('I\'m shopping for ...','jm_domain');?>" /> <input type="submit" value="<?php _e('Search','jm-domain');?>"/>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2>Search</h2>
	</div>
</div>



<?php if($search): ?>
<div class="row">
	<div class="col-md-3">
		
	</div>
	<div class="col-md-9">
		
		<style>

		.product-item a{
			color:black;
			display:block;
			border:1px solid #FFF;
			padding:4px;
		}

		.product-item a:hover{
			text-decoration: none;
			background:#f9f9f9;
			border:1px solid #DDD;
		}

		</style>

		<table class="table">
			<tr>
			<?php foreach($search['results'] as $product): ?>
			<td class="product-item" style="color:black; font-style:none;">
				<a href="<?= product_url($product); ?>"><?= $product['title']; ?>
					<?= image_tag($product['icon'], $width=300, $height=300, Null, Null, Null, Null, $classes='img-polaroid'); ?>
			
					<div class="row" style="padding:8px 3px;">
						<div class="col-md-6">
							<b>Price from :</b> <?= price_tag($product['price']); ?>
						</div>
						<div class="col-md-6" style="text-align:right;">
							<b>Stock:</b> <?= $product['inventory_quantity']; ?>
						</div>
					</div>
				</a>
			</td>
					<?php /* change this number into how many columns you want. */
								echo (++$j % 3 == 0) ? '</tr><tr>' : '';?>
			<?php endforeach; ?>
			</tr>
		</table>
		
		
	</div>
</div>

<?php endif; ?>


<?php get_footer();?>