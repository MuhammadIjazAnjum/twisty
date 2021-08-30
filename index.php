<?php get_header();?>
	
	<div class="row">
				<div class="col-12 text-center" >
				<h1 class="heading">Blogs </h1>
			</div>
			
	</div>	
	
	<?php $i = 0; ?>
    <?php if(have_posts()):?>
    <div class="container">
    <?php while (have_posts()):the_post();
    	$i++;
    	if($i % 2 !=0): 
    	// Odd  for left float
    	?>
    	<div class="row odd-bg-color" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- <div class="<?php //echo $column_two .' '. $left_right ;?>" > -->
				<div class="col-md-6" >	
					<?php twisty_meta();?>
					<?php
		            the_title( '<h1 class="entry-heading"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		      ?>
				<div class="entry-excerpt" > 
					<?php the_excerpt();
						sprintf( _e( ' <a href="%s" class="post-more-btn ae-5 ae-4"> read more</a>', 'twisty' ), esc_url( get_permalink() )  );
	      			?>
	      </div>
				</div>
				<div class="col-md-6 " >	
			<!-- <div class="<?php //echo $column_two .' '. $left_right ;?>" > -->
				<?php if (has_post_thumbnail($post)):?>
							
					<a href="<?php echo esc_url( get_permalink() );?>" >
						<?php the_post_thumbnail('full', array(
                            'class' => 'borders'
                        )); ?>
        </a>    
				<?php else:?>
					
					<a href="<?php echo esc_url( get_permalink() );?>"  >
					<img   class="borders"  src="<?php echo esc_url(get_theme_mod('twisty_featured_img',get_template_directory_uri().'/imgs/thumbnail.jpg')) ;?>" alt="image is not loading">
				</a>
				<?php endif;?>
			</div>
		</div>	
    	<?php else:
    		//Even for right float
    	?>	
    	<div class="row even-bg-color" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<!-- <div class="<?php //echo $column_two .' '. $left_right ;?>" > -->
				<div class="col-md-6 " >	
				<?php if (has_post_thumbnail($post)):?>
					<a href="<?php echo esc_url( get_permalink() );?>" >
						<?php the_post_thumbnail('full', array(
                            'class' => 'borders'
                        )); ?>
        	</a>    
				<?php else:?>
					<a href="<?php echo esc_url( get_permalink() );?>"  >
						<img   class="borders"  src="<?php echo esc_url(get_theme_mod('twisty_featured_img',get_template_directory_uri().'/imgs/thumbnail.jpg')) ;?>" alt="image is not loading">
					</a>
				<?php endif;?>
			</div>
				<div class="col-md-6 " >	
					<?php twisty_meta();?>
					<?php
		        the_title( '<h1 class="entry-heading"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		      ?>
					<div class="entry-excerpt" > 
						<?php the_excerpt();
							sprintf( _e( ' <a href="%s" class="post-more-btn ae-5 ae-4"> read more</a>', 'twisty' ), esc_url( get_permalink() )  );
	      		?>
	      	</div>
				</div>
				
		</div>
    	<?php endif;?>
  <?php endwhile;?>
	<!--Pagination  -->

	
		<div class="row">
			<div class="pagination col-md-12 upper-case">
				<div class="nav-next " ><?php previous_posts_link( 'Newer posts' ); ?></div>
 				<div class="nav-previous " ><?php next_posts_link( 'Older posts' ); ?></div>
 			</div>
		</div>
	
<?php else : ?>
 
<?php _e('Sorry, no posts matched your criteria.','twisty'); ?>
 

<?php endif; ?>
</div>


<!-- Footer -->
<?php get_footer()?>
