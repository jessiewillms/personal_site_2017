<?php
/**
 * Template part for displaying the header (big image on pages)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

<?php if ( $hp_about_headline = get_field('homepage_about_headline') ) {
	
	echo '<section class="wrapper--inner">';
		echo '<h2>' . $hp_about_headline . '</h2>';

		if ( $hp_about_subheadline = get_field('homepage_about_subheadline') ) {
			echo '<p>' . $hp_about_subheadline . '</p>';
		}
	echo '</section>';
} ?>


<?php

// check if the repeater field has rows of data
if( have_rows('homepage_about_blocks') ):
	echo '<section class="wrapper--inner">';
 	// loop through the rows of data
    while ( have_rows('homepage_about_blocks') ) : the_row();

        // display a sub field value
        the_sub_field('sub_field_name');

    endwhile;
    echo '</section>'; // end .wrapper--inner

else :
    // no rows found
endif;

?>