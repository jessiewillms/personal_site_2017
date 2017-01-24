<?php
/**
 * The template for displaying archive pages
 *
 * Template Name: Work Archives
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		
		<?php $image = get_the_post_thumbnail_url();

			if( !empty($image) ): ?>
			
			<header class="wrapper--header entry-header text--align-center clearfix" style="background-image:url(' <?php echo $image ?> ')">
				
				<div class="wrapper--inner">
					<h1><?php echo get_the_title(); ?></h1>
					<?php 
					$archive_tagline = get_field( "work_archive_tagline" );
						if( $archive_tagline ) {
						    echo '<p class="text--small">' . $archive_tagline .  '</p>';
						} else {
						    echo 'empty';
						}
					?>
				</div>
				
			</header><!-- .entry-header -->
		<?php endif; ?>

		<section class="wrapper--inner ">
			<?php $counter = 0; ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( $counter % 2 == 0) {
					$bkg = 'background--light-grey';
				} else {
					$bkg = ' ';
				}
				$counter++ ?>
				<section class="wrapper--outer flex--parent-center <?php echo $bkg; ?>">
					<div class="wrapper--flex-child-half">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="">
					</div>
					<div class="wrapper--flex-child-half">
						<h2><?php the_title(); ?></h2>
						<?php the_excerpt('20'); ?>
						<p class="button--main-color"><a href="<?php the_permalink(); ?>">View work</a></p>
					</div>
				</section>

			<?php endwhile; // end of the loop. ?>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
