<div id="header">
	
	<div class="menu-btn">
		
		<span class="menu-icon">
			
			<script type="text/javascript" language="javascript">
			
			/* Andoid Device Detection - if Android use PNG icon else use SVG icon */
			if( /Android/i.test(navigator.userAgent) ) {

			 document.write("<img src='<?php echo get_template_directory_uri(); ?>/img/menu.png' alt='menu' />");
			}
			else
			{
				document.write('<svg height="20px" style="enable-background:new 0 0 16 10;" version="1.1" viewBox="0 0 16 10" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M15.5,0h-15C0.224,0,0,0.224,0,0.5v1C0,1.776,0.224,2,0.5,2h15   C15.776,2,16,1.776,16,1.5v-1C16,0.224,15.776,0,15.5,0z" style="fill-rule:evenodd;clip-rule:evenodd;"/><path d="M15.5,4h-15C0.224,4,0,4.224,0,4.5v1C0,5.776,0.224,6,0.5,6h15   C15.776,6,16,5.776,16,5.5v-1C16,4.224,15.776,4,15.5,4z" style="fill-rule:evenodd;clip-rule:evenodd;"/><path d="M15.5,8h-15C0.224,8,0,8.224,0,8.5v1C0,9.776,0.224,10,0.5,10h15   c0.276,0,0.5-0.224,0.5-0.5v-1C16,8.224,15.776,8,15.5,8z" style="fill-rule:evenodd;clip-rule:evenodd;"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>');
			}
			</script>
	
	    </span><!-- /menu-icon --> 	
	
		<span class="menu-text">
			
				<?php
	    		if ($themeCustomizer['eastjava_options_show_menuicon']=='yes'){
	              echo '' .get_theme_mod( 'eastjava_options_theme_customizer_content_menu_text', 'Menu' )."\n";}		
	    		else {
	    		  echo '';
				};
	    		?>
			
		</span><!-- /menu-text --> 		
		
	</div><!-- /.menu-btn -->
	    
</div><!-- /#header -->