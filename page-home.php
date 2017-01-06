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

			<?php 

			// args
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'Home-Tiles'
			);

			// query
			$the_query = new WP_Query( $args );

			?>
			<?php if( $the_query->have_posts() ): ?>
				<section class="home-tiles cf">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php the_field('tile_link'); ?>" class="tile home-tile">
						<img src="<?php the_field('tile_image'); ?>"/>
						<div class="tile__overlay"></div>
						<div class="tile__type"><?php the_field('tile_type'); ?></div>
						<div class="tile__text"><?php the_field('tile_text'); ?></div>
						<div class="tile__more">
							<div class="tile__more__plus">+</div>
							<div class="tile__more__text">More</div>
						
						</div>
					</a>
				<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

			<div class="stripe--green"></div>

			<?php
			// args
			$args = array(
				'numberposts'	=> -1,
				'post_type'		=> 'home-about'
			);

			// query
			$the_query = new WP_Query( $args );?>

			<?php if( $the_query->have_posts() ): ?>
				<section class="home-about">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<h1 class="about__title"><span><?php the_field('home_title'); ?></span></h1>
						<div class="about__text"><?php the_field('home_text'); ?></div>
					<?php endwhile; ?>
				</section>
			<?php endif; ?>

			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
