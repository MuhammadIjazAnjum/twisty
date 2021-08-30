<?php get_header();?>
	<?php while (have_posts()):the_post();?>
		<div class="container">
			<div class="row">
			<div class="column-one " >
				<div class="post-thumbnail">
					<?php if (has_post_thumbnail($post)):?>
						<?php  the_post_thumbnail(); ?>
					<?php else:?>
						<img    src="<?php echo esc_url(get_theme_mod('twisty_featured_img',get_template_directory_uri().'/imgs/featured.jpg')) ;?>" alt="image is not loading">
					<?php endif;?>
				</div>
			</div>
			<div class="row">
				<div class="column-one " >
				<?php
           				 the_title( '<h1 class="heading"> ','</h1>' );
          		?>
			</div>
			</div>
			
		</div>	
		</div>
		
		
    <div class="container">
			<div class="row">
				<div class="column-66 float-left" style="text-align: left;">
					<?php twisty_meta();?>

				<div class="entry-excerpt">
					<?php the_content();?>
				</div>
					
					
						
					 
						<?php wp_link_pages(); ?>
						<?php if ( comments_open() || get_comments_number() ) :
								     comments_template();
								 endif; ?>
					
				</div>
				<div class="column-34 " style="padding: 0 25px;">
					<?php if(is_active_sidebar('sidebar')) : ?>
              		<?php dynamic_sidebar('sidebar'); ?>
            	<?php endif; ?>
					
				</div>	
			</div>
		</div>
	<!-- container left float   -->
	


    <?php endwhile;?>


	<!-- container float right  -->
	
	<?php get_footer();?>