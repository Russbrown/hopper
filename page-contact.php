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

			<main id="main" class="contact-page" role="main">

				<h1 class="contact__title"><span>Contact</span></h1>

				<?php $field = get_fields($post_id); ?>

				<div class="contact__text"><?php echo($field["contact_info"]);?></div>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
