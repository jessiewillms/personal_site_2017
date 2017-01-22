<?php
/**
 * Template part for displaying social media information
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>


<?php

// check if the repeater field has rows of data
if( have_rows('global_social_media', 'option') ):
	
 	// loop through the rows of data
    while ( have_rows('global_social_media', 'option') ) : the_row();
        // display a sub field value
        
        $sm_option = get_sub_field('platform_options', 'option');

        if ( $sm_option == 'fb' ) {
        
        	$make_link = get_sub_field('fb_field', 'option');
        	echo '<a href="' . $make_link  . '"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
        
        } elseif ( $sm_option == 'tw' ) {
        
        	$make_link = get_sub_field('twitter_field', 'option');
        	echo '<a href="' . $make_link  . '"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
        
        } elseif ( $sm_option == 'li' ) {
        
        	$make_link = get_sub_field('linkedin_url', 'option');
        	echo '<a href="' . $make_link  . '"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
        
        } elseif ( $sm_option == 'ig' ) {
        
        	$make_link = get_sub_field('instagram_field', 'option');
        	echo '<a href="' . $make_link  . '"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
        
        } elseif ( $sm_option == 'em' ) {
        	$make_link = get_sub_field('email_url', 'option');
        	echo '<a href="mailto:' . $make_link  . '" target="_top"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>';
        }

    endwhile;
else :

    // no rows found

endif;

?>

