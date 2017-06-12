<?php
/**
 * Bhari Child Theme functions and definitions
 *
 * @link https://codex.wordpress.org/Child_Themes
 *
 * @package Bhari Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'BHARI_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue parent and child theme assets
 */
if( ! function_exists( 'bhari_child_theme_scripts' ) ) :

	function bhari_child_theme_scripts() {

		// Load parent theme CSS.
		wp_enqueue_style( 'bhari-core-css', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'), 'all' );

		// Load child theme CSS.
		wp_enqueue_style( 'bhari-child-css', get_stylesheet_directory_uri() . '/style.css', array( 'bhari-core-css' ), BHARI_CHILD_VERSION, 'all' );
	}

	add_action( 'wp_enqueue_scripts', 'bhari_child_theme_scripts' );

endif;