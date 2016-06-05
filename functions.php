<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
define('_URL_IMAGES', get_stylesheet_directory_uri().'/assets/images/');
/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/menu-walkers.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Custum woocommerce */
require_once( 'library/custom-woo-fun.php');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/protocol-relative-theme-assets.php' );
function my_slider() {
    if (is_front_page() || is_home())
    {
        get_template_part( 'template-parts/slider' );

    }
}
add_action('foundationpress_after_header', 'my_slider', 20);
function new_excerpt_length($length) {
 return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');

function textdomain_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'sidebar-1',
			'name' => __( 'filtres-woo', 'textdomain' ),
			'description' => __( 'Filtres woocommerces', 'textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s small-12 medium-4 columns end">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
    register_sidebar(
		array(
			'id' => 'sidebar-2',
			'name' => __( 'filtres-woo-prix', 'textdomain' ),
			'description' => __( 'Filtres woocommerces', 'textdomain' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s small-12 medium-12 columns end">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);

  register_sidebar(
  array(
    'id' => 'sidebar-3',
    'name' => __( 'recherche-woo', 'textdomain' ),
    'description' => __( 'Filtres woocommerces', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s small-12 medium-12 columns end">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
  )
);
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );
//----- >>>>>>>>>>>
//----- >>>>>>>>>>>>>>> ICI ACTION WOOCOMMERCE <<<<<<<<--------------------------
    //remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',  20);
    //do_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt',  5);
