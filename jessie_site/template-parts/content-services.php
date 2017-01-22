<?php
/**
 * Template part for displaying the header (big image on pages)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

<p>homepage_services_title</p>
<?php if ( $hp_services_headline = get_field('homepage_services_title') ) {
	
	echo '<section class="wrapper--inner">';
		echo '<h2>' . $hp_services_headline . '</h2>';

		if ( $hp_services_subheadline = get_field('homepage_services_subtitle') ) {
			echo '<p>' . $hp_services_subheadline . '</p>';
		}
	echo '</section>';
} ?>


<?php

// check if the repeater field has rows of data
if( have_rows('homepage_about_blocks') ):
	echo '<section class="wrapper--inner">';
 	// loop through the rows of data
    while ( have_rows('homepage_services_blocks') ) : the_row();

        // display a sub field value
        $make_title = get_sub_field('services_block_title');
        $make_sub_title = get_sub_field('services_block_subtitle');
        $make_img_url = '<img src="' . get_sub_field('services_block_image')['url'] . '">';


        echo '<div class="grid--one-third">';
        	echo '<h3>' . $make_title . '</h3>';
        	echo '<p>' . $make_sub_title . '</p>';
        	echo $make_img_url;
        echo '</div>'; // ends .grid--one-third

    endwhile;
    echo '</section>'; // end .wrapper--inner

else :
    // no rows found
endif;

?>