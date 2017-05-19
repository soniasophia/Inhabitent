<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


// Custom login logo
function custom_login_logo() {
	echo '<style type="text/css">
		#login h1 a { 
			background-image: url('. get_stylesheet_directory_uri() . '/images/inhabitent-logo-text-dark.svg) !important; 
			height: 120px !important; 
			background-position: center !important; 
			background-size: contain !important; 
			width: 100% !important; 
		}
		</style>';
}
add_action( 'login_head', 'custom_login_logo' );


// Custom login logo url
function custom_login_logo_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'custom_login_logo_url' );


// Custom login logo url title
function login_logo_url_title() {
    return 'Inhabitent Camping Supply Co.';
}
add_filter( 'login_headertitle', 'login_logo_url_title' );