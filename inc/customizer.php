<?php
	function twisty_customize_register($wp_customize){
		// Homecase footer banner  Section
  		$wp_customize->add_section('homecase', array(
			'title'          => __('Homecase', 'twisty'),
			'description'    => sprintf( __('homecase and footer banner ', 'twisty')
			),
			'priority'       => 130,
		));

		// Image Setting
		  $wp_customize->add_setting('homecase_image', array(
		    'default' => get_template_directory_uri() . '/imgs/homecase.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'homecase_image', array(
		     'label'    => __('Homecase image', 'twisty'),
		     'section'  => 'homecase',
		     'settings' => 'homecase_image',
		     'priority' => 1,
		 )));

		 // Height Setting
		$wp_customize->add_setting( 'homecase_height', array(
			'default'              => __('700', 'twisty'),
			'type'                 => 'theme_mod',
			'sanitize_callback'     =>'absint',
		));

		// Height Control
		$wp_customize->add_control( 'homecase_height', array(
			'label'    => __('Homecase Height', 'twisty'),
			'section'  => 'homecase',
			'priority' => 2,
		));
		// Footer Banner 
		 $wp_customize->add_setting('footer_banner', array(
		    'default' => get_template_directory_uri() . '/imgs/footer_banner.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 // Image Control
		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_banner', array(
		     'label'    => __('Footer Banner', 'twisty'),
		     'section'  => 'homecase',
		     'settings' => 'footer_banner',
		     'priority' => 4,
		 )));

		// Images rounded corners
		$wp_customize->add_section('images', array(
			'title'          => __('Images corners', 'twisty'),
			'description'    => sprintf( __('Options for image corners', 'twisty')
			),
			'priority'       => 130,
		));
		$wp_customize->add_setting( 'images', array(
			'default'              => __('50', 'twisty'),
			'type'                 => 'theme_mod',
			'sanitize_callback' => 'absint',
		));

		// Height Control
		$wp_customize->add_control( 'images', array(
			'label'    => __('Border radius', 'twisty'),
			'section'  => 'images',
			'priority' => 2,
		));
	
		// Commen Featured Image 
		// Team
		$wp_customize->add_section('twisty_featured_img', array(
			'title'          => __('Featrued image', 'twisty'),
			'description'    => sprintf( __('Common Featured Image', 'twisty')
			),
			'priority'       => 130,
		));
		 
		// Common Featured image 
		  $wp_customize->add_setting('twisty_featured_img', array(
		    'default' => get_template_directory_uri() . '/imgs/thumbnail.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'twisty_featured_img', array(
		     'label'    => __('Common featured image', 'twisty'),
		     'section'  => 'twisty_featured_img',
		     'settings' => 'twisty_featured_img',
		     'priority' => 1,
		 )));
		// Team
		$wp_customize->add_section('team', array(
			'title'          => __('Team', 'twisty'),
			'description'    => sprintf( __('Team members', 'twisty')
			),
			'priority'       => 130,
		));
		 // Job one title
		 $wp_customize->add_setting('job_one_title', array(
		   'default'              => __('CEO', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',

		 ));

		 $wp_customize->add_control( 'job_one_title', array(
		   'label'    => __('Job Title', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_one_title',
		   'priority' => 1,
		 ));
		 //Job one Name
		 $wp_customize->add_setting('job_one_name', array(
		   'default'              => __('Name', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_one_name', array(
		   'label'    => __('Name', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_one_name',
		   'priority' => 1,
		 ));
		// Job one image
		  $wp_customize->add_setting('job_one_img', array(
		    'default' => get_template_directory_uri() . '/imgs/CEO.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'job_one_img', array(
		     'label'    => __('Snap', 'twisty'),
		     'section'  => 'team',
		     'settings' => 'job_one_img',
		     'priority' => 1,
		 )));

// Job two title
		 $wp_customize->add_setting('job_two_title', array(
		   'default'              => __('Director', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_two_title', array(
		   'label'    => __('Job Title', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_two_title',
		   'priority' => 1,
		 ));
		 //Job two Name
		 $wp_customize->add_setting('job_two_name', array(
		   'default'              => __('Name', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_two_name', array(
		   'label'    => __('Name', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_two_name',
		   'priority' => 1,
		 ));
		// Job two image
		  $wp_customize->add_setting('job_two_img', array(
		    'default' => get_template_directory_uri() . '/imgs/director.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'job_two_img', array(
		     'label'    => __('Snap of director', 'twisty'),
		     'section'  => 'team',
		     'settings' => 'job_two_img',
		     'priority' => 1,
		 )));

		 /////
// Job three title
		 $wp_customize->add_setting('job_three_title', array(
		   'default'              => __('Designer', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_three_title', array(
		   'label'    => __('Job Title', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_three_title',
		   'priority' => 1,
		 ));
		 //Job three Name
		 $wp_customize->add_setting('job_three_name', array(
		   'default'              => __('Name ', 'twisty'),
		   'type'                 => 'theme_mod',
		   'sanitize_callback' => 'twisty_senitize_text',
		 ));

		 $wp_customize->add_control( 'job_three_name', array(
		   'label'    => __('Name', 'twisty'),
		   'section'  => 'team',
		   'settings'=> 'job_three_name',
		   'priority' => 1,
		 ));
		// Job three image
		  $wp_customize->add_setting('job_three_img', array(
		    'default' => get_template_directory_uri() . '/imgs/designer.jpg',
		    'type'    => 'theme_mod',
		    'sanitize_callback' => 'esc_url_raw',

		 ));

		 $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'job_three_img', array(
		     'label'    => __('Snap ', 'twisty'),
		     'section'  => 'team',
		     'settings' => 'job_three_img',
		     'priority' => 1,
		 )));

		 /////

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

		 /////


		// Social Section
		 $wp_customize->add_section('social', array(
		     'title'          => __('Social', 'twisty'),
		     'description'    => sprintf( __('Social media urls', 'twisty')
		     ),
		     'priority'       =>140,
		 ));

		 // Facebook URL Setting
		 $wp_customize->add_setting('facebook_url', array(
		   'default'              => __('http://www.facebook.com', 'twisty'),
		   'sanitize_callback'     =>'esc_url_raw',
		   'type'                 => 'theme_mod'
		 ));

		 // Facebook URL Control
		 $wp_customize->add_control( 'facebook_url', array(
		   'label'    => __('Facebook URL', 'twisty'),
		   'section'  => 'social',
		   'priority' => 1,
		 ));

		 // Twitter URL Setting
		$wp_customize->add_setting('twitter_url', array(
		'default'              => __('http://www.twitter.com', 'twisty'),
		'sanitize_callback'     =>'esc_url_raw',
		'type'                 => 'theme_mod'
		));

		// Twitter URL Control
		$wp_customize->add_control( 'twitter_url', array(
		'label'    => __('Twitter URL', 'twisty'),
		'section'  => 'social',
		'priority' =>2,
		));

		// Linkedin URL Setting
		 $wp_customize->add_setting('linkedin_url', array(
		   'default'              => __('http://www.linkedin.com', 'twisty'),
		   'sanitize_callback'     =>'esc_url_raw',
		   'type'                 => 'theme_mod'
		 ));

		 // Linkedin URL Control
		 $wp_customize->add_control( 'linkedin_url', array(
		   'label'    => __('LinkedIn URL', 'twisty'),
		   'section'  => 'social',
		   'priority' =>2,
		 ));

	

	}

	add_action('customize_register','twisty_customize_register');

	function twisty_senitize_text($input)
	{
		return $input;
	}