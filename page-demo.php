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
