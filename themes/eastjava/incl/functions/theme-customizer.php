<?php

add_action( 'customize_register', 'eastjava_options_theme_customizer_register' );
function eastjava_options_theme_customizer_register(WP_Customize_Manager $wp_customize) {

// Deregister some sections 	
$wp_customize->remove_section( 'static_front_page');
	
    /* Register custom sections for the theme customizer */
	$wp_customize->add_section( 'eastjava_options_theme_customizer_display', array(
		'title' => __( 'Display Options', 'eastjava_options_theme_customizer' ),
		'priority' => 100
	));
	$wp_customize->add_section( 'eastjava_options_theme_customizer_content', array(
		'title' => __( 'Content Wording', 'eastjava_options_theme_customizer' ),
		'priority' => 200
	));
	$wp_customize->add_section( 'eastjava_options_theme_customizer_appearance', array(
		'title' => __( 'Global Styles', 'eastjava_options_theme_customizer' ),
		'priority' => 300
	));
	$wp_customize->add_section( 'eastjava_options_theme_customizer_content_styles', array(
		'title' => __( 'Content Styles', 'eastjava_options_theme_customizer' ),
		'priority' => 400
	));	
	$wp_customize->add_section( 'eastjava_options_theme_customizer_sidebar', array(
		'title' => __( 'Sidebar Styles', 'eastjava_options_theme_customizer' ),
		'priority' => 500
	));	
	
	/* --------------------------- */		
	/* Display Options */	
	/* --------------------------- */	

	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_logo]', array(
		'default' => 'yes'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_logo',
	    array(
	        'label'          => __( 'Logo', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_logo]',
	        'type'           => 'radio',
	        'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
			'priority'       => 1,		
	)));
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_name]', array(
		'default' => 'yes'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_name',
	    array(
	        'label'          => __( 'Name', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_name]',
	        'type'           => 'radio',
	        'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
			'priority'       => 2,
	)));	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_description]', array(
		'default' => 'yes'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_description',
	    array(
	        'label'          => __( 'Description', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_description]',
	        'type'           => 'radio',
			'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
			'priority'       => 3,
    )));
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_button]', array(
		'default' => 'yes'
	) );
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_button',
	    array(
	        'label'          => __( 'Button', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_button]',
	        'type'           => 'radio',
			'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
		    'priority'       => 4,
	)));
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_menuicon]', array(
		'default' => 'yes'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_menuicon',
	    array(
	        'label'          => __( 'Menu Text - to the right of ☰ icon', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_menuicon]',
	        'type'           => 'radio',
			'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
			'priority'       => 5,
	)));
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_options_show_credit]', array(
		'default' => 'yes'
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize,'eastjava_options_theme_customizer_show_credit',
	    array(
	        'label'          => __( 'OPL Theme Credit', 'eastjava' ),
	        'section'        => 'eastjava_options_theme_customizer_display',
	        'settings'       => 'eastjava_options_theme_customizer[eastjava_options_show_credit]',
	        'type'           => 'radio',
			'choices'        => array('yes' => __( 'Show' ),'no' => __( 'Hide' )),
			'priority'       => 6,
	)));

	
	/* --------------------------- */		
	/* Content Wording */	
	/* --------------------------- */	

	/* Name */	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer_content_name_text', array(
	    'default'  => 'East Java',
	) );
	$wp_customize->add_control( 'eastjava_options_theme_customizer_content_name_text', array(
	    'label'    => 'Name',
		'section'  => 'eastjava_options_theme_customizer_content',
	    'type'     => 'text',
		'priority' => 1,	
	) );	

	/* Description */	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer_content_description_text', array(
	    'default'        => 'Description',
	) );
	$wp_customize->add_control( 'eastjava_options_theme_customizer_content_description_text', array(
	    'label'    => 'Description',
		'section'  => 'eastjava_options_theme_customizer_content',
	    'type'     => 'text',
		'priority' => 2,	
	) );

	/* Button */	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer_content_button_text', array(
	    'default'  => 'Learn More',
	) );
	$wp_customize->add_control( 'eastjava_options_theme_customizer_content_button_text', array(
	    'label'    => 'Button Text',
		'section'  => 'eastjava_options_theme_customizer_content',
	    'type'     => 'text',
		'priority' => 3,	
	) );

	/* Menu Text */	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer_content_menu_text', array(
	    'default'  => 'Menu',
	) );
	$wp_customize->add_control( 'eastjava_options_theme_customizer_content_menu_text', array(
	    'label'    => 'Menu Text',
		'section'  => 'eastjava_options_theme_customizer_content',
	    'type'     => 'text',
		'priority' => 4,	
	) );	
	
	/* --------------------------- */		
	/* Global Styles */	
	/* --------------------------- */		
	
	/* Body & Sidebar Background Color */	
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_body_background]', array(
		'default'  => '#222222'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_body_background', array(
		'label'    => __( 'Body & Sidebar Background', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_appearance',
		'settings' => 'eastjava_options_theme_customizer[eastjava_body_background]',
		'priority' => 1,
	) ) );
	
	/* Big Image Background */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_background]', array(
		'default'  => '#F8F8F8'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_content_background', array(
		'label'    => __( 'Big Image Background', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_appearance',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_background]',
		'priority' => 2,
	) ) );	
	
	/* Menu Icon Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_menu_icon]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_menu_icon', array(
		'label'    => __( 'Menu Icon Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_appearance',
		'settings' => 'eastjava_options_theme_customizer[eastjava_menu_icon]',
		'priority' => 3,
	) ) );	
	
	/* Mobile Menu Icon Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_menu_text]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_menu_text', array(
		'label'    => __( 'Menu Text Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_appearance',
		'settings' => 'eastjava_options_theme_customizer[eastjava_menu_text]',
		'priority' => 4,
	) ) );	
	
	/* --------------------------- */		
	/* Content Styles */	
	/* --------------------------- */	

	/* Name */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_name_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_content_name_color', array(
		'label'    => __( 'Name Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_name_color]',
		'priority' => 1,
	) ) );	

	/* Description */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_description_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_content_description_color', array(
		'label'    => __( 'Description Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_description_color]',
		'priority' => 2,
	) ) );
	
	/* Description Link Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_description_link_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_content_description_link_color', array(
		'label'    => __( 'Description Link Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_description_link_color]',
		'priority' => 3,
	) ) );

	/* Description Link Hover Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_description_link_hover_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_content_description_link_hover_color', array(
		'label'    => __( 'Description Link Hover Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_description_link_hover_color]',
		'priority' => 4,
	) ) );

	/* Button */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_button_color]', array(
		'default'  => '#DDDDDD'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_button_color', array(
		'label'    => __( 'Button Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_button_color]',
		'priority' => 5,
	) ) );	

	/* Button Hover */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_button_hover_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_button_hover_color', array(
		'label'    => __( 'Button Hover Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_button_hover_color]',
		'priority' => 6,
	) ) );	
	
	/* Widget Title */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_widget_title_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_widget_title_color', array(
		'label'    => __( 'Widget Title Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_widget_title_color]',
		'priority' => 7,
	) ) );

	/* Widget Content Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_content_widget_content_color]', array(
		'default'  => '#FFFFFF'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_widget_content_color', array(
		'label'    => __( 'Widget Content Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_content_styles',
		'settings' => 'eastjava_options_theme_customizer[eastjava_content_widget_content_color]',
		'priority' => 8,
	) ) );

	/* --------------------------- */		
	/* Sidebar Styles */	
	/* --------------------------- */

	/* Sidebar General Text Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_text_color]', array(
		'default'  => '#777777'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_text_color', array(
		'label'    => __( 'Text Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_text_color]',
		'priority' => 1,
	) ) );	
	
	/* Sidebar General Link Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_link_color]', array(
		'default'  => '#777777'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_link_color', array(
		'label'    => __( 'Link Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_link_color]',
		'priority' => 2,
	) ) );

	/* Sidebar General Link Hover Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_link_hover_color]', array(
		'default'  => '#CCCCCC'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_link_hover_color', array(
		'label'    => __( 'Link Hover Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_link_hover_color]',
		'priority' => 3,
	) ) );	
	
	/* Sidebar Widget Title Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_widget_title_color]', array(
		'default'  => '#CCCCCC'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_widget_title_color', array(
		'label'    => __( 'Widget Title Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_widget_title_color]',
		'priority' => 4,
	) ) );	
	
	/* Sidebar Widget List Item Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_widget_list_item_color]', array(
		'default'  => '#777777'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_widget_list_item_color', array(
		'label'    => __( 'Widget List Item Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_widget_list_item_color]',
		'priority' => 5,
	) ) );	
	
	/* Sidebar Widget List Item Hover Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_sidebar_widget_list_item_hover_color]', array(
		'default'  => '#999999'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_sidebar_widget_list_item_hover_color', array(
		'label'    => __( 'Widget List Item Hover Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_sidebar_widget_list_item_hover_color]',
		'priority' => 6,
	) ) );	

	/* Sidebar Social Icon Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_social_icons]', array(
		'default'  => '#555555'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_social_icons', array(
		'label'    => __( 'Social Icon Color', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_social_icons]',
		'priority' => 7,
	) ) );	

	/* Sidebar Social Icon Hover  Color */
	$wp_customize->add_setting( 'eastjava_options_theme_customizer[eastjava_social_icons_hover]', array(
		'default'  => '#999999'
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'eastjava_options_theme_customizer_social_icons_hover', array(
		'label'    => __( 'Social Icon Hover Colors', 'eastjava' ),
		'section'  => 'eastjava_options_theme_customizer_sidebar',
		'settings' => 'eastjava_options_theme_customizer[eastjava_social_icons_hover]',
		'priority' => 8,
	) ) );	

}
