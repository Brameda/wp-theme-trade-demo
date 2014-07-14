
<style>

.tab-content {
	margin-bottom: 120px;
}

</style>

<div class="row">
	<div class="col-sm-5">
		<div class="owl-carousel">
			<?php foreach($product['images'] as $image): ?>
			<div class="item">
				<?= image_tag($image, $width=500, $height=500, Null, Null, Null, Null, $classes='img-thumbnail'); ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="col-sm-7">
		<h1><?= $product['title']; ?></h1>
		
		<?php if($product['price_list']):?>
			
			<h3><?php _e('Pricelist', 'jm-domain'); ?> <small>MOQ (<?= $product['price_list']['quantity_moq']; ?> &times; ) - LOTS (<?= $product['price_list']['quantity_step']; ?> &times; )</h3>
			<table class="table table-striped">
				<tr>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
			<?php foreach($product['price_list']['tiers'] as $tier): ?>
				<tr>
					<td><?= $tier['quantity']; ?> &times;</td>
					<td><?= price_tag($tier['price']); ?></td>
				</tr>
			<?php endforeach; ?>
			</table>
				
			
		<?php endif; ?>
		
		<?php if($product['product_class'] == 'variant'):?>
			<h3><?php _e('Varianten', 'jm-domain'); ?></h3>
			<table class="table table-striped">
				<tr>
					<th>Art Number</th>
					<th>Name</th>
					<th>Inventory</th>
					<th>Process Time</th>
				</tr>
			<?php foreach($product['variant_set'] as $variant): ?>
				<tr>
					<td><?= $variant['code']; ?></td>
					<td><?= $variant['title']; ?></td>
					<td><?= $variant['inventory_quantity']; ?></td>
					<td><?= $variant['inventory_delivery']; ?></td>
				</tr>
			<?php endforeach; ?>
				<tr>
					<th>Totale</th>
					<th></th>
					<th><?= $product['inventory_quantity']; ?></th>
					<th><?= $product['inventory_delivery']; ?></th>
				<tr>
			</table>
			
		<?php else: ?>
			<h3><?php _e('Inventory', 'jm-domain'); ?></h3>
			<table class="table table-striped">
				<tr>
					<td>Inventory</td>
					<td><?= $product['inventory_quantity']; ?> &times;</td>
				</tr>
				<tr>
					<td>Process Time</td>
					<td><?= $product['inventory_delivery']; ?> days</td>
				</tr>
			</table>
			
		<?php endif; ?>
	</div>	
</div>

<div class="row">
	
	<div class="col-sm-12">
	
	<ul id="product-tabs" class="nav nav-tabs">
	  <li class="active"><a href="#description">Description</a></li>
	  <li><a href="#specifiction">Specifiction</a></li>
	  <li><a href="#attachtments">Attachtments</a></li>
	</ul>
	
	<div class="tab-content">
		
		<div class="tab-pane active" id="description">
				<h3>Description</h3>
		        <?= $product['description']; ?>
		</div>
		
		<div class="tab-pane" id="specifiction">
				<h3>Specifiction</h3>
				<table class="table table-striped">
					<tr>
						<th>Product code :</th>
						<td><?= $product['code']; ?></td>
					</tr>
					<tr>
						<th>EAN Barcode :</th>
						<td><?= $product['ean']; ?></td>
					</tr>
						<tr>
							<th>Inventory :</th>
							<td><?= $product['inventory_quantity']; ?> &times;</td>
						</tr>
						<tr>
							<th>Process Time :</th>
							<td><?= $product['inventory_delivery']; ?> days</td>
						</tr>
						<tr>
							<th>Product Dimensions :</th>
							<td><?= $product['measures']['length']; ?> cm &times; <?= $product['measures']['width']; ?> cm &times; <?= $product['measures']['height']; ?> cm</td>
						</tr>
						<tr>
							<th>Product Weight :</th>
							<td><?= $product['weight']; ?></td>
						</tr>
						<tr>
							<th>Package Dimensions :</th>
							<td><?= $product['measures']['package_length']; ?> cm &times; <?= $product['measures']['package_width']; ?> cm &times; <?= $product['measures']['package_height']; ?> cm</td>
						</tr>
						<tr>
							<th>Package Weight :</th>
							<td><?= $product['measures']['package_weight']; ?> gram</td>
						</tr>
					</table>
			
					<?php if($product['properties']): ?>
					<h3><?php _e('Properties','jm-domain');?></h3>
					<table class="table table-striped">
						<tr>
					
							<td><?php _e('Property','jm-domain');?></td>
							<td><?php _e('Value','jm-domain');?></td>
						</tr>
						<?php foreach($product['properties'] as $propertie): ?>
							<tr>
								<td><?= $propertie['name']; ?></td>
								<td><?= $propertie['value']; ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				<?php endif; ?>
		</div>
		
		<div class="tab-pane" id="attachtments">
			<h3>Attachments</h3>
			<table class="table table-striped">
				<tr>
					<th>Type</th>
					<th>Name</th>
					<th>Size</th>
				</tr>
				<?php foreach($product['images'] as $image): ?>
				<tr>
					<td>Image</td>
					<td><a href="<?= image_url($image); ?>" target="_blank"><?= $image['title']; ?></td>
					<td><?= $image['meta']['size']; ?></td>
				</tr>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
</div>
</div>