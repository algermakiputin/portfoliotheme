<?php
/**
 * Alger Port functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alger_Port
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'alger_port_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alger_port_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alger Port, use a find and replace
		 * to change 'alger-port' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alger-port', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'alger-port' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'alger_port_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alger_port_setup' );

add_filter( 'wpcf7_form_tag', function ( $tag ) {
    $datas = [];
    foreach ( (array)$tag['options'] as $option ) {
        if ( strpos( $option, 'data-' ) === 0 ) {
            $option = explode( ':', $option, 2 );
            $datas[$option[0]] = apply_filters('wpcf7_option_value', $option[1], $option[0]);
        }
    }
    if ( ! empty( $datas ) ) {
        $name = $tag['name'];
        $tag['name'] = $id = uniqid('wpcf');
        add_filter( 'wpcf7_form_elements', function ($content) use ($name, $id, $datas) {
            return str_replace($id, $name, str_replace("name=\"$id\"", "name=\"$name\" ". wpcf7_format_atts($datas), $content));
        });
    }
    return $tag;
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alger_port_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alger_port_content_width', 640 );
}
add_action( 'after_setup_theme', 'alger_port_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alger_port_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alger-port' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'alger-port' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alger_port_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alger_port_scripts() {

	
	wp_enqueue_style( 'alger-port-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'alger-port-style', 'rtl', 'replace' );

	wp_enqueue_script( 'alger-port-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstra-js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'easing-js', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'validate-js', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/assets/vendor/counterup/counterup.min.js', array(), _S_VERSION, true );   

	wp_enqueue_script( 'aos-js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alger_port_scripts' );


function alger_port_theme_stylesheets() {
   wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri() .'/assets/vendor/bootstrap/css/bootstrap.min.css', array(), _S_VERSION );
   wp_enqueue_style( 'icofont',  get_template_directory_uri() .'/assets/vendor/icofont/icofont.min.css', array(), _S_VERSION );
   wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), _S_VERSION ); 
   wp_enqueue_style( 'remixicon', get_template_directory_uri() . '/assets/vendor/remixicon/remixicon.css', array(), _S_VERSION  ); 
   wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), _S_VERSION );
 	
 	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION ); 

 	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i,800,900', false ); 


}
add_action( 'wp_enqueue_scripts', 'alger_port_theme_stylesheets' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

