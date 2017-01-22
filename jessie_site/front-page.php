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
			
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'header' ); ?>
			</div>
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'about' ); ?>
			</div>
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'work-items' ); ?>
			</div>
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'services' ); ?>
			</div>
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'newsletter' ) ?>
			</div>
			<div class="wrapper--outer">
				<?php get_template_part( 'template-parts/content', 'contact' ); ?>
			</div>

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
