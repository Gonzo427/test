<?php
// Start the engine 

add_action( 'genesis_setup','genesischild_theme_setup' );
function genesischild_theme_setup() {

add_theme_support( 'html5' );
add_theme_support( 'genesis-responsive-viewport' );
add_theme_support( 'genesis-footer-widgets', 3 );
//Add support for custom background
add_theme_support( 'custom-background' );

}

//Add wraps
//add_theme_support( 'genesis-structural-wraps', array('header','nav','subnav','site-inner','footer-widgets','footer') );

add_action( 'wp_enqueue_scripts', 'custom_load_custom_style_sheet' );
function custom_load_custom_style_sheet() {
	wp_enqueue_style( 'custom-stylesheet', CHILD_URL . '/custom.css', array(), PARENT_THEME_VERSION );
}

//* Customize the return to top of page text
add_filter( 'genesis_footer_backtotop_text', 'sp_footer_backtotop_text' );
function sp_footer_backtotop_text($backtotop) {
	$backtotop = '[footer_backtotop text="Return to Top"]';
	return $backtotop;
}
//* Change the footer text
add_filter('genesis_footer_creds_text', 'sp_footer_creds_filter');
function sp_footer_creds_filter( $creds ) {
	$creds = '[footer_copyright] &middot; <a href="http://mydomain.com">My Custom Link</a> &middot; ';
	return $creds;
}