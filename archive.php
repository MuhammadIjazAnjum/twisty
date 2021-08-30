<?php get_header();?>
	
	<div class="row">
				<div class="column-one " >
				<h1 class="heading">
					<?php       
                if(is_category()){
                  single_cat_title();
                } else if(is_author()){
                  the_post();
                   esc_html_e( 'Archives By Author:'.get_the_author(), 'twisty' );
                rewind_posts();
                } else if(is_tag()){
                  single_tag_title();
                } else if(is_day()){
                  echo 'Archives By Day: ' .get_the_date();
                } else if(is_month()){
                  echo 'Archives By Day: ' .get_the_date('F Y');
                } else if(is_year()){
                  echo 'Archives By Day: ' .get_the_date('Y');
                } else {
                  echo 'Archives';
                }
            ?>
            </h1> 
			</h1>
			</div>
			
	</div>	
	
	<?php
        $i = 0;
        $container='container';
        $row='row';
    ?>
    <?php while (have_posts()):the_post();
    	$i++;
    	if($i % 2 !=0):
    		// Odd  for left float
    		$column_two='column-two';
    		$left_right='float-left';
    		$heading='heading';
    		$meta='meta';
    		$desc='desc';
    	else:
    		//Even for right float
    		$left_right='float-right';

    	endif;
      ?>
      <div class="container">
		<div class="row">
			<div class="<?php echo $column_two .' '. $left_right ;?>" >
				<?php twisty_meta();?>
				
			<?php
            the_title( '<h1 class="heading"><a href="' .  esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
          ?>
				
				<p class="meta" > 
					<?php the_excerpt(); ?>
				</p>
			</div>

			<div class="<?php echo $column_two .' '. $left_right ;?>" >
				<?php if (has_post_thumbnail($post)):?>
							
					<a href="<?php echo esc_url( get_permalink() );?>" >
						<?php the_post_thumbnail('full', array(
                            'class' => 'borders'
                        )); ?>
        </a>    
				<?php else:?>
					
					<a href="<?php echo esc_url( get_permalink() );?>"  >
					<img   class="borders"  src="<?php echo esc_url(get_theme_mod('twisty_featured_img')) ;?>" alt="image is not loading">
				</a>
				<?php endif;?>
			</div>
		</div>
	</div>
	<!-- container left float   -->
	


    <?php endwhile;?>


	<!-- container float right  -->
	
	<?php get_footer();?>