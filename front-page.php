<?php get_header();?>
	<!-- home case  -->
	<div class="homecase">
		<div class="row pt-5">
			<?php twisty_social();?>
		</div>
	</div>
	<?php 
		$twisty_posts = new WP_Query(
        	array(
        	'meta_key' => '_thumbnail_id',
            'posts_per_page'    => 5
        ));
    ?>
	<?php
        $j = 0;
        $container='container';  
        $row='row';
    ?>
    <?php while ($twisty_posts->have_posts()):$twisty_posts->the_post();
    	$j++;
    	if($j % 2 !=0):
    		// Odd  for left float
    		$column_content='column-content';
    		$column_img='column-img';
    		$left_right='float-left';
    		$heading='heading';
    		$meta='meta';
    		$desc='desc';
    ?>
		    <div class="container" id="showcase-space" style="margin-top:1px;">
				<div class="row">
					<div class="<?php echo $column_content .' '. $left_right ;?>" >
						<?php
			            	the_title( '<h1 class="entry-heading"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			          	?>
			          	<?php twisty_meta();?>
						<div class="entry-excerpt" > 
							<?php the_excerpt();
								sprintf( _e( ' <a href="%s" class="post-more-btn ae-5 ae-4"> read more</a>', 'twisty' ), esc_url( get_permalink() )  );
				      		?>
				      	</div>
					</div>
					<div class="  <?php echo $column_img .' '. $left_right ;?>">
						<a href="<?php echo esc_url( get_permalink() );?>" >
							<?php the_post_thumbnail('full', array('class' => 'borders')); ?>
		       			</a>
					</div>
				</div>
			</div>
		<?php
    	else:
    		//Even for right float
    		$left_right='float-left';
    		$float_right='float-right';
    		?>
    		<div class="container">
				<div class="row">
					<div class="<?php echo $column_content .' '. $float_right ;?>" >
						<?php
	            			the_title( '<h1 class="entry-heading"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
	          			?>
          				<?php twisty_meta();?>
          				<p class="meta" > 
							<?php 
								the_excerpt();
								sprintf(  ' <a href="%s" class="post-more-btn ae-5 ae-4">'.esc_html('read more','twisty').'  </a>' , esc_url( get_permalink() )  );
							
							?>
						</p>
					</div>
					<div class="<?php echo $column_img .' '. $left_right ;?>" >
						<a href="<?php echo esc_url( get_permalink() );?>" >
							<?php the_post_thumbnail('full', array(
	                            'class' => 'borders'
	                        )); ?>
	        			</a>
					</div>
				</div> 	<!-- end row  -->
			</div> 	<!--end container  -->
		<?php
		endif;
    	?>
    <?php endwhile;?>
	
<?php wp_footer(); ?>
<?php get_footer(); ?>