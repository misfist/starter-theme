<?php
/**
 * Gutenberg Functions
 *
 * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/
 *
 * @package Starter_Theme
 */

function starter_theme_block_editor_setup() {
    // Lots of other code …

    // Enqueue editor styles.
	add_editor_style( 'dist/css/style-editor.css' );

	// Blocks styles
	add_theme_support( 'wp-block-styles' );

	// Wide Width
	add_theme_support( 'align-wide' );
	
	// Add Color Palette Colors
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Primary', 'starter-theme' ),
				'slug'  => 'primary',
				'color' => '',
			),
			array(
				'name'  => __( 'Secondary', 'starter-theme' ),
				'slug'  => 'secondary',
				'color' => '',
			),
			array(
				'name'  => __( 'Dark Gray', 'starter-theme' ),
				'slug'  => 'dark-gray',
				'color' => '#111',
			),
			array(
				'name'  => __( 'Light Gray', 'starter-theme' ),
				'slug'  => 'light-gray',
				'color' => '#767676',
			),
			array(
				'name'  => __( 'White', 'starter-theme' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
		)
	);

	// Disable Custom Color Picker
	add_theme_support( 'disable-custom-colors' );

	// Font Sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name' => __( 'Small', 'starter-theme' ),
			'size' => 12,
			'slug' => 'small'
		),
		array(
			'name' => __( 'Regular', 'starter-theme' ),
			'size' => 16,
			'slug' => 'regular'
		),
		array(
			'name' => __( 'Large', 'starter-theme' ),
			'size' => 24,
			'slug' => 'large'
		),
		array(
			'name' => __( 'Extra Larg', 'starter-theme' ),
			'size' => 36,
			'slug' => 'xlarge'
		),
		array(
			'name' => __( 'Huge', 'starter-theme' ),
			'size' => 50,
			'slug' => 'huge'
		)
	) );

	// Disable Custom Font Sizes
	add_theme_support( 'disable-custom-font-sizes' );

	// Editor Styles
	add_theme_support( 'editor-styles' );
	
}
add_action( 'after_setup_theme', 'starter_theme_block_editor_setup' );