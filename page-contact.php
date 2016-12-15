<?php
/*
 * Template Name: Contact Page
 * Description: Contact form for customers
 * The template for displaying the contact page
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<?php while ( have_posts() ) : the_post(); ?>

			<section class="hero hero--short">
				<div class="hero__img hero__img--short"></div>
				<div class="hero__copy hero__copy--short">
					<?php the_title( '<h1 class="contact-title">', '</h1>' ); ?>
					<ul class="icon-bullets">
						<li><i class="icon-star"></i><?php echo get_field( "bullet1" ); ?></li>
						<li><i class="icon-star"></i><?php echo get_field( "bullet2" ); ?></li>
						<li><i class="icon-star"></i><?php echo get_field( "bullet3" ); ?></li>
						<li><i class="icon-star"></i><?php echo get_field( "bullet4" ); ?></li>			
					</ul>
				</div>
			</section>

			<main id="main" class="contact-page" role="main">

				<div class="contact-page-content">

					<?php the_content(); ?>

				</div><!-- .entry-content -->

				<div class="contact-page-form">
					<?php echo do_shortcode( '[contact-form-7 id="19" title="Contact form 1"]' ); ?>
				</div>

		<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
