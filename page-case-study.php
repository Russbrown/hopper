<?php
/*
 * Template Name: Case Study Page
 * Description: Case Study Page
 * The template for displaying the Case Study page
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">

			<main id="main" role="main">

				<?php $field = get_fields($post_id); ?>

				<div class="case-study__hero">
					<img src="<?= $field['img']['url']?>" alt="<?= $field['img']['alt']?>"/>
					<h1 class="case-study__hero-title"><?= $field['title']?></h1>
				</div>

				<h1 class="section__title"><span><?= $field['article_title']; ?></span></h1>

				<div class="case-study__text"><?= $field['article']; ?></div>

				<div class="case-study__tiles cf"> 
					<?php
					if( have_rows('tile') ):
						while ( have_rows('tile') ) : the_row();
							$image = get_sub_field('img');
							?>
							<img src="<?= $image['url'] ?>" alt="<?= $image['url'] ?>" />
							<?php
						endwhile;
					else :
						// no rows found
					endif;
					?>
				</div>

			</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
