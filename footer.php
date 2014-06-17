			</div>
		</div>
	
	
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
				        <?php
				            wp_nav_menu( array(
				                'menu'              => 'footer1',
				                'theme_location'    => 'footer1',
				                'depth'             => 1,
				                'container'         => 'div',
				                'container_class'   => '',
				        		'container_id'      => '',
				                'menu_class'        => '',
				                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
				                'walker'            => new wp_bootstrap_navwalker())
				            );
				        ?>
					</div>
					<div class="col-md-4">
				        <?php
			            	wp_nav_menu( array(
			                	'menu'              => 'footer2',
			                	'theme_location'    => 'footer2',
			                	'depth'             => 1,
			                	'container'         => 'div',
			                	'container_class'   => '',
			        			'container_id'      => '',
			                	'menu_class'        => '',
			                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                	'walker'            => new wp_bootstrap_navwalker())
			            	);
				        ?>
					</div>
					<div class="col-md-4">
				        <?php
			            	wp_nav_menu( array(
			                	'menu'              => 'footer3',
			                	'theme_location'    => 'footer3',
			                	'depth'             => 1,
			                	'container'         => 'div',
			                	'container_class'   => '',
			        			'container_id'      => '',
			                	'menu_class'        => '',
			                	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			                	'walker'            => new wp_bootstrap_navwalker())
			            	);
				        ?>
					</div>
				</div>
			
			</div>
		</div>
	
		<script src="<?php echo get_template_directory_uri().'/js/jquery.1.11.js';?>"></script>
		<script src="http://owlcarousel.owlgraphic.com/assets/owlcarousel/owl.carousel.js"></script>
   		<script src="<?php echo get_template_directory_uri().'/js/bootstrap.min.js';?>"></script>
  		<?php wp_footer();?>
		
        <script>
          $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
				loop:true,
				    margin:10,
				    responsiveClass:true,
				    responsive:{
				        0:{
				            items:1,
				            nav:true
				        },
				        
				    }
            })
          })
		  
		  $('#product-tabs a').click(function (e) {
		    e.preventDefault()
		    $(this).tab('show')
		  })
        </script>
    </body>
</html>
