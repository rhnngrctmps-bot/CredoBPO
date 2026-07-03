<?php
/**
 * Credo BPO Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CREDOBPO_VERSION', '1.0.0' );
define( 'CREDOBPO_DIR', get_template_directory() );
define( 'CREDOBPO_URI', get_template_directory_uri() );

/**
 * Theme setup
 */
function credobpo_setup() {
	load_theme_textdomain( 'credobpo', CREDOBPO_DIR . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 60,
		'width'       => 220,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	set_post_thumbnail_size( 1200, 675, true );
	add_image_size( 'credobpo-card', 640, 420, true );
	add_image_size( 'credobpo-hero', 900, 900, false );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'credobpo' ),
		'footer'  => __( 'Footer Menu', 'credobpo' ),
	) );
}
add_action( 'after_setup_theme', 'credobpo_setup' );

/**
 * Widget areas
 */
function credobpo_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'credobpo' ),
		'id'            => 'sidebar-blog',
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	for ( $i = 1; $i <= 4; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Footer Column %d', 'credobpo' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}
}
add_action( 'widgets_init', 'credobpo_widgets_init' );

/**
 * Enqueue styles and scripts
 */
function credobpo_scripts() {
	wp_enqueue_style( 'credobpo-fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'credobpo-style', get_stylesheet_uri(), array(), CREDOBPO_VERSION );

	wp_enqueue_script( 'credobpo-main', CREDOBPO_URI . '/assets/js/main.js', array(), CREDOBPO_VERSION, true );

	wp_enqueue_script( 'credobpo-calculator', CREDOBPO_URI . '/assets/js/calculator.js', array(), CREDOBPO_VERSION, true );
	wp_localize_script( 'credobpo-calculator', 'credobpoCalcData', credobpo_get_calculator_config() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'credobpo_scripts' );

/**
 * Inline CSS custom properties driven by the Customizer color setting
 */
function credobpo_custom_colors_css() {
	$primary = get_theme_mod( 'credobpo_primary_color', '#004ea8' );
	echo '<style id="credobpo-custom-colors">:root{--color-primary:' . esc_html( $primary ) . ';}</style>' . "\n";
}
add_action( 'wp_head', 'credobpo_custom_colors_css' );

/**
 * Customizer: primary brand color
 */
function credobpo_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'credobpo_colors', array(
		'title'    => __( 'Theme Colors', 'credobpo' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'credobpo_primary_color', array(
		'default'           => '#004ea8',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'credobpo_primary_color_control', array(
		'label'    => __( 'Primary Color', 'credobpo' ),
		'section'  => 'credobpo_colors',
		'settings' => 'credobpo_primary_color',
	) ) );
}
add_action( 'customize_register', 'credobpo_customize_register' );

/**
 * Excerpt tuning
 */
function credobpo_excerpt_length( $length ) {
	return 24;
}
add_filter( 'excerpt_length', 'credobpo_excerpt_length' );

function credobpo_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'credobpo_excerpt_more' );

/**
 * Body classes
 */
function credobpo_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'is-listing';
	}
	return $classes;
}
add_filter( 'body_class', 'credobpo_body_classes' );

/**
 * Required includes
 */
require CREDOBPO_DIR . '/inc/calculator-data.php';
require CREDOBPO_DIR . '/inc/services-data.php';
require CREDOBPO_DIR . '/inc/contact-form.php';
require CREDOBPO_DIR . '/inc/template-tags.php';
