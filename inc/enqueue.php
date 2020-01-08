<?php
/**
 * Enqueue Functions
 *
 * @link https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 *
 * @package Starter_Theme
 */

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
	$env = 'development';

	$style = ( 'development' === $env ) ? 'style.css' : 'style.min.css';
	$script  = ( 'development' === $env ) ? 'app.js' : 'app.min.js';

	wp_enqueue_style( 'starter-theme-style', get_template_directory_uri() . "/dist/css/{$style}" );

	wp_enqueue_script( 'starter-theme-scripts', get_template_directory_uri() . "/dist/js/{$script}", array(), '20151215', true );
	
	// wp_enqueue_script( 'starter-theme-skip-link-focus-fix', get_template_directory_uri() . '/dist/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );
