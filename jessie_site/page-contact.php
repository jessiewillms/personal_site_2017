<?php
/**
 * The template for displaying the contact page
 * 
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main post-<?php the_ID(); ?>" role="main">
		
			<!-- 
			==========================================

			Section: Header with background image + buttons

			==========================================
			-->

			<?php 

			$image = get_the_post_thumbnail_url();

			if( !empty($image) ): ?>
			
				<header class="wrapper--header entry-header text--align-center clearfix" style="background-image:url(' <?php echo $image ?> ')">
					
					<!-- 
					==========================================

					Section: Contact Page Title + Sub-title

					==========================================
					-->

					<div class="wrapper--inner">
						<h1 class="text--color-white"><?php echo get_the_title(); ?></h1>
						<?php 
						$tagline = get_field( "contact_page_header_tagline" );
							if( $tagline ) {
							    echo '<p class="text--small text--color-white">' . $tagline .  '</p>';
							} else {
							    echo 'empty';
							}
						?>
					
					
						<!-- 
						==========================================

						Section: Contact Page Buttons

						==========================================
						-->
						<?php

						// check if the repeater field has rows of data
						if( have_rows('contact_page_buttons') ):

						echo '<div class="wrapper--inner-small align-center clearfix">';

						 	// loop through the rows of data
						    while ( have_rows('contact_page_buttons') ) : the_row();

						        // display a sub field value
						        $hp_url = get_sub_field('contact_page_button_url');
						        $hp_btn_text = get_sub_field('contact_page_button_text');

						        echo '<p class="text--btn-small"><a href="' . $hp_url . '">' . $hp_btn_text . '</a></p>';

						    endwhile;

						else :
						    // no rows found
						echo "</div>"; // ends .wrapper--inner-small

						endif;

						?>
					</div><!-- end .wrapper-inner -->
					
				</header><!-- .entry-header -->

			<?php endif; ?>

			

			<!-- 
			==========================================

			Section: Post Content 

			==========================================
			-->
			
			<section class="wrapper--inner">
				<?php
				while ( have_posts() ) : the_post();
					the_content();
					//get_template_part( 'template-parts/content', 'page' );

				endwhile; // End of the loop.
				?>
			</section>
			
			<!-- 
			==========================================

			Section: Gravity Form

			==========================================
			-->
			<div class="wrapper--inner">
				<?php 
				gravity_form( 1, false, false, false, '', false );
				?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
