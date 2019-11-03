<?php
/**
 * icon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package icon
 */
// shortcode for visual composer
if(file_exists(get_template_directory().'/inc/vc-elements.php')){
	require_once get_template_directory() . '/inc/vc-elements.php';
}
if(file_exists(get_template_directory().'/inc/vc-elements-output.php')){
	require_once get_template_directory() . '/inc/vc-elements-output.php';
}
 
 
if ( ! function_exists( 'icon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function icon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on icon, use a find and replace
		 * to change 'icon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'icon', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary', 'icon' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'icon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'icon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function icon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'icon_content_width', 640 );
}
add_action( 'after_setup_theme', 'icon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function icon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'icon' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'icon' ),
		'before_widget' => '<ul class="alt">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 2', 'icon' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'icon' ),
		'before_widget' => '<ul class="alt">',
		'after_widget'  => '</ul>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar 3', 'icon' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'icon' ),
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
	
}
add_action( 'widgets_init', 'icon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function icon_scripts() {
	
	// for style
	wp_enqueue_style( 'icon-style', get_stylesheet_uri() );
	wp_enqueue_style( 'skel-style', get_template_directory_uri().'/assets/css/skel.css');
	wp_enqueue_style( 'style.css', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_style( 'style-xlarge.css', get_template_directory_uri().'/assets/css/style-xlarge.css');
	
	wp_enqueue_style( 'font-awesome.min.css', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	
	
	// for scripts
	wp_enqueue_script( 'jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '20151215', true );
	wp_enqueue_script( 'skel.min.js', get_template_directory_uri() . '/assets/js/skel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'skel-layers.min.js', get_template_directory_uri() . '/assets/js/skel-layers.min.js', array(), '20151215', true );
	
	
	//wp_enqueue_script( 'icon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	//wp_enqueue_script( 'icon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'icon_scripts' );

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

require_once get_template_directory() . '/inc/custom-widget.php';

if(!class_exists('redux-framework')&& file_exists(dirname(__FILE__).'/redux-framework/ReduxCore/framework.php')){
	require_once(dirname(__FILE__)).'/redux-framework/ReduxCore/framework.php';
}
 if(!isset($redux_demo) && file_exists(dirname(__FILE__).'/redux-framework/sample/sample-config.php')){
	 require_once(dirname(__FILE__).'/redux-framework/sample/options.php');
 }
 
 


