<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dormi_Arts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
		<div class="header-cont container">
			<div class="header-desktop">
				<div class="header-desktop-left">
					<a class="header-desktop-site-name-cont textColor" href="#">
						<p class="header-desktop-site-name">Site Name</p>
					</a>
				</div>
				<div class="header-desktop-center"></div>
				<div class="header-desktop-right">
					<nav class="header-desktop-navigation-cont">
						
					</nav>
				</div>
			</div>
			<div class="header-mobile">
				<div class="header-mobile-left"></div>
				<div class="header-mobile-center">
					<a class="header-mobile-site-name-cont" href="#">
						<p class="header-mobile-site-name">Site Name</p>
					</a>
				</div>
				<div class="header-mobile-right"></div>
			</div>
		</div>
	</header><!-- #masthead -->
