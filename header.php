<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header row" role="banner">
		<div class="title-bar">
			<!--<button class="menu-icon" type="button" data-toggle="mobile-menu"></button>-->
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/kairos-logo-white.png" alt="Logo Kairos" /></a>
			</div>
			<div class="menu-technique-mobile">
				<ul>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/profil-white.png" alt="Profil" /></a></li>
					<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/cart-white.png" alt="Profil" /></a></li>
				</ul>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
			<div class="top-bar-section hide-for-small-only top-logo-mt">
				<ul class="top-bar-left logo">
					<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/kairos-logo.jpg" alt="Logo Kairos" /></a></li>
				</ul>
				<div class="top-bar-right menu-technique">
					<ul>
						<li><a href="<?php echo get_page_link(7); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/profil.png" alt="Profil" /></a></li>
						<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fixe/cart.png" alt="Profil" /></a></li>
					</ul>
				</div>
			</div>
			<div class="top-bar-section">
				<?php wp_nav_menu( array( 'theme_location' => 'top-bar-r' ) ); ?>
				<!--<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>-->
			</div>
		</nav>
	</header>

	<section class="container">

		<?php do_action( 'foundationpress_after_header' ); ?>
