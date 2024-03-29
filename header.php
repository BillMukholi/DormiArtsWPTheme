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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="header">
		<div class="header-cont">
			<div class="header-desktop">
				<div class="header-desktop-top-cont">
					<div class="header-desktop-top container">
						<div class="header-desktop-top-left">
							<ul class="header-desktop-top-left-menu">
								<?php
									wp_nav_menu(array(
										'menu' => 'top',
										'container' => false,
										'items_wrap' => '%3$s',
									)); 

								?>
						</ul>
						</div>
						<div class="header-desktop-top-right">
							<ul class="header-desktop-top-right-menu">
								<li>
									<?php
										if ( is_user_logged_in() ) {
										echo '<a href="'.site_url().'/my-account">';
											echo wp_get_current_user()->display_name;
										echo '</a>';
										} else {
											echo '<a href="'.site_url().'/authentication">';
												echo 'Login | Signup';
											echo '</a>';
										}
									?>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="header-desktop-bottom-cont">
					<div class="header-desktop-bottom container">
						<div class="header-desktop-left">
							<a class="header-desktop-site-name-cont textColor" href="<?php echo site_url(); ?>">
								<p class="header-desktop-site-name"><?php echo get_bloginfo('name'); ?></p>
							</a>
						</div>
						<div class="header-desktop-center"></div>
						<div class="header-desktop-right">
							<nav class="header-desktop-navigation-cont">
								<ul class="header-desktop-navigation">
									<?php
										wp_nav_menu(array(
											'menu' => 'primary',
											'container' => false,
											'items_wrap' => '%3$s',
										)); 
									?>
								</ul>
							</nav>
							<div class="header-desktop-checkout-cont">
								<a class="header-desktop-checkout-btn" href="#">
									<p  class="header-desktop-checkout-btn-text">Shop</p>
									<div  class="header-desktop-checkout-number-cont">
										<p class="header-desktop-checkout-number">0</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-mobile">
				<div class="header-mobile-left">
					<div class="hamburger-menu-cont">
						<div class="hamburger-menu">
							<div class="hamburger-menu-line"></div>
							<div class="hamburger-menu-line"></div>
							<div class="hamburger-menu-line"></div>
						</div>
					</div>
					
				</div>
				<div class="header-mobile-center">
					<a class="header-mobile-site-name-cont" href="<?php echo site_url(); ?>">
						<p class="header-mobile-site-name"><?php echo get_bloginfo('name'); ?></p>
					</a>
				</div>
				<div class="header-mobile-right">
					<a href="#" class="header-mobile-cart-link">
						<div class="header-mobile-cart-number-cont">
							<p class="header-mobile-cart-number">0</p>
						</div>
						<img class="header-mobile-cart-icon" src="<?php echo get_template_directory_uri().'/assets/icon/shoppingBag.svg' ?>">
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="mobile-navigation-cont">
		<div class="mobile-navigation">
			<ul class="mobile-navigation-list">
				<?php
					wp_nav_menu(array(
						'menu' => 'primary',
						'container' => false,
						'items_wrap' => '%3$s',
					)); 

				?>
			</ul>
		</div>
	</div>


	<!-- #masthead -->
