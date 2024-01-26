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
							<img class="words-widget-img" src="<?php echo get_template_directory_uri().'/assets/img/paint.jpg' ?>">
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

			<!-- PORTFOLIO CAROUSEL -->
			<div class="portfolio-carousel-cont">
				<div class="portfolio-carousel owl-carousel owl-theme">
					<div class="portfolio-carousel-slide">
						<a class="portfolio-carousel-slide-link" href="#">
							<div class="portfolio-carousel-slide-fg-cont">
								<div class="portfolio-carousel-slide-fg">
									<p class="portfolio-carousel-slide-title">Doors & Portal</p>
									<p class="portfolio-carousel-slide-subtitle">Title Here</p>
								</div>
							</div>
							<div class="portfolio-carousel-slide-bg-cont">
								<div class="portfolio-carousel-slide-bg-gradient"></div>
								<img class="portfolio-carousel-slide-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1-m.jpg' ?>">
							</div>
						</a>
					</div>
					<div class="portfolio-carousel-slide">
						<a class="portfolio-carousel-slide-link" href="#">
							<div class="portfolio-carousel-slide-fg-cont">
								<div class="portfolio-carousel-slide-fg">
									<p class="portfolio-carousel-slide-title">Doors & Portal</p>
									<p class="portfolio-carousel-slide-subtitle">Title Here</p>
								</div>
							</div>
							<div class="portfolio-carousel-slide-bg-cont">
								<div class="portfolio-carousel-slide-bg-gradient"></div>
								<img class="portfolio-carousel-slide-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1-m.jpg' ?>">
							</div>
						</a>
					</div>
					<div class="portfolio-carousel-slide">
						<a class="portfolio-carousel-slide-link" href="#">
							<div class="portfolio-carousel-slide-fg-cont">
								<div class="portfolio-carousel-slide-fg">
									<p class="portfolio-carousel-slide-title">Doors & Portal</p>
									<p class="portfolio-carousel-slide-subtitle">Title Here</p>
								</div>
							</div>
							<div class="portfolio-carousel-slide-bg-cont">
								<div class="portfolio-carousel-slide-bg-gradient"></div>
								<img class="portfolio-carousel-slide-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1-m.jpg' ?>">
							</div>
						</a>
					</div>
					<div class="portfolio-carousel-slide">
						<a class="portfolio-carousel-slide-link" href="#">
							<div class="portfolio-carousel-slide-fg-cont">
								<div class="portfolio-carousel-slide-fg">
									<p class="portfolio-carousel-slide-title">Doors & Portal</p>
									<p class="portfolio-carousel-slide-subtitle">Title Here</p>
								</div>
							</div>
							<div class="portfolio-carousel-slide-bg-cont">
								<div class="portfolio-carousel-slide-bg-gradient"></div>
								<img class="portfolio-carousel-slide-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1-m.jpg' ?>">
							</div>
						</a>
					</div>
					<div class="portfolio-carousel-slide">
						<a class="portfolio-carousel-slide-link" href="#">
							<div class="portfolio-carousel-slide-fg-cont">
								<div class="portfolio-carousel-slide-fg">
									<p class="portfolio-carousel-slide-title">Doors & Portal</p>
									<p class="portfolio-carousel-slide-subtitle">Title Here</p>
								</div>
							</div>
							<div class="portfolio-carousel-slide-bg-cont">
								<div class="portfolio-carousel-slide-bg-gradient"></div>
								<img class="portfolio-carousel-slide-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1-m.jpg' ?>">
							</div>
						</a>
					</div>

				</div>
			</div>


			<div class="testimonial-cont">
				<div class="testimonial-area">
					<div class="testimonial-item-cont">
						<div class="testimonial-item">
							<div class="testimonial-item-top">
								<div class="testimonial-item-top-left">
									<div class="testimonial-item-top-left-img-cont">
										<img class="testimonial-item-top-left-img" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="testimonial-item-top-right">
									<p class="testimonial-item-top-username">John Doe Username</p>
									<p class="testimonial-item-top-company">Company</p>
								</div>
							</div>
							<div class="testimonial-item-bottom">
								<div  class="testimonial-item-bottom-line"></div>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo corporis illum, repellendus debitis omnis optio similique assumenda adipisci alias autem vitae recusandae in ipsa sit! Deserunt voluptatem sint velit quibusdam.
								</p>
							</div>
						</div>
					</div>
					<div class="testimonial-line-cont">
						<div class="testimonial-circle"></div>
						<div class="testimonial-line"></div>
					</div>
					<div class="testimonial-item-cont">
						<div class="testimonial-item">
							<div class="testimonial-item-top">
								<div class="testimonial-item-top-left">
									<div class="testimonial-item-top-left-img-cont">
										<img class="testimonial-item-top-left-img" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="testimonial-item-top-right">
									<p class="testimonial-item-top-username">Jane Doe Username</p>
									<p class="testimonial-item-top-company">Company</p>
								</div>
							</div>
							<div class="testimonial-item-bottom">
								<div  class="testimonial-item-bottom-line"></div>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo corporis illum, repellendus debitis omnis optio similique assumenda adipisci alias autem vitae recusandae in ipsa sit! Deserunt voluptatem sint velit quibusdam.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-cont">
				<div class="testimonial-area">
					<div class="testimonial-item-cont">
						<div class="testimonial-item">
							<div class="testimonial-item-top">
								<div class="testimonial-item-top-left">
									<div class="testimonial-item-top-left-img-cont">
										<img class="testimonial-item-top-left-img" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="testimonial-item-top-right">
									<p class="testimonial-item-top-username">John Doe Username</p>
									<p class="testimonial-item-top-company">Company</p>
								</div>
							</div>
							<div class="testimonial-item-bottom">
								<div  class="testimonial-item-bottom-line"></div>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo corporis illum, repellendus debitis omnis optio similique assumenda adipisci alias autem vitae recusandae in ipsa sit! Deserunt voluptatem sint velit quibusdam.
								</p>
							</div>
						</div>
					</div>
					<div class="testimonial-line-cont">
						<div class="testimonial-circle"></div>
						<div class="testimonial-line"></div>
					</div>
					<div class="testimonial-item-cont">
						<div class="testimonial-item">
							<div class="testimonial-item-top">
								<div class="testimonial-item-top-left">
									<div class="testimonial-item-top-left-img-cont">
										<img class="testimonial-item-top-left-img" src="<?php echo get_template_directory_uri().'/assets/img/avatar2.jpg' ?>">
									</div>
								</div>
								<div class="testimonial-item-top-right">
									<p class="testimonial-item-top-username">Jane Doe Username</p>
									<p class="testimonial-item-top-company">Company</p>
								</div>
							</div>
							<div class="testimonial-item-bottom">
								<div  class="testimonial-item-bottom-line"></div>
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo corporis illum, repellendus debitis omnis optio similique assumenda adipisci alias autem vitae recusandae in ipsa sit! Deserunt voluptatem sint velit quibusdam.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- PAGE HEADER -->
			<div class="page-header-cont">
				<div class="page-header">
					<div class="page-header-fg">
						<p>Page Title</p>
					</div>
					<div class="page-header-bg">
						<div class="page-header-bg-gradient"></div>
						<img class="page-header-bg-img" src="<?php echo get_template_directory_uri().'/assets/img/1.jpg' ?>">
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
