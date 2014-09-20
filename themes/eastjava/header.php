<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if ( is_page() ) {wp_title(''); echo ' - ';} else {};?><?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta charset = "UTF-8" />
	
	<!-- Responsive stylesheet -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=yes">
	
	<!-- IE stylesheet -->
	<!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="<?php print get_template_directory_uri(); ?>/styles/ie.css" /><![endif]-->
	
	<!-- RSS Feed -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	
	<!-- Pingbacks -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	
<nav class="pushy pushy-left">
	<?php $themeCustomizer = get_theme_mod('eastjava_options_theme_customizer'); get_sidebar(); ?>
</nav>    

<div class="site-overlay"></div>        

	<div id="container">

       	<!-- content-container div to host big background image -->
        <div id="content-container" style="background-image: url('<?php $eastjavabg = get_option('eastjava_background'); echo $eastjavabg; ?>');">
	        
        <?php include("incl/menu-icon.php"); ?>       

            <!-- content div with display:table css properties to allow centered content -->
			<div id="content">
