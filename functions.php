<?php
/**
 * browny functions and definitions
 *
 * @package browny
 */

if ( ! function_exists( 'browny_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function browny_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on browny, use a find and replace
	 * to change 'browny' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'browny', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'browny' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'browny_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // browny_setup
add_action( 'after_setup_theme', 'browny_setup' );

add_action( 'init', 'create_post_type' );

function create_post_type() {
  register_post_type( 'home-tiles',
    array(
      'labels' => array(
        'name' => __( 'Home-tiles' ),
        'singular_name' => __( 'Home-tile' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'home-about',
    array(
      'labels' => array(
        'name' => __( 'Home-about' ),
        'singular_name' => __( 'Home-about' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'work-tiles',
    array(
      'labels' => array(
        'name' => __( 'Work-tiles' ),
        'singular_name' => __( 'Work-tile' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function browny_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'browny_content_width', 640 );
}
add_action( 'after_setup_theme', 'browny_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function browny_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'browny' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'browny_widgets_init' );

add_action( 'admin_init', 'posts_order_wpse_91866' );

function posts_order_wpse_91866() 
{
    add_post_type_support( 'post', 'page-attributes' );
}

/**
 * Enqueue scripts and styles.
 */
function browny_scripts() {
	wp_enqueue_style( 'browny-style', get_template_directory_uri() . '/css/main.css' );

	wp_enqueue_script( 'browny-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20130115', true );

}
add_action( 'wp_enqueue_scripts', 'browny_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

