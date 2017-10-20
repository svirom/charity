<?php
/* Custom functions code goes here. */

function my_child_theme_setup() {
	load_child_theme_textdomain( 'Impreza-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_child_theme_setup' );

// Breadcrumbs function
require get_stylesheet_directory() . '/framework/functions/breadcrumbs.php';


