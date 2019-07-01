<?php 

add_theme_support('title-tag');

/**
 * Enqueue scripts and styles.
 */
function playground_assets() {
  // Enqueue main style sheet
  wp_enqueue_style( 'playground_theme_styles', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
  // Enqueue reset style sheet
  wp_enqueue_style( 'playground_theme_styles-reset', get_template_directory_uri() . '/reset.css' );
  // Enqueue title font family 
  wp_enqueue_style( 'playground_theme_styles-fonts', '//fonts.googleapis.com/css?family=Open+Sans&display=swap' );
}


add_action( 'wp_enqueue_scripts', 'playground_assets' );
?>

