<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bane
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bower_components/bootstrap/dist/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bower_components/font-awesome/css/font-awesome.min.css" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Noto+Sans:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bane_ex' ); ?></a>

	<nav class="main-navigation navbar navbar-inverse navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/logo.png" class="site-logo"/>
		</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
		<?php wp_nav_menu([
						'menu' => 'primary',
						'theme_location' => 'primary',
						'menu_id' => 'primary-menu',
						'depth' => 2,
						'container' => 'div',
						'container_id' => 'mainmenu',
						'container_class' => 'collapse navbar-collapse',
						'menu_class' => 'nav navbar-nav navbar-right',
						'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
						'walker' => new wp_bootstrap_navwalker()
					]); ?>
	  </div><!-- /.container-fluid -->
	</nav>

	<div id="content" class="site-content">
