<?php

		 // Job four title
		 $wp_customize->add_setting('job_four_title', array(
		   'default'              => __('Developer', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_four_title', array(
		   'label'    => __('Job Title', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_four_title',
		   'priority' => 1,
		 ));
		 //Job four Name
		 $wp_customize->add_setting('job_four_name', array(
		   'default'              => __('Name ', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_four_name', array(
		   'label'    => __('Name ', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_four_name',
		   'priority' => 1,
		 ));
		 
		// Job four image
		  $wp_customize->add_setting('job_four_img', array(
		    'default' => get_template_directory_uri() . '/imgs/developer.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'absint',

		 ));

		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'job_four_img', array(
		     'label'    => __('Snap', 'twisty'),
		     'section'  => 'team',
		     'settings' => 'job_four_img',
		     'priority' => 1,
		 )));

