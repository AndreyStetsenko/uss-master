<?php
/**
 * uss functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uss
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'uss_security_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function uss_security_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on uss, use a find and replace
		 * to change 'uss-security' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'uss-security', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'uss-security' ),
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
				'uss_security_custom_background_args',
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
add_action( 'after_setup_theme', 'uss_security_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function uss_security_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'uss_security_content_width', 640 );
}
add_action( 'after_setup_theme', 'uss_security_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uss_security_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'uss-security' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'uss-security' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'uss_security_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function uss_security_scripts() {
	wp_enqueue_style( 'uss-security-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	wp_enqueue_style( 'uss-security-bootstrap-select', 'https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css' );
	wp_enqueue_style( 'uss-security-swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
	wp_enqueue_style( 'uss-security-ekko-lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css' );
	wp_enqueue_style( 'uss-security-OwlCarousel2', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css' );
	wp_enqueue_style( 'uss-security-fontawesome', get_template_directory_uri() . '/assets/fonts/fontawesome/css/all.min.css' );
	wp_enqueue_style( 'uss-security-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'uss-security-style', 'rtl', 'replace' );

	wp_enqueue_script( 'uss-security-jquery', '//code.jquery.com/jquery-3.5.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-jqueryui', '//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-jquery-transit', '//ricostacruz.com/jquery.transit/jquery.transit.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-bootstrap-select', '//cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-swiper-bundle', '//unpkg.com/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-ekko-lightbox', '//cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-owl-carousel', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'uss-security-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'uss-security-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'uss_security_scripts' );

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
