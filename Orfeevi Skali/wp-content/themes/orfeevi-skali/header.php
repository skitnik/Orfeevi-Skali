<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orfeevi_Skali
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- C -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/flexslider.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive-nav.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/lightbox.css">
<link rel="stylesheet" type="text/css" media="all" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" />

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>
<!-- JS -->


<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'orfeevi-skali' ); ?></a>

<!-- HEADER -->
<div id="main-header">
	<nav id="main-nav" >
		<div id="logo">
			<h1><a href="">Орфееви скали</a></h1>
			<p>хотел-механа</p>
		</div>


		<?php 
			wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container'       => 'ul',
					'container_class' => 'nav-collapse',
					'menu_class'      => 'nav-collapse',
				)
			); 
		?>
	</nav>
</div>