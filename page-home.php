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

		<section class="hero">
			
			<div class="hero__wavy"></div>
			
			<div class="hero__headline">
				<?php $value = get_field( "hero_headline" ); 
				echo($value); ?>
			</div>
			
			<button class="hero__btn js-contact__button">Contact Us</button>
			
		</section>

		<section class="intro" id="intro__section">
			<div class="intro__headline">
				<?php $value = get_field( "our_aims_headline" ); 
				echo($value); ?>
			</div>
			<div class="intro__text">
				<?php $value = get_field( "our_aims_text" ); 
				echo($value); ?>
			</div>
		</section>

		<section class="gallery" id="gallery__section">
			<div class="gallery__headline">
				<?php $value = get_field( "our_homes_headline" ); echo($value); ?>
			</div>
			<div class="gallery__text">
				<?php $value = get_field( "our_homes_text" ); echo($value); ?>
			</div>
			<div class="gallery__images__wrapper">
				<div class="gallery__controls">
					<div class="controls__left js-gallery-left"> <i class="fa fa-angle-left"></i> </div>
					<div class="controls__right js-gallery-right"> <i class="fa fa-angle-right"></i> </div>
				</div>
				<div class="gallery__images">				
					<?php $images = get_field('our_homes_image');
					if( $images ): ?>
						<?php foreach( $images as $image ): ?>
							<div class="gallery__image">
								<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<section class="staff" id="staff__section">
			<div class="staff__headline"><?php $value = get_field( "staff_headline" ); echo($value); ?></div>
			<div class="staff__text"><?php $value = get_field( "staff_text" ); echo($value); ?></div>
			
			<div class="staff__profiles">
			<?php if( have_rows('staff_profiles') ):
				while ( have_rows('staff_profiles') ) : the_row(); ?>
					<div class="staff__profile">
						<img src="<?= the_sub_field('profile_image'); ?>" class="profile__image"/>
						<div class="profile__name"> <?= the_sub_field('profile_name'); ?> </div>
						<div class="profile__description"> <?= the_sub_field('profile_description'); ?> </div>
					</div>
				<?php endwhile;
			endif; ?>
			</div>
			
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
