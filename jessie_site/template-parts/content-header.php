<?php
/**
 * Template part for displaying the header (big image on pages)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>


<?php 

$image = get_field('header_background_image');

if( !empty($image) ): ?>

	<header class="entry-header text--align-center clearfix" style="background-image: url('<?php echo $image['url']; ?>');">
		
		<div class="wrapper--inner">
			<h1><?php echo get_the_title(); ?></h1>
			<?php 
			$tagline = get_field( "homepage_header_tagline" );
				if( $tagline ) {
				    echo '<p class="text--small">' . $tagline .  '</p>';
				} else {
				    echo 'empty';
				}
			?>
		
		
			<?php

			// check if the repeater field has rows of data
			if( have_rows('homepage_buttons') ):
		
			echo '<div class="wrapper--inner-small align-center clearfix">';

			 	// loop through the rows of data
			    while ( have_rows('homepage_buttons') ) : the_row();

			        // display a sub field value
			        $hp_url = get_sub_field('homepage_button_url');
			        $hp_btn_text = get_sub_field('homepage_button_text');

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

