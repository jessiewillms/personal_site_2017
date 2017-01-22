<?php
/**
 * Template part for getting 4 work items for the front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

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
		
		echo '<h2>' . the_title() . '</h2>';
	}
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata(); ?>