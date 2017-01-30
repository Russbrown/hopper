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

			<main id="main" class="content-page" role="main">

				<?php $field = get_fields($post_id); ?>

				<div class="page__text"><?php echo($field["contact_info"]);?></div>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
