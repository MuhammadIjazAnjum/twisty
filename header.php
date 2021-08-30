<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
</head>
<body  <?php body_class( ); ?> >
	<?php wp_body_open(); ?>
	<!-- nav -->
	<div id="nav" style="background-image:url(<?php echo get_header_image() ?>);" >
		<!-- div site title and site description -->
		<div class="row" >
			<div class="col-lg-3" >
				<?php if ( has_custom_logo() ) { the_custom_logo();} ?>
			</div>
			<div class="col-lg-3" >
				<div class="site-title" > 
		    	<a  id="twisty-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		     		<?php echo esc_html(get_bloginfo( 'name' )); ?>
		     	</a>
	    	</div>
		    <div class="site-description "  >
		      <a  id="twisty-description" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <?php bloginfo( 'description' ); ?>
		      </a>
		    </div>
			</div>
			<div id="nav-menu" class="col-lg-6  " >
				<?php
        		wp_nav_menu(
            	array(
              	'theme_location' => 'primary',
                'menu_id'         =>'menulist',
								'menu_class'      => 'menuitem',
								'fallback_cb'     => false,
							)
						);
  			?>
			</div>
		</div> 		<!-- End row   -->
	</div>	<!-- End div  nav  -->

	<div class="wrapper">
		<!-- home case -->
