<?php get_header();?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="row">
			<div class="column-one " >
				<h1 class="heading"><?php the_title();?> </h1>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 " >
					<p class="entry-excerpt" > 
						
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>
				<div class="ccol-lg-4 " >
					<?php if(is_active_sidebar('sidebar')) : ?>
              		<?php dynamic_sidebar('sidebar'); ?>
            	<?php endif; ?>
					
				</div>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
	<?php get_footer();?>