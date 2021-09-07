
	<div class="team" > 
		<div class="container" >
			<div class="row ">
			  <?php if( get_theme_mod('twisty_first_checkbox')=='1'): ?>    
				<div class="col">
					<div class="flip-outer">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img   src="<?php echo esc_url(get_theme_mod('job_one_img',get_template_directory_uri().'/imgs/CEO.jpg')) ;?>">
								</div>
								<div class="flip-box-back">
									 <h2> <?php echo esc_html( get_theme_mod('job_one_title',__('CEO','twisty'))); ?></h2>
	      					<h3> <?php  echo esc_html( get_theme_mod('job_one_name',__('Name','twisty'))); ?>  </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endif;?>
			<?php if( get_theme_mod('twisty_second_checkbox')=='1'): ?> 
				<div class="col">
					<div class="flip-outer">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img  src="<?php echo esc_url(get_theme_mod('job_two_img',get_template_directory_uri().'/imgs/director.jpg') );?>">
									
								</div>
								<div class="flip-box-back">
									 <h2> <?php  echo esc_html( get_theme_mod('job_two_title',__('Director','twisty'))); ?></h2>
	      					<h3> <?php  echo esc_html( get_theme_mod('job_two_name',__('Name','twisty'))); ?>  </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif;?>
			<?php if( get_theme_mod('twisty_third_checkbox')=='1'): ?>
				<div class="col">
					<div class="flip-outer">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img  src="<?php echo esc_url( get_theme_mod('job_three_img',get_template_directory_uri().'/imgs/designer.jpg')) ;?>"  >
									
								</div>
								<div class="flip-box-back">
									 <h2> <?php echo  esc_html( get_theme_mod('job_three_title',__('Designer','twisty'))); ?></h2>
	      					<h3> <?php echo esc_html( get_theme_mod('job_three_name',__('Name','twisty'))); ?>  </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif;?>
				<?php if( get_theme_mod('twisty_forth_checkbox')=='1'): ?>
				<div class="col">
					<div class="flip-outer">
						<div class="flip-box">
							<div class="flip-box-inner">
								<div class="flip-box-front">
									<img  src="<?php echo esc_url(get_theme_mod('job_four_img',get_template_directory_uri().'/imgs/developer.jpg')) ;?>">
									
								</div>
								<div class="flip-box-back">
									 <h2> <?php echo esc_html( get_theme_mod('job_four_title',__('Developer','twisty'))); ?></h2>
	      					<h3> <?php echo esc_html( get_theme_mod('job_four_name',__('Name','twisty'))); ?>  </h3>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php endif;?>
			</div> 	<!-- End row for flip -->
		</div>	<!-- End container flip -->
		
	</div>
	<div class="row">
		<div class="col-12">
			<br>
		</div>
	</div>
	<div class="footer">
		<div class="banner">
			
				<div class="row">
					<?php twisty_social(); ?>
				</div>
				<div class="col-12 ">
						<?php esc_html_e('powered by bitwali','twisty');?>  
					</div>
			
		</div> <!-- End banner -->
	</div> <!-- End footer -->

	</div>	<!-- wrapper -->
</body>
</html>