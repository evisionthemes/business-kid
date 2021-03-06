<?php
/**
 * Business Kid functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package business-kid
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

// default slider
if ( ! function_exists ( 'business_click_default_slider_value' ) ) {
	function business_click_default_slider_value() {
		// displaying these defaults if uncategoried post is not present at first
		$default_feature_slideer_array[]  =  array(
          'business-click-feature-title'    => esc_html__('Your Custom Slider Title', 'business-kid'),
          'business-click-feature-content'  => esc_html__('This is your dummy post. Please select post category or page from Customizer - Homepage / Front Page - Feature Slider Section.', 'business-kid'),
          'business-click-feature-image'    => get_stylesheet_directory_uri() . '/assets/img/slider.jpg',
          'business-click-feature-url'      => '#'
        );
		return $default_feature_slideer_array;
	}
}

if(!function_exists('business_kid_setup') ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function business_kid_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'business-kid', get_stylesheet_directory() . '/languages' );
	}

endif;

add_action( 'after_setup_theme', 'business_kid_setup' );

/**
	* default page
	* @package business-click
*/
if(!function_exists('business_click_defauts_value') ) :

/**
 * Get default theme options.
 *
 * @since 1.0.0
 *
 * @return array Default theme options.
 */
	function business_click_defauts_value(){

		$defaults = array();

		//top bar
		$defaults['business-click-enbale-top-bar-header']  				= 1;
		$defaults['business-click-top-bar-phone']          				= esc_html__('+(123)-456789','business-kid');
		$defaults['bussiness-click-top-bar-email']         				= esc_html__('evisionthemes@gmail.com','business-kid');
		$defaults['bussiness-click-top-bar-location']      				= esc_html__('Kathmandu, Nepal','business-kid');
		$defaults['bussiness-click-top-bar-social-menu']   				= '';

		// header Section
		$defaults['business-click-enable-extra-button']					= 1;
		$defaults['business-click-text-extra-button-text']				= esc_html__('More Demos','business-kid');
		$defaults['business-click-link-extra-button']					= esc_url('https://demo.evisionthemes.com/business-click/multipage/');
		$defaults['business-click-enable-transparent-header']		    = 0;//business-kid


		// color Section
		$defaults['business-click-site-identity-color'] 				= '#313131';
		$defaults['business-click-top-header-background-bar-color'] 	= '#000000';
		$defaults['business-click-menu-header-background-color'] 		= '#FFFFFF';
		$defaults['business-click-business-clcik-h1-h6'] 				= '#000000';
		$defaults['business-click-footer-background-color'] 			= '#1F1F1F';
		$defaults['business-click-color-reset'] 						= '';

		//font Section
		$defaults['business-click-font-family-site-identity'] 			= 'Catamaran:400,600,700';
		$defaults['business-click-font-family-menu'] 					= 'Catamaran:400,600,700';
		$defaults['business-click-font-family-h1-h6'] 					= 'Catamaran:400,600,700';
		$defaults['business-click-font-family-title-size'] 				= 30;
		$defaults['business-click-font-family-content-size'] 			= 16;
		$defaults['business-click-font-family-body-p'] 					= 'Open+Sans:400,400italic,600,700';
		$defaults['business-click-font-family-button-text'] 			= 'Open+Sans:400,400italic,600,700';
		$defaults['business-click-footer-copy-right-text'] 				= 'Open+Sans:400,400italic,600,700';


		// slider Section
		$defaults['business-click-enbale-slider']						= 1;
		$defaults['business-click-excerpt-length']						= 30;
		$defaults['business-click-select-post-form']					='form-category';
		$defaults['business-click-select-from-cat']						= -1;
		$defaults['business-click-select-from-page']					= 0;
		$defaults['business-click-slider-enable-blog']					= 0;
		$defaults['business-click-slider-button-text']					= esc_html__('Learn more','business-kid');

		//feature section
		$defaults['business-click-feature-enable']  					= 1;
		$defaults['business-click-feature-section-title']  				= esc_html__('','business-kid');//business-kid
		$defaults['business-click-feature-excerpt-length']  			= 30;;
		$defaults['business-click-feature-select-form']  				= 'form-category';
		$defaults['business-click-feature-from-category']  				= -1;
		$defaults['business-click-feature-from-page']  					= 0;
		$defaults['business-click-feature-page-icon']  					= '';
		$defaults['business-click-feature-button-text']  				= '';
		$defaults['business-click-feature-background-image']  			= '';

		//CTA
		$defaults['business-click-enable-call-to-action'] 				= 1;
		$defaults['business-click-call-excerpt-length'] 				= 30;
		$defaults['business-click-call-to-action-select-from-page'] 	= 0;
		$defaults['business-click-button-text'] 						= esc_html__('Learn more','business-kid');

		// about us section
		$defaults['business-click-enable-about-us'] 					= 1;
		$defaults['business-clcik-excerpt-length'] 						= 30;
		$defaults['business-click-about-us-select-page'] 				= 0;
		$defaults['business-click-about-us-button-text'] 				= esc_html__('Details','business-kid');
		$defaults['business-click-about-us-background-image'] 			= '';

		//testimonial
		$defaults['business-click-testimonila-enable']					= 1;
		$defaults['business-click-testimonial-section-title']			= esc_html__('Testimonial','business-kid');
		$defaults['business-click-testimonial-excerpt-length']			= 30;
		$defaults['business-click-testimonial-select-form']				= 'form-category';
		$defaults['business-click-testimonial-from-category']			= -1;
		$defaults['business-click-testimonial-select-for-page']			= 0;
		$defaults['business-click-testimonial-designation']				= '';
		$defaults['business-click-testimonial-background-image']		= '';

		//blog Section
		$defaults['business-click-blog-section-enable'] 				= 1;
		$defaults['business-click-blog-section-title-text'] 			= esc_html__('Blog','business-kid');
		$defaults['business-click-blog-excerpt-length'] 				= 30;
		$defaults['business-click-blog-select-category'] 				= -1;
		$defaults['business-click-blog-button-text'] 					= esc_html__('Read More','business-kid');
		$defaults['business-click-blog-background-image'] 				= '';

		//Contact us Section
		$defaults['business-click-contact-section-enable'] 				= 1;
		$defaults['business-click-contact-section-title'] 				= '';
		$defaults['business-click-contact-section-short-code'] 			= '';
		$defaults['business-click-contact-background-image'] 			= '';

		//layout options
		$defaults['business-click-enable-static-page'] 					= 0;
		$defaults['business-click-default-layout']     					= esc_html('no-sidebar','business-kid');
		$defaults['business-click-single-post-image-align'] 			= 'full';
		$defaults['business-click-archive-image-align']     			= 'full';
		$defaults['business-click-archive-layout'] 						= 'thumbnail-and-excerpt';
		$defaults['business-click-number-of-words'] 					= 40;
		$defaults['business-click-conatiner-width-layout'] 				= 1140;

		// back to top options
		$defaults['business-click-enable-back-to-top'] 					= 1;

		//breadcrumb
		$defaults['business-click-enable-breadcrumb']					= 1;

		//footer section
		$defaults['business-click-copyright-text']						= esc_html__( 'Copyright &copy; All right reserved.', 'business-kid' );
		$defaults['business-click-enable-scroll-to-top']				= 1;


		$defaults = apply_filters('business_click_get_all_options',$defaults);
		return $defaults;
	}
endif; 