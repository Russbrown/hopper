<?php
/**
 * Template part for displaying posts.
 *
 * @package browny
 */

?>

<?php $field = get_fields($post_id); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class("content-page"); ?>>

	<h1 class="page__title"><span><?php echo($field["blog_type"]); ?></span></h1>

	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content page__text">
		<?php echo($field["blog_entry"]); ?>

		<div class="entry-author-img">
			<img src="<?php echo($field["author_image"]['url']); ?>"/>
		</div>
		<div class="entry-author-title">
			<?php echo($field["author_title"]); ?>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

<div class="stripe--purple"></div>
