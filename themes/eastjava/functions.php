<?php

// East Java functions.php index:

// 00. Defining 
// 01. Enable Widgets
// 02. Theme Recommendations & Options
// 03. Theme Customizer
// 04. Enqueue Scripts and Styles
// 05. Your Custom Code
// 06. Theme Version Update Notifications

// -------------------------------------------------------------
// 00. Defining
// -------------------------------------------------------------

	// Theme Version
	define( 'EASTJAVA_THEME_VERSION' , '1.1.11' );

	// Content Width
	global $content_width;
		if ( ! isset( $content_width ) ) $content_width = 1440;

 // -------------------------------------------------------------
 // 01. Enable Widgets
 // -------------------------------------------------------------

	add_action('widgets_init', 'eastjava_register_sidebars');
  		include get_template_directory().'/incl/functions/widgets.php';

// -------------------------------------------------------------
// 02. Theme Recommendations & Options
// -------------------------------------------------------------

  	add_action('admin_menu', 'eastjava_options_menu');

  	/*adding recommendation page on theme*/
  	add_action('admin_menu', 'eastjava_recommendations_menu');
  	function eastjava_options_menu() {
  		add_theme_page("East Java Options", "Theme Options", 'edit_themes', basename(__FILE__), 'eastjava_options_page');
  	}
  	function eastjava_recommendations_menu() {
		add_theme_page("Recommendations", "Recommendations", 'read', 'recommendations', 'eastjava_recommendations_page');
  	}
  	function eastjava_recommendations_page() {
		include get_template_directory().'/incl/functions/recommendations.php';
  	}
  	function eastjava_options_page() {
   		if (@$_POST['update_themeoptions'] == 'true' ) {eastjava_themeoptions_update();}
 		include get_template_directory().'/incl/functions/options.php';
  	} 
  	function eastjava_themeoptions_update() {
		update_option('eastjava_logo', $_POST['logo']);
		update_option('eastjava_background', $_POST['background']);
		update_option('eastjava_favicon', $_POST['favicon']);
		update_option('eastjava_hidelogo', $_POST['hidelogo']);
		update_option('eastjava_hidename', $_POST['hidename']);
		update_option('eastjava_hidedescription', $_POST['hidedescription']);
		update_option('eastjava_hidebutton', $_POST['hidebutton']);
		update_option('eastjava_hidemenutext', $_POST['hidemenutext']);		
		update_option('eastjava_hidecredit', $_POST['hidecredit']);
		update_option('eastjava_twitter', $_POST['twitter']);
		update_option('eastjava_facebook', $_POST['facebook']);
		update_option('eastjava_instagram', $_POST['instagram']);	
		update_option('eastjava_pinterest', $_POST['pinterest']);	
		update_option('eastjava_googleplus', $_POST['googleplus']);	
		update_option('eastjava_dribbble', $_POST['dribbble']);
		update_option('eastjava_tumblr', $_POST['tumblr']);	
		update_option('eastjava_youtube', $_POST['youtube']);
		update_option('eastjava_vimeo', $_POST['vimeo']);	
		update_option('eastjava_linkedin', $_POST['linkedin']);
		update_option('eastjava_behance', $_POST['behance']);
		update_option('eastjava_flickr', $_POST['flickr']);
		update_option('eastjava_soundcloud', $_POST['soundcloud']);
		update_option('eastjava_last_fm', $_POST['last_fm']);
		update_option('eastjava_email', $_POST['email']);				
  	}
 
// -------------------------------------------------------------
// 03. Theme Customizer
// ------------------------------------------------------------- 

	include get_template_directory().'/incl/functions/theme-customizer.php';
 
// -------------------------------------------------------------
// 04. Enqueue Scripts and Styles
// -------------------------------------------------------------

	add_action('wp_enqueue_scripts', 'eastjava_enqueue_scripts');

	function eastjava_enqueue_scripts(){	
		
	// East Java Stylesheet	
	wp_enqueue_style( 'eastjava', get_stylesheet_uri(), array(), EASTJAVA_THEME_VERSION );
	
	// East Java Media Queries	
    wp_enqueue_style('eastjava-mediaqueries', get_template_directory_uri().'/styles/mediaqueries.css', array(), EASTJAVA_THEME_VERSION );
	
	// East Java Google Fonts
	wp_enqueue_style('google-webfonts-nc', 'http://fonts.googleapis.com/css?family=Lato:100,300,400');
	wp_enqueue_style('google-webfonts-mw', 'http://fonts.googleapis.com/css?family=Montserrat:400');

	// Load Up Google Hosted jQuery	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	
	// Modernizr
	wp_enqueue_script('eastjava-modernizr', get_template_directory_uri().'/js/modernizr.custom.71422.js');		
			
	// Pushy Sidebar Scripts	
	wp_enqueue_script('eastjava-pushy', get_template_directory_uri().'/js/pushy.min.js');		
	
	// Responsive Videos
	wp_enqueue_script('fitvids', get_template_directory_uri().'/js/jquery.fitvids.js');
	wp_enqueue_script('eastjava-fitvids', get_template_directory_uri().'/js/eastjava-fitvids.js');	
	
	// Custom scripts	
	wp_enqueue_script('eastjava-custom-code', get_template_directory_uri().'/js/eastjava-custom-code.js');	
	
	// Add your scripts below
	
	// Add your scripts above
	}

	// Favicon
	add_action('wp_head', 'eastjava_favicon');

	function eastjava_favicon() {
		$favicon = get_option('eastjava_favicon');
		if ($favicon != '') {
        ?><link rel="shortcut icon" href="<?php echo $favicon; ?>" /><?php
		}
	}

	// Customizer Styles
	add_action('wp_head', 'eastjava_customizer_styles');
	include get_template_directory().'/incl/functions/theme-customizer-styles.php';

// -------------------------------------------------------------
// 05. Your Custom Code
// -------------------------------------------------------------

/* Add you code below this line */


/* End your code above this line */

// -------------------------------------------------------------
// 06. Theme Version Update Notifications
// -------------------------------------------------------------

	require_once('wp-updates-theme.php');
	new WPUpdatesThemeUpdater_572( 'http://wp-updates.com/api/2/theme', basename( get_stylesheet_directory() ) );

?>