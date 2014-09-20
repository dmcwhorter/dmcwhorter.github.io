<?php
function eastjava_customizer_styles(){
	$color = get_theme_mod('eastjava_options_theme_customizer');
	$color = wp_parse_args($color, array(
		
		'eastjava_body_background' => '#222222',
		'eastjava_content_background' => '#F8F8F8',		
		'eastjava_menu_icon' => '#FFFFFF',			
		'eastjava_menu_text' => '#FFFFFF',			
		
		'eastjava_content_name_color' => '#FFFFFF',
		'eastjava_content_description_color' => '#FFFFFF',	
		'eastjava_content_description_link_color' => '#FFFFFF',	
		'eastjava_content_description_link_hover_color' => '#FFFFFF',					
		'eastjava_content_button_color' => '#DDDDDD',
		'eastjava_content_button_hover_color' => '#FFFFFF',	
		'eastjava_content_widget_title_color' => '#FFFFFF',
		'eastjava_content_widget_content_color' => '#FFFFFF',
					
		'eastjava_sidebar_text_color' => '#777777',
		'eastjava_sidebar_link_color' => '#777777',
		'eastjava_sidebar_link_hover_color' => '#CCCCCC',
		'eastjava_sidebar_widget_title_color' => '#CCCCCC',	
		'eastjava_sidebar_widget_list_item_color' => '#777777',								
		'eastjava_sidebar_widget_list_item_hover_color' => '#999999',								
		'eastjava_social_icons' => '#555555',	
		'eastjava_social_icons_hover' => '#999999',		
	));
	
	?>
	<!-- Embedded WP Customizer Code Start-->
	<style>
	
		body,
		#sidebar,
		.pushy
		{background-color: <?php echo $color['eastjava_body_background']; ?>;}
		#content-container 
		{background-color: <?php echo $color['eastjava_content_background']; ?>;}
		#header svg
		{fill: <?php echo $color['eastjava_menu_icon']; ?>;}
		#header .menu-btn .menu-text 	
		{color: <?php echo $color['eastjava_menu_text']; ?>;}
						
		#name
		{color: <?php echo $color['eastjava_content_name_color']; ?>;}				
		#description
		{color: <?php echo $color['eastjava_content_description_color']; ?>;}	
		#description a
		{color: <?php echo $color['eastjava_content_description_link_color']; ?>;
		border-bottom: 1px dotted <?php echo $color['eastjava_content_description_link_color']; ?>;}
		#description a:hover
		{color: <?php echo $color['eastjava_content_description_link_hover_color']; ?>;
		border-bottom: 1px solid <?php echo $color['eastjava_content_description_link_hover_color']; ?>;}							
		#button.menu-btn a
		{color: <?php echo $color['eastjava_content_button_color']; ?>; 
		border-color: <?php echo $color['eastjava_content_button_color']; ?>;}
		#button.menu-btn a:hover
		{color: <?php echo $color['eastjava_content_button_hover_color']; ?>; 
		border-color: <?php echo $color['eastjava_content_button_hover_color']; ?>;}		
		#widget-center-area .widget-center-title 
		{color: <?php echo $color['eastjava_content_widget_title_color']; ?>;}
		#widget-center-area .widget-center 
		{color: <?php echo $color['eastjava_content_widget_content_color']; ?>;}		
						
		#sidebar-inner .icon-inner 
		{fill: <?php echo $color['eastjava_sidebar_background_color']; ?>;}
		#sidebar-inner 
		{color: <?php echo $color['eastjava_sidebar_text_color']; ?>;}
		#sidebar-inner .textwidget a,
		#sidebar-inner .credit a {
		color: <?php echo $color['eastjava_sidebar_link_color']; ?>;}
		#sidebar-inner a:hover,
		#sidebar-inner .text-widget a:hover,
		#sidebar-inner .credit a:hover {
		color: <?php echo $color['eastjava_sidebar_link_hover_color']; ?>;}
		#sidebar-inner .widget-title {
		color: <?php echo $color['eastjava_sidebar_widget_title_color']; ?>;	}
		#sidebar-inner .widget li,
		#sidebar-inner .widget li a {
		color: <?php echo $color['eastjava_sidebar_widget_list_item_color']; ?>;}
		#sidebar-inner .widget li:hover,
		#sidebar-inner .widget li a:hover {
		color: <?php echo $color['eastjava_sidebar_widget_list_item_hover_color']; ?>}
		#sidebar-inner svg.svg-social,
		#sidebar-inner .icon-outer 
		{fill: <?php echo $color['eastjava_social_icons']; ?>;}	
		#sidebar-inner svg.svg-social:hover,
		#sidebar-inner .icon-outer:hover 
		{fill: <?php echo $color['eastjava_social_icons_hover']; ?>;}			
		
		<?php
   		$menualign = get_option('eastjava_menualign'); 
   		if ($menualign=='menualignleft'){echo '';}			
   		else {include ('styles/menu-align-right.css');};
   		?>

	</style>
	<!-- Embedded WP Customizer Code End -->
	<?php
}
