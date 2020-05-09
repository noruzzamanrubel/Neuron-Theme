<?php 

//wp-bootstrap-navwalker For Sub Menu
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
//wp-bootstrap-navwalker For Sub Menu

//Include Shortcode file
require_once( get_theme_file_path( "/inc/shortcode.php" ) );
//Include Shortcode file

//CodeStar FrameWork
require_once( get_theme_file_path( "/lib/csf/cs-framework.php" ) );
define( 'CS_ACTIVE_LIGHT_THEME',  true  ); // default false
//CodeStar FrameWork


function neuron_theme_setup() {
    load_theme_textdomain( 'neuron' );
    add_theme_support( "post-thumbnails" );
    add_image_size( 'neuron-blog-thumb', 370, 260, true );
    add_theme_support( "custom-logo" );
    add_theme_support( "title-tag" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "topmenu", __( 'Top Menu', 'neuron' ) );
}

add_action( "after_setup_theme", "neuron_theme_setup" );

function neuron_assets() {

    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0" );
    wp_enqueue_style( "fontawesome-css", get_theme_file_uri( "/assets/fonts/font-awesome/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "owl-css", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootsnav-css", get_theme_file_uri( "/assets/css/bootsnav.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/bootstrap/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "neuron-css", get_stylesheet_uri(), null );
    wp_enqueue_style( "custom-css", get_theme_file_uri( "/assets/css/custom.css" ), null );
    
    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/bootstrap/js/bootstrap.min.js" ), null, "1.0" );
    wp_enqueue_script( "bootsnav-js", get_theme_file_uri( "/assets/js/bootsnav.js" ), null, "1.0" );
    wp_enqueue_script( "owl-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), null, "1.0" );
    wp_enqueue_script( "wow-js", get_theme_file_uri( "/assets/js/wow.min.js" ), null, "1.0" );
    wp_enqueue_script( "ajaxchimp-js", get_theme_file_uri( "/assets/js/ajaxchimp.js" ), null, "1.0" );
    wp_enqueue_script( "ajaxchimp-con-js", get_theme_file_uri( "/assets/js/ajaxchimp-config.js" ), null, "1.0" );
    wp_enqueue_script( "script-js", get_theme_file_uri( "/assets/js/script.js" ), array( "jquery" ), "1.0", true );

}

add_action( "wp_enqueue_scripts", "neuron_assets" );

// Custom Post

function neuron_theme_custom_post() {
    register_post_type( 'slider',
        array(
            'labels' => array(
                'name' => __( 'slides' ),
                'singular_name' => __( 'slide' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'features' ),
                'singular_name' => __( 'feature' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'service',
        array(
            'labels' => array(
                'name' => __( 'services' ),
                'singular_name' => __( 'service' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'work',
    array(
        'labels' => array(
            'name' => __( 'Works' ),
            'singular_name' => __( 'Work' )
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'public' => true
    )
);



}
add_action( 'init', 'neuron_theme_custom_post' );
// End Custom Post

// Start Widget Register area 

function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Left', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add Footer one widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Menu', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add Footer Menu widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Latest Post', 'neuron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add Footer Latest Post widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
    );
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Right', 'neuron' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add Footer Right widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'neuron_widgets_init' );

// End Widget Register area 

// category and tag part

function neuron_categorized_blog() {
	$category_count = get_transient( 'neuron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'neuron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}



if ( ! function_exists( 'neuron_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function neuron_entry_footer() {

		/* translators: Used between list items, there is a space after the comma. */
		$separate_meta = __( ', ', 'neuron' );

		// Get Tags for posts.
		$tags_list = get_the_tag_list( '', $separate_meta );

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if  ( ( neuron_categorized_blog() || $tags_list ) || get_edit_post_link() ) {

			echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if (  neuron_categorized_blog() || $tags_list ) {
					echo '<span class="cat-tags-links">';

					if ( $tags_list && ! is_wp_error( $tags_list ) ) {
						echo '<span class="tags-links">' . $tags_list . '</span>';
					}

					echo '</span>';
				}
			}

			echo '</footer> <!-- .entry-footer -->';
		}
	}
endif; //end category and tag part





 