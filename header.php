<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
       	<?php 	global $page, $paged;
       				bloginfo( 'name' );
	   				wp_title( ' | ', true, 'left' );
	   				$site_description = get_bloginfo( 'description', 'display' );
	   				
	   				if ( $site_description && ( is_home() || is_front_page() ) ) 	echo " | $site_description";
	   				if ( $paged >= 2 || $page >= 2 )	echo ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) );
	   	?>
        </title>
		<!-- bootstrap.min.css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap.min.css';?>">
        
        <!-- Optional theme -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/bootstrap-theme.min.css';?>">
		
		<!-- wordpress theme style.css -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/style.css';?>">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/libs/carousel/assets/owl.carousel.css';?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/libs/carousel/assets/owl.theme.default.css';?>">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/libs/carousel/assets/owl.theme.green.css';?>">

	    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>

		<nav class="navbar navbar-default" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo home_url(); ?>">
		                <?php bloginfo('name'); ?>
		            </a>
		    </div>
		
		        <?php
		            wp_nav_menu( array(
		                'menu'              => 'primary',
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse',
		        		'container_id'      => 'bs-example-navbar-collapse-1',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
			
				<p class="navbar-text">
					<?php if($_SERVER['SERVER_NAME'] == 'portal-beta.westocklots.com'): ?>
						phone : +31 (0)40 78 200 88 - email : info@westocklots.com - Chat with us
					<?php endif; ?>
					
					<?php if($_SERVER['SERVER_NAME'] == 'portal-beta.actiepartner.nl'): ?>
						phone : +31 (0)40 78 200 88 - email : info@actiepartner.nl - Chat with us
					<?php endif; ?>
				</p>
			</div>
		</nav>
		
		
		<div class="content">
			<div class="container">
		