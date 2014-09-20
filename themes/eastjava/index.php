<?php get_header(); 

if(!isset($themeCustomizer))
{
	$themeCustomizer = get_theme_mod('eastjava_options_theme_customizer');
}
?>

		<div id="centered">

			<?php
			$logo = get_option('eastjava_logo');
    		if ($themeCustomizer['eastjava_options_show_logo']=='yes'){
    		  echo '<div id="logo"><img src="';
              echo $logo;
    		  echo '" alt="';
              echo bloginfo('name');		
              echo '"/></div>';}				
    		else {
    		  echo '';
			};
    		?>

			<?php
    		if ($themeCustomizer['eastjava_options_show_name']=='yes'){
    		  echo '<div id="name"><h1>';
              echo '' .get_theme_mod( 'eastjava_options_theme_customizer_content_name_text', 'East Java' )."\n";
    		  echo '</h1></div>';}				
    		else {
    		  echo '';
			};
    		?>					
								
			<?php
    		if ($themeCustomizer['eastjava_options_show_description']=='yes'){
    		  echo '<div id="description">';
              echo '' .get_theme_mod( 'eastjava_options_theme_customizer_content_description_text', 'Description' )."\n";
    		  echo '</div>';}				
    		else {
    		  echo '';
			};
    		?>

			<?php
    		if ($themeCustomizer['eastjava_options_show_button']=='yes'){
    		  echo '<div id="button" class="menu-btn"><a href="#">';
              echo '' .get_theme_mod( 'eastjava_options_theme_customizer_content_button_text', 'Learn More' )."\n";
    		  echo '</a></div>';}				
    		else {
    		  echo '';
			};
    		?>		

			<div id="widget-center-area">
				<?php dynamic_sidebar('sidebar_center') ?>
			</div><!-- /#widget-center-area -->
			
		</div><!-- /#centered -->

<?php get_footer(); ?>