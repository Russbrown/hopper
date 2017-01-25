<?php


/*
 * Template Name: Home Page
 * Description: Home page Content
 * The template for displaying home page
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!--
			///
			/// 
				Home tiles 
			///
			///
			-->

			<?php 
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'Home-Tiles',
				'orderby'       => 'menu_order'
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if( $the_query->have_posts() ): ?>
				<section class="home-tiles cf">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
					if (get_field('tile_type') == 'People') {
					?>
						<div class="tile home-tile tile-type--<?php the_field('tile_type'); ?> tile-color--<?php the_field('text_colour'); ?>">
					<?php 
					} else {
					?>
						<a href="<?php the_field('tile_link'); ?>" class="tile home-tile tile-type--<?php the_field('tile_type'); ?> tile-color--<?php the_field('text_colour'); ?>">
					<?php
					}
					?>						
						<?php
						if (get_field('tile_type') == 'People') {
						?>
							<img src="<?= get_field('people_image_1')['url']; ?>" class="tile-image-1 people-gif active"/>
							<img src="<?= get_field('people_image_2')['url']; ?>" class="tile-image-2 people-gif"/>
							<img src="<?= get_field('people_image_3')['url']; ?>" class="tile-image-3 people-gif"/>

							<div class="tile__people__popup">
								<div class="popup__body">
									<h2 class="popup__header"><?php the_field('tile_text'); ?></h2>
									<div class="popup__text"><?php the_field('people_pop_up_text'); ?></div>
								</div>
								<div class="popup__close">X</div>
								<img src="<?= get_field('people_image_1')['url']; ?>" alt="<?= get_field('people_image_1')['alt']; ?>"/>
							</div>
						<?php
						} else {
						?>
							<img src="<?php the_field('tile_image'); ?>" class="tile-image"/>
						<?php
						}
						?>
						<img src="<?php the_field('rollover_image'); ?>" class="people-rollover"/>
						<div class="tile__overlay"></div>
						<div class="tile__type"><?php the_field('tile_type'); ?></div>
						<div class="tile__text"><?php the_field('tile_text'); ?></div>
						<div class="tile__more">
							<div class="tile__more__plus">+</div>
							<div class="tile__more__text">More</div>
						</div>
					<?php
					if (get_field('tile_type') == 'People') {
					?>
						</div>
					<?php 
					} else {
					?>
						</a>
					<?php
					}
					?>
				<?php endwhile; ?>
				</section>
			<?php endif; ?>
			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			<div class="stripe--green"></div>
			<a id="About"></a>
			<!--
			///
			/// 
				About section
			///
			///
			-->

			<?php
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'home-about'
			);
			$the_query = new WP_Query( $args );?>
			<?php if( $the_query->have_posts() ): ?>
				<section class="home-about">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h1 class="section__title"><span><?php the_field('home_title'); ?></span></h1>
						<div class="about__text"><?php the_field('home_text'); ?></div>
					<?php endwhile; ?>
				</section>
			<?php endif; ?>
			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			<div class="stripe--green"></div>
			<a id="Work"></a>
			<h1 class="section__title"><span>Work</span></h1>

			<!--
			///
			/// 
				Work tiles 
			///
			///
			-->

			<?php 
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'Work-Tiles',
				'orderby'       => 'menu_order'
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if( $the_query->have_posts() ): ?>
				<section class="work-tiles cf">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php the_field('tile_link'); ?>" class="tile work-tile">
						<img src="<?php the_field('tile_image'); ?>"/>
						<div class="tile__overlay"></div>
						<div class="tile__text-wrapper">
							<div class="tile__text-name"><?php the_field('tile_text_1'); ?></div>
							<div class="tile__text-client"><?php the_field('tile_text_2'); ?></div>
						</div>
						<div class="tile__more">
							<div class="tile__more__plus">+</div>
							<div class="tile__more__text">Learn More</div>
						</div>
					</a>
				<?php endwhile; ?>
				</section>
			<?php endif; ?>
			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
