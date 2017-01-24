<?php
/**
 * The template for displaying the contact page
 * 
 * Template Name: About Page
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
					
					<div class="wrapper--inner">
						<h1 class="text--color-white"><?php echo get_the_title(); ?></h1>
						<?php 
						$tagline = get_field( "about_page_header_tagline" );
							if( $tagline ) {
							    echo '<p class="text--small text--color-white">' . $tagline .  '</p>';
							} else {
							    echo 'empty';
							}
						?>
					
					
						<?php

						// check if the repeater field has rows of data
						if( have_rows('about_page_buttons') ):

						echo '<div class="wrapper--inner-small align-center clearfix">';

						 	// loop through the rows of data
						    while ( have_rows('about_page_buttons') ) : the_row();

						        // display a sub field value
						        $hp_url = get_sub_field('about_page_button_url');
						        $hp_btn_text = get_sub_field('about_page_button_text');

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
			
			<section class="wrapper--inner flex--parent-center">
				<?php
				while ( have_posts() ) : the_post();
					
					echo "<div class='wrapper--flex-child-half the_content'>";
						the_content();
					echo "</div>";

					$about_page_image = get_field('about_page_image')['url'];

					if ( $about_page_image ) {
						echo "<div class='wrapper--flex-child-half'>";
							echo '<img src="' . $about_page_image . '">';
						echo "</div>";
					}

				endwhile; // End of the loop.
				?>
			</section>
			
			<!-- 
			==========================================

			Section: Skills Title + Sub-title

			==========================================
			-->
	
			<?php
			// check if the repeater field has rows of data
			$skills_section_title = get_field('about_skills_title');
			$skills_section_subtitle = get_field('about_skills_subtitle');

			if ($skills_section_title || $skills_section_subtitle) {
				
				echo '<header class="wrapper--header wrapper--inner text--align-center">';

					if ($skills_section_title) {
						echo '<h3 class="text--color-dark-grey">' . $skills_section_title . '</h3>';
					}

					if ($skills_section_subtitle) {
						echo '<p class="text--color-dark-grey">' . $skills_section_subtitle . '</p>';
					}
				echo '</header>';

			} ?>
			
			<!-- 
			==========================================

			Section: Skills Repeater (icons + text)

			==========================================
			-->

			<?php 
			if( have_rows('about_page_skills') ):
				
				echo '<section class="wrapper--inner flex--parent-center ">';
			 	// loop through the rows of data
			    while ( have_rows('about_page_skills') ) : the_row();

			        // display a sub field value
			        $about_skill_title = get_sub_field('about_skills_title');
			        $about_skill_image = get_sub_field('about_skills_icon')['url'];


			        if ( $about_skill_title ) {
			        	echo '<li class="wrapper--flex-child-sixth text--align-center">' . $about_skill_title;

			        	if ( $about_skill_image ) {
			        		echo '<img src="' . $about_skill_image . '">';
			        	}

			        	echo '</li>';

			        }

			    endwhile;

			else :

			    // no rows found
			endif;
			echo '</section>';
			?>
			
			<!-- 
			==========================================

			Section: View Live button

			==========================================
			-->
			
			<?php 
				$contact_btn_text = get_field('link_to_another_page');
				$contact_btn_url = get_field('link_to_another_page_url');

			if ($contact_btn_text) {
				echo '<div class="wrapper--inner">';
					echo '<p class="button--large button--main-color button--center"><a href="' . $contact_btn_url . '">' . $contact_btn_text . '</a></p>';
				echo '</div>';
			}?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
