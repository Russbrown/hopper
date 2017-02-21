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

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-92265392-1', 'auto');
			ga('send', 'pageview');
		</script>

	</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
