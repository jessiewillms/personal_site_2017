<?php
/**
 * Template part for displaying the header (big image on pages)
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

<?php if ( $hp_contact_headline = get_field('homepage_contact_headline') ) {
	
	echo '<header class="wrapper--header wrapper--inner clearfix">';
		echo '<h2>' . $hp_contact_headline . '</h2>';

		if ( $hp_contact_subheadline = get_field('homepage_contact_subheadline') ) {
			$hp_contact_page = get_field('homepage_contact_url');
			echo '<p><a href="' . $hp_contact_page . '">' . $hp_contact_subheadline . '</a></p>';
		}
	echo '</header>';
} ?>