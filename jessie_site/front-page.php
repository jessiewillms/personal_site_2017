<?php
/**
 * Front page : Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php get_template_part( 'template-parts/content', 'header' ); ?>
			<br>
			<?php get_template_part( 'template-parts/content', 'about' ); ?>
			<br style="clear:both;">
			<?php get_template_part( 'template-parts/content', 'work-items' ); ?>
			<br style="clear:both;">
			<?php get_template_part( 'template-parts/content', 'services' ); ?>
			

			<!-- <?php
				//while ( have_posts() ) : the_post();
				//	get_template_part( 'template-parts/content', 'page' );
				//endwhile; // End of the loop.
			?>-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
