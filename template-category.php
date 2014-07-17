<?php
/*
*	Template Name: category template
*/

ini_set('display_errors', 'On');

get_page_category();

get_header();

?>

<?php
	$breadcrumbs = get_breadcrumbs();
?>

<div class="row">
	<div class="col-md-8">
<?php if(count($breadcrumbs) > 1): ?>
<ol class="breadcrumb">
<?php foreach($breadcrumbs as $breadcrumb): ?>
	<?php if($breadcrumb === end($breadcrumbs)): ?>
	<li class="active">
		<?= $breadcrumb['label']; ?>
	</li>
	<?php else: ?>
	<li>
		<a href="<?= get_site_url(); ?><?= $breadcrumb['url']; ?>"><?= $breadcrumb['label']; ?></a>
	</li>
	<?php endif;?>
<?php endforeach; ?>
</ol>
<?php endif; ?>
	</div>
	<div class="col-md-4">
		<form action="<?= search_url(); ?>" method="get">
			<label labelfor="q">Search :</label>
			<input name="q" value="<?php echo $search['meta']['query']; ?>" placeholder="<?php _e('I\'m shopping for ...','jm_domain');?>" /> <input type="submit" value="<?php _e('Search','jm-domain');?>"/>
		</form>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h2><?php _e('Products in ','jm-domain');?><?php echo str_replace('/', ' ', $category['path']);?></h2>
	</div>
	
</div>


<div class="row">
	<div class="col-md-3">
	
		<table class="table table-striped">
			<?php if($category['path'] != '/'): ?>
				<tr>
					<td>
						<a href="../">&#8598; Back</a>
					</td>
				</tr>
			<?php endif; ?>
			
			<?php foreach($category['categories'] as $sub_category): ?>
				<tr>
					<td>
						<a href="<?= category_url($sub_category); ?>"><?php echo $sub_category['title']; ?></a>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>

		<?php if( !empty($category['products']['filters'])): ?>
			<?php foreach ($category['products']['filters'] as $filter): ?>
				<div class="filter">
					<h3><?= $filter['title']; ?></h3>
					<ul>
						<?php foreach($filter['options'] as $option): ?>
							<li><?= facet_option_set_tag($filter, $option); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		
	</div>
	
	<div class="col-md-9">
	<?php if( !empty($category['products'])): ?>	

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
	<?php foreach($category['products']['results'] as $product): ?>
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
<?php endif; ?>

</div>
<?php get_footer();?>