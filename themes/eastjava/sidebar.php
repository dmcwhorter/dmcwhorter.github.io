	<div id="sidebar">		
		
		<div id="sidebar-inner">
			
			<?php 
			if(!isset($themeCustomizer))
			{
				$themeCustomizer = get_theme_mod('eastjava_options_theme_customizer');
			}
			dynamic_sidebar('sidebar_sidebar') ?>
			
			<div class="social">
				
				<?php include("incl/social-icons.php"); ?>
				
			</div><!-- /.social -->			
			
					<?php
		    		if ($themeCustomizer['eastjava_options_show_credit']=='yes'){
		    		  echo '<div class="credit"><a href="http://onepagelove.com/themes/eastjava" target="_blank">East Java Theme</a> by <a href="http://onepagelove.com" target="_blank">One Page Love</a></div>';
					}		
		    		else {
		    		  echo '';
					};
		    		?>
		
		</div><!-- /#sidebar-inner -->
		
	</div><!-- /#sidebar -->