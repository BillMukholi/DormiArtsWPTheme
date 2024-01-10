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

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

		<!-- HERO -->
		<hero class="hero">
			<div class="hero-cont">
				<div class="hero-fg-cont">
					<div class="hero-marquee-cont">
						<div class="hero-marquee-offset"></div>
						<div class="hero-marquee owl-carousel">
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text bold">Dormi Arts</p>
							</div>
							<div class="hero-marquee-slide">
								<p class="hero-marquee-slide-text">Dormi Arts</p>
							</div>
						</div>
						</div>
					</div>
				<div class="hero-bg-cont">
					<div class="hero-carousel owl-carousel">
						<div class="hero-carousel-slide">
							<!-- <img class="hero-carousel-slide-img-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/1-m.jpg"> -->
							<img class="hero-carousel-slide-img-desktop" src="<?php echo get_template_directory_uri()?>/assets/img/1.jpg">
						</div>
						<div class="hero-carousel-slide">
							<!-- <img class="hero-carousel-slide-img-mobile" src="<?php echo get_template_directory_uri()?>/assets/img/2-m.jpg"> -->
							<img class="hero-carousel-slide-img-desktop" src="<?php echo get_template_directory_uri()?>/assets/img/2.jpg">
						</div>
					</div>
				</div>
			</div>
		</hero>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
