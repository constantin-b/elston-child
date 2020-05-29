<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function elston_enqueue_child_theme_styles() {
	wp_enqueue_style( 'elston-child-style', get_stylesheet_uri(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'elston_enqueue_child_theme_styles', 11 );