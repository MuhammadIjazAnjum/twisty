<?php

function twisty_theme_support(){
	// Set the default content width.
    // if ( ! isset( $content_width ) ) {
    //     $GLOBALS['content_width'] = 900;
    // } 
    
    // load_theme_textdomain('twisty', get_template_directory() . '/lang');
    
    //sroll for cusomizer and frontpage
    

    // Enable support for Customer background.
     $args = array(
        'default-color'      => '000',
        'default-position-x' => 'right',
        'default-position-y' => 'top',
        'default-repeat'     => 'no-repeat',  
    );
    add_theme_support( 'custom-background', $args );
    //Custom header
	$args = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/imgs/header.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
      );
	add_theme_support( 'custom-header', $args );
    //custom logo
    $args = array(
        'height'               => 100,
        'width'                => 200,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $args );
    // html5 tags support 
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

    //automatic feedlink
	add_theme_support( 'automatic-feed-links' );
    //Title support
	add_theme_support( 'title-tag' );
	// Post Thumbs
	add_theme_support('post-thumbnails');
    
	// Nav Menus
	register_nav_menus(array(
		'primary'	=> __('Primary Menu','twisty'),
    ));
    // Editor Style.
    add_editor_style(  '/css/editor-style.css'  );
    //responsive embeds
    add_theme_support( 'responsive-embeds' );
    // default structure style 
    add_theme_support( 'wp-block-styles' );
    // wide full allignment 
    add_theme_support( 'align-wide' );
    // Baseline support
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => esc_attr__( 'strong magenta', 'twisty' ),
            'slug' => 'strong-magenta',
            'color' => '#a156b4',
        ),
        array(
            'name' => esc_attr__( 'light grayish magenta', 'twisty' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#d0a5db',
        ),
        array(
            'name' => esc_attr__( 'very light gray', 'twisty' ),
            'slug' => 'very-light-gray',
            'color' => '#eee',
        ),
        array(
            'name' => esc_attr__( 'very dark gray', 'twisty' ),
            'slug' => 'very-dark-gray',
            'color' => '#444',
        ),
    ) );
}

add_action('after_setup_theme', 'twisty_theme_support');
// Default header images
    $header_images = array(
    'default' => array(
            'url'           => get_template_directory_uri() . '/imgs/header.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/imgs/header-thumbnail.jpg',
            'description'   => 'default',
    ),
    'other' => array(
            'url'           => get_template_directory_uri() . '/imgs/header1.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/imgs/header1-thumbnail.jpg',
            'description'   => 'Other',
    ),  
);
register_default_headers( $header_images );
// Widget Locations
function init_widgets($id){
	register_sidebar(array(
		'name'	=> 'Sidebar',
		'id'	=> 'sidebar',
		'before_widget'	=> '<div class="sidebar sidebar-widget">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
	));
 }

add_action('widgets_init', 'init_widgets');
 
add_action('init', function() {
    wp_register_style('twisty-block-styles', get_template_directory_uri() . '/css/twisty-block-style.css', false);
    register_block_style('twisty/block', [
        'name' => 'twisty-cover',
        'label' => __('twisty custom cover', 'twisty'),
    ]);
});


function twisty_block_pattern() {
    if (function_exists('register_block_pattern')) {
        register_block_pattern( 'twisty/pattern',
        array(
            'title'       => __( 'Gallery Twisty', 'twisty' ),
            'description' => __( 'Twisty Gallery', 'twisty' ),
            'content'     => "<!-- wp:paragraph -->
                    <p>Content for the twisty post</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p></p>
                    <!-- /wp:paragraph -->",
        ) );
    }
}
 add_action( 'init', 'twisty_block_pattern' );

function twisty_styles_scripts() {
	wp_enqueue_style( 'twisty-style', get_stylesheet_uri() );
	wp_enqueue_style( 'twisty-required', get_template_directory_uri().'/css/required.css' );
    wp_enqueue_style( 'twisty-bootstarp-min', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'twisty-bootstarp', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'twisty-awesome', get_template_directory_uri().'/css/font-awesome.css' );
 	wp_enqueue_style( 'twisty-animation', get_template_directory_uri().'/css/animate.css' );
    wp_enqueue_script( 'twisty-scroll', get_template_directory_uri().'/css/scroll.js' );
   require get_template_directory(). '/inc/default-css.php';
  
}
add_action( 'wp_enqueue_scripts', 'twisty_styles_scripts' );
    require get_template_directory()  . '/inc/comment-functions.php' ;
    // Add Customizer Functionality
    require get_template_directory(). '/inc/customizer.php';
  
