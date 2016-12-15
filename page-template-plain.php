<?php
/*
 * Template Name: Plain Text Pages
 * Description: Display simple text Content
 *
 * @package browny
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="template-page" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_title( '<h1 class="template-title">', '</h1>' ); ?>

			<div class="template-content">
				<?php the_content(); ?>
			</div><!-- .entry-content -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
