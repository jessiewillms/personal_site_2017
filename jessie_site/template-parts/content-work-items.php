<?php
/**
 * Template part for getting 4 work items for the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>


<?php if ( $hp_work_headline = get_field('homepage_work_title') ) {
	
	echo '<section class="wrapper--inner">';
		echo '<h2>' . $hp_work_headline . '</h2>';

		if ( $hp_contact_subheadline = get_field('homepage_work_subtitle') ) {
			echo '<p>' . $hp_contact_subheadline . '</p>';
		}
	echo '</section>';
} ?>


<?php 
// WP_Query arguments
$args = array(
	'post_type'              => array( 'work' ),
	'posts_per_page'         => '6',
	'order'                  => 'ASC',
	'orderby'                => 'title',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	

	while ( $query->have_posts() ) {
		$query->the_post();
		
		echo '<div class="grid--one-third" style="background-image:url(' . 'https://placebear.com/300/300' . ')">';
			
			echo '<a href="' . get_permalink() . '">View</a>'; 
		
		echo '</div>'; // .end grid--one-third

	}

} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>

