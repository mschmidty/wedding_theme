<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wedding2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/svg'); ?>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wedding2' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
  <div class="menu-icon open-panel"><a href="#">&#9776;</a></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
      <a href="#" class="close-panel"> &#10005; </a>
      <p class="close-panel">where to...</p>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'Menu 1' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
