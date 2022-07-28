<?php
/**
 * WebFocus-krasnodar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WebFocus-krasnodar
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'webfocus_krasnodar_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function webfocus_krasnodar_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on WebFocus-krasnodar, use a find and replace
		 * to change 'webfocus-krasnodar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'webfocus-krasnodar', get_template_directory() . '/languages' );

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
				'MenuOne' => esc_html__( 'Primary', 'webfocus-krasnodar' ),
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
				'webfocus_krasnodar_custom_background_args',
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
add_action( 'after_setup_theme', 'webfocus_krasnodar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webfocus_krasnodar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webfocus_krasnodar_content_width', 640 );
}
add_action( 'after_setup_theme', 'webfocus_krasnodar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function webfocus_krasnodar_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'webfocus-krasnodar' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'webfocus-krasnodar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'webfocus_krasnodar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function webfocus_krasnodar_scripts() {
	wp_enqueue_style( 'webfocus-krasnodar-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'webfocus-krasnodar-style', 'rtl', 'replace' );
	wp_enqueue_style( 'main-css', get_template_directory_uri().'/assets/css/main.css', array(), _S_VERSION );
	wp_enqueue_style( 'subservice', get_template_directory_uri().'/assets/css/subservice.css', array(), _S_VERSION );
	wp_enqueue_style( 'fonts', get_template_directory_uri().'/assets/css/fonts.css', array(), _S_VERSION );
	wp_enqueue_style( 'padding', get_template_directory_uri().'/assets/css/padding.css', array(), _S_VERSION );
	wp_enqueue_style( '1920-and-1440', get_template_directory_uri().'/assets/css/1920-and-1440.css', array(), _S_VERSION );
	wp_enqueue_style( 'media1440', get_template_directory_uri().'/assets/css/media1440.css', array(), _S_VERSION );
	wp_enqueue_style( 'media1090', get_template_directory_uri().'/assets/css/media1090.css', array(), _S_VERSION );
	wp_enqueue_style( 'media768', get_template_directory_uri().'/assets/css/media768.css', array(), _S_VERSION );
	wp_enqueue_style( 'media500', get_template_directory_uri().'/assets/css/media500.css', array(), _S_VERSION );
	wp_enqueue_style( 'swiper','https://unpkg.com/swiper@7/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'aos','https://unpkg.com/aos@next/dist/aos.css', array(), _S_VERSION );

	wp_enqueue_script( 'webfocus-krasnodar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'viewportChecker', get_template_directory_uri() . '/assets/lib/js/viewportChecker.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/lib/js/script.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'AOS', get_template_directory_uri() . '/assets/lib/js/AOS.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'arrowAnim', get_template_directory_uri() . '/assets/lib/js/arrowAnim.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiperTwo', get_template_directory_uri() . '/assets/lib/js/vivus.min.js', array (),_S_VERSION, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webfocus_krasnodar_scripts' );

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

function btn_include_custom_jquery() {
	wp_deregister_script('jquery');


	wp_enqueue_script( 'jquery','//code.jquery.com/jquery-1.11.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'juquery','//code.jquery.com/jquery-migrate-1.2.1.min.js', array(), _S_VERSION, true );

	wp_enqueue_script('swiperOne','https://unpkg.com/swiper@7/swiper-bundle.min.js', array ('jquery'), true); // true to load at the bottom after jquery
	// wp_enqueue_script('swiperTwo','https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.6/vivus.min.js', array ('jquery'), true); // true to load at the bottom after jquery
	wp_enqueue_script('swiperThree','https://unpkg.com/aos@next/dist/aos.js', array ('jquery'), true); // true to load at the bottom after jquery

   }
   add_action('wp_enqueue_scripts', 'btn_include_custom_jquery');