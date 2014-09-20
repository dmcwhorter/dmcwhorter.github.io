<?php
function eastjava_register_sidebars(){
	
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar_sidebar',		
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<span class="widget-title">',
		'after_title' => '</span>',
	));
	
	register_sidebar(array(
		'name' => 'Under Logo',
		'id' => 'sidebar_center',		
		'before_widget' => '<div class="widget-center">',
		'after_widget' => '</div>',
		'before_title' => '<span class="widget-center-title">',
		'after_title' => '</span>',
	));	
	
}