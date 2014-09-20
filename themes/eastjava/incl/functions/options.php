<div class="wrap">

    <h2>East Java Theme Options</h2>
    <?php
    if (@$_POST['action'] == 'save') {
    ?>
    <div style="border-radius: 2px; height: 20px; width: 360px; background-color: #d8fcc4; text-align:center; padding:5px;">
    Bravo! Theme options updated.
    </div>
    <?php } ?>

    <form method="POST" action="">
        <input type="hidden" name="update_themeoptions" value="true" />

        <p>Simply fill out as much as you can below, hit 'Update Options' at the bottom and you are styling!</p>
        <p>Problems? Visit the <a href="http://onepagelove.com/themes/eastjava-documentation" target="_blank" title="See East Java Documentation">East Java Documentation</a> online.</p>
        <p>Also don't forget to read our <a href="<?php echo site_url(); ?>/wp-admin/themes.php?page=recommendations" title="See East Java Recommendations">East Java Recommendations</a> to optimize your site.</p>
        <br />

		<h3>Image Options</h3> 
		
		<p><a href="<?php print get_home_url(); ?>/wp-admin/media-new.php" target="_blank">Launch media uploader</a></p>

        <h4>Logo</h4>
        <p><i>Use full image URL</i></p>
        <p><input type="text" name="logo" id="logo" size="50" value="<?php echo get_option('eastjava_logo'); ?>" /></p>
        <br />

        <h4>Background Image</h4>
        <p><i>Use full image URL, recommended landscape orientation</i></p>
        <p><input type="text" name="background" id="background" size="50" value="<?php echo get_option('eastjava_background'); ?>" /></p>
        <br />

        <h4>Favicon</h4>
        <p><i>Use full image URL, recommended 32px x 32px</i></p>
        <p><input type="text" name="favicon" id="favicon" size="50" value="<?php echo get_option('eastjava_favicon'); ?>" /></p>
        <br />

		<br /><br />

		<?php /*?><h3>Display Options</h3>

		<?php
		//Get scheme
		$hidelogo = get_option('eastjava_hidelogo');
		$hidename = get_option('eastjava_hidename');
		$hidedescription = get_option('eastjava_hidedescription');		
		$hidebutton = get_option('eastjava_hidebutton');	
		$hidemenutext = get_option('eastjava_hidemenutext');			
		$hidecredit = get_option('eastjava_hidecredit');				
		?>
		<h4>Logo:</h4>
		<p>
		  <input type="radio" name="hidelogo" value="hidelogoyes" <?php if ($hidelogo =='hidelogoyes' || $hidelogo == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidelogo" value="hidelogono" <?php if ($hidelogo =='hidelogono') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>
		<h4>Name:</h4>
		<p>
		  <input type="radio" name="hidename" value="hidenameyes" <?php if ($hidename =='hidenameyes' || $hidename == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidename" value="hidenameno" <?php if ($hidename =='hidenameno') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>						
		<h4>Description:</h4>
		<p>
		  <input type="radio" name="hidedescription" value="hidedescriptionyes" <?php if ($hidedescription =='hidedescriptionyes' || $hidedescription == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidedescription" value="hidedescriptionno" <?php if ($hidedescription =='hidedescriptionno') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>
		<h4>Button:</h4>
		<p>
		  <input type="radio" name="hidebutton" value="hidebuttonyes" <?php if ($hidebutton =='hidebuttonyes' || $hidebutton == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidebutton" value="hidebuttonno" <?php if ($hidebutton =='hidebuttonno') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>	
		<h4>Menu Text - to the right of &#9776; icon:</h4>
		<p>
		  <input type="radio" name="hidemenutext" value="hidemenutextyes" <?php if ($hidemenutext =='hidemenutextyes' || $hidemenutext == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidemenutext" value="hidemenutextno" <?php if ($hidemenutext =='hidemenutextno') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>				
		<h4>One Page Love Theme Credit:</h4>
		<p>
		  <input type="radio" name="hidecredit" value="hidecredityes" <?php if ($hidecredit =='hidecredityes' || $hidecredit == "") {?> checked="checked" <?php }?> style="margin-right: 5px;"> Hide
		  <input type="radio" name="hidecredit" value="hidecreditno" <?php if ($hidecredit =='hidecreditno') { ?> checked="checked" <?php  } ?> style="margin-left: 10px;"> Show
		</p>					

		<br /><br /><?php */?>

      	<h3>Social Networks</h3>

   		<p><i>Please note you must input usernames only. So only 'onepagelove' and not 'http://twitter.com/onepagelove'</i></p>

   		<p><b>Twitter Username</b><br />
   		<input type="text" name="twitter" id="twitter" size="22" value="<?php echo get_option('eastjava_twitter'); ?>" /></p>

   		<p><b>Facebook Username</b><br />
   		<input type="text" name="facebook" id="facebook" size="22" value="<?php echo get_option('eastjava_facebook'); ?>" /></p>

   		<p><b>Instagram Username</b><br />
   		<input type="text" name="instagram" id="instagram" size="22" value="<?php echo get_option('eastjava_instagram'); ?>" /></p>        		

   		<p><b>Pinterest Username</b><br />
   		<input type="text" name="pinterest" id="pinterest" size="22" value="<?php echo get_option('eastjava_pinterest'); ?>" /></p>

   		<p><b>Google+ Username</b><br />
   		<input type="text" name="googleplus" id="googleplus" size="22" value="<?php echo get_option('eastjava_googleplus'); ?>" /><br />
   		Use the numbers in bold only in your G+ address: https://plus.google.com/u/0/<strong>104344316072678145641</strong>/posts</p>

   		<p><b>Dribbble Username</b><br />
   		<input type="text" name="dribbble" id="dribbble" size="22" value="<?php echo get_option('eastjava_dribbble'); ?>" /></p>        		

   		<p><b>Tumblr Username</b><br />
   		<input type="text" name="tumblr" id="tumblr" size="22" value="<?php echo get_option('eastjava_tumblr'); ?>" /></p>

   		<p><b>YouTube Username</b><br />
   		<input type="text" name="youtube" id="youtube" size="22" value="<?php echo get_option('eastjava_youtube'); ?>" /></p>

   		<p><b>Vimeo Username</b><br />
   		<input type="text" name="vimeo" id="vimeo" size="22" value="<?php echo get_option('eastjava_vimeo'); ?>" /></p>   

   		<p><b>LinkedIn Username</b><br />
   		<input type="text" name="linkedin" id="linkedin" size="22" value="<?php echo get_option('eastjava_linkedin'); ?>" /></p>    

   		<p><b>Behance Username</b><br />
   		<input type="text" name="behance" id="behance" size="22" value="<?php echo get_option('eastjava_behance'); ?>" /></p>        		    		     		

   		<p><b>Flickr Username</b><br />
   		<input type="text" name="flickr" id="flickr" size="22" value="<?php echo get_option('eastjava_flickr'); ?>" /></p>

   		<p><b>Soundcloud Username</b><br />
   		<input type="text" name="soundcloud" id="soundcloud" size="22" value="<?php echo get_option('eastjava_soundcloud'); ?>" /></p>

   		<p><b>last.fm Username</b><br />
   		<input type="text" name="last_fm" id="last_fm" size="22" value="<?php echo get_option('eastjava_last_fm'); ?>" /></p>

   		<p><b>Email Address</b><br />
   		<input type="text" name="email" id="email" size="22" value="<?php echo get_option('eastjava_email'); ?>" />	<br />
	   		example: john@yourdomain.com</p><br /><br />

    <input type="hidden" name="action" value="save" />
    <p><input type="submit" name="search" value="Update Options" class="button" /></p>
  </form>

 </div> <!-- #wrap -->

