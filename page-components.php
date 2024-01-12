<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dormi_Arts
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- HERO -->
		<hero class="hero">
			<div class="hero-cont">
				<div class="hero-fg-cont">
					<div class="hero-marquee-cont container">
						<div class="hero-marquee-offset-left">
							<div class="hero-marquee-offset-gradient"></div>
						</div>
						<div class="hero-marquee owl-carousel">
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold"><?php echo get_bloginfo('name'); ?></p>
							</div> 
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold"><?php echo get_bloginfo('name'); ?></p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text"><?php echo get_bloginfo('name'); ?></p>
							</div>
						</div>
						<div class="hero-marquee-offset-right">
							<div class="hero-marquee-offset-gradient"></div>
						</div>
						</div>
					</div>
				<div class="hero-bg-cont">
					<div class="hero-carousel owl-carousel">
						<div class="hero-carousel-slide">
							<img class="hero-carousel-slide-img-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/1-m.jpg">
							<img class="hero-carousel-slide-img-desktop" src="<?php echo get_template_directory_uri()?>/assets/img/1.jpg">
						</div>
						<div class="hero-carousel-slide">
							<img class="hero-carousel-slide-img-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/2-m.jpg">
							<img class="hero-carousel-slide-img-desktop" src="<?php echo get_template_directory_uri()?>/assets/img/2.jpg">
						</div>
					</div>
				</div>
			</div>
		</hero>

		<!-- COMPONENT CONTAINER -->
		<div class="container">

			<!-- LINK BTN -->
			<div class="linkBtn">
				<a class="linkBtn-link" href="#">
					<p class="linkBtn-link-text">Link Btn Text</p>
					<img  class="linkBtn-link-icon" src="<?php echo get_template_directory_uri().'/assets/icon/right.svg' ?>"/>
				</a>
			</div>

			<!-- PROFILE PICTURES WIDGET -->
			<div class="profile-picture-widget">
				<div class="profile-picture-widget-cont">
					<div class="profile-picture-widget-canvas">
						<div class="profile-picture-widget-lvl-1-cont">
							<div class="profile-picture-widget-lvl-1">
								<div class="profile-picture-widget-lvl-carousel owl-carousel">
									<div class="profile-picture-widget-lvl-carousel-slide">
										<img src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
									<div class="profile-picture-widget-lvl-carousel-slide">
										<img src="<?php echo get_template_directory_uri().'/assets/img/avatar3.jpg' ?>">
									</div>
									<div class="profile-picture-widget-lvl-carousel-slide">
										<img src="<?php echo get_template_directory_uri().'/assets/img/avatar6.jpg' ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="profile-picture-widget-lvl-2-cont">
							<div class="profile-picture-widget-lvl-2">
								<div class="profile-picture-widget-lvl-2-element-cont">
									<div class="profile-picture-widget-lvl-2-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="profile-picture-widget-lvl-2-element-cont">
									<div class="profile-picture-widget-lvl-2-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar3.jpg' ?>">
									</div>
								</div>
								<div class="profile-picture-widget-lvl-2-element-cont">
									<div class="profile-picture-widget-lvl-2-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar6.jpg' ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="profile-picture-widget-lvl-3-cont">
							<div class="profile-picture-widget-lvl-3">
								<div class="profile-picture-widget-lvl-3-element-cont">
									<div class="profile-picture-widget-lvl-3-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="profile-picture-widget-lvl-3-element-cont">
									<div class="profile-picture-widget-lvl-3-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar3.jpg' ?>">
									</div>
								</div>
								<div class="profile-picture-widget-lvl-3-element-cont">
									<div class="profile-picture-widget-lvl-3-element">
										<img class="profile-picture" src="<?php echo get_template_directory_uri().'/assets/img/avatar6.jpg' ?>">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- WORDS BANNER -->
			<div class="words-widget">
				<div class="words-widget container">
					<div class="words-widget-fg-cont">
						<div class="words-widget-fg">
							<img  class="words-widget-img" src="<?php echo get_template_directory_uri().'/assets/img/paint.jpg' ?>">
						</div>
					</div>
					<div class="words-widget-bg-cont">
						<div class="words-widget-bg">
							<p class="words-widget-text">Dormi Arts</p>
							<p class="words-widget-text">Dormi Arts</p>
							<p class="words-widget-text">Dormi Arts</p>
							<p class="words-widget-text">Dormi Arts</p>
						</div>
					</div>
				</div>
			</div>






		</div>

		<!-- HEADER -->
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
