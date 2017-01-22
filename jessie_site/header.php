<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jessie_site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="https://use.fontawesome.com/8dd3ec638a.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jessie_site' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation" class="wrapper--inner main-navigation" role="navigation">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jessie_site' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>

			<?php 
			$big_logo = get_field('logo_full_logo','option');
			$small_logo = get_field('logo_icon_logo','option');
			if( !empty($big_logo) ): ?>
				<img src="<?php echo $big_logo['url']; ?>" alt="<?php echo $big_logo['alt']; ?>" />
				<!--<img src="<?php echo $small_logo['url']; ?>" style="display: none;" alt="<?php echo $small_logo['alt']; ?>" />-->
			<?php endif; ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
