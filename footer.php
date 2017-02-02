<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package browny
 */

?>

	</div><!-- #content -->

		<footer class="footer">

				<div class="social__links">
					<a href="https://www.instagram.com/wearehopper/" class="social__link"><i class="fa fa-instagram"></i></a>
					<a href="https://www.facebook.com/wearehopper" class="social__link"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/We_Are_Hopper" class="social__link"><i class="fa fa-twitter"></i></a>
					<a href="http://www.creativebrief.com/agency/feed/24329" class="social__link creative-brief">
						<?php $creativeBrief = get_template_directory_uri(); ?>
						<img src="<?= $creativeBrief ?>/img/creativebrief.png" alt="creative brief"/>
					</a>
				</div>

		</footer>

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
