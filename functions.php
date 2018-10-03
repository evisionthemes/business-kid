<?php
/**
 *Recommended way to include parent theme styles.
 *(Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 */  


  add_action( 'wp_enqueue_scripts', 'business_kid_style' );
  function business_kid_style() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/frameworks/bootstrap/bootstrap.css' );

	wp_enqueue_style( 'business-click-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'business-kid-style',get_stylesheet_directory_uri() . '/style.css',array('business-click-style'));
}

// theme name
if ( ! function_exists ( 'business_click_theme_name' ) ) {
	function business_click_theme_name() {
		return esc_html__('Business Kid','business-kid');
	}
}

