<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

add_action( 'wp_enqueue_scripts', 'drgchild_wp_enqueue_scripts' );
function drgchild_wp_enqueue_scripts() {
	wp_enqueue_style( 'main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'twenty-twenty-one-style' ), //if you have other style's to remember to 1. add to this array with main being the top (priority) and 2. enqueue anything else underneath
		wp_get_theme()->get( 'Version' ) // This only works if you have Version defined in the style header.
	);
	//eg bootstrap
}