<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jessie_site
 */

?>

	</div><!-- #content -->
	<footer id="colophon" class="wrapper--outer site-footer " role="contentinfo">
		<div class="wrapper--inner site-info flex--display-flex align-items-flex-end">
			
			<?php get_template_part( 'template-parts/content', 'social-media' ); ?>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
