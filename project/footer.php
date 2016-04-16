<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PROJECT
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="sitebrand">
				<h1 class="logo"><a href='<?php echo home_url();?>'><img src="<?php echo get_theme_mod('theme_logo');?>" alt=''></a></h1>
				<p>2015 © lawyer.</p>

				<ul class="social-links-menu">
					<li><a href='<?php echo get_theme_mod('facebook'); ?>'><span class="fa fa-facebook"></span></a></li>
					<li><a href='<?php echo get_theme_mod('google'); ?>'><span class="fa fa-google-plus"></span></a></li>
					<li><a href='<?php echo get_theme_mod('twitter'); ?>'><span class="fa fa-twitter"></span></a></li>
					<li><a href='<?php echo get_theme_mod('linkid'); ?>'><span class="fa fa-linkedin"></span></a></li>

				</ul>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>
