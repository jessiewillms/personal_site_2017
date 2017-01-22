<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

<section class="no-results not-found">
	
	<?php 
		$image = get_the_post_thumbnail_url();
		if( !empty($image) ):
	?>

		<header class="entry-header text--align-center" style="background-image:url(' <?php echo $image ?> ')">
			<div class="wrapper--inner">
				<h1 class="page-title"><?php esc_html_e( get_the_title() ); ?></h1>
				<p class="text--small">WordPress developer</p>

				<div class="wrapper--inner-small align-center clearfix">
					<p class="text--btn-small"><a href="http://jessiewill.com/work">View work</a></p>
					<p class="text--btn-small"><a href="http://jessiewill.com/contact">Get in touch</a></p>
				</div>

			</div>
		</header><!-- .page-header -->

	<?php endif; ?>

	<main class="wrapper--inner">

	<!-- 
	==========================================

	Section: Begin Image Section

	==========================================
	-->

	<?php 

		$client_name = get_field('work_client_title');
		$client_sub_title = get_field('work_client_subtitle');
		$client_images = get_field('work_images');

		if ($client_name) {
			echo '<h3>' . $client_name . '</h3>';
		}

		if ($client_sub_title) {
			echo '<p>' . $client_sub_title . '</p>';
		}

		//==========================================

		//Section: Post Images
		// check if the flexible content field has rows of data 

		//==========================================

		if( have_rows('work_images') ):

		     // loop through the rows of data
		    while ( have_rows('work_images') ) : the_row();

		        if( get_row_layout() == 'image_1' ):
		        	$image_url_1 = get_sub_field('add_one_image');
		        	
		        	echo '<div class="grid--one-image">';
		        		echo '<img src="' . $image_url_1['url'] . '" alt="">';
		        	echo '</div>';

		        elseif( get_row_layout() == 'image_2' ): 

		        	$image_url_2_1 = get_sub_field('add_first_image');
		        	$image_url_2_2 = get_sub_field('add_second_image');

		        	echo '<div class="grid--two-images">';
		        		echo '<img src="' . $image_url_2_1['url'] . '" alt="">';
		        		echo '<img src="' . $image_url_2_2['url'] . '" alt="">';
		        	echo '</div>';

		       	elseif( get_row_layout() == 'image_3' ): 

		       		$image_url_3_1 = get_sub_field('add_first_image');
		       		$image_url_3_2 = get_sub_field('add_second_image');
		       		$image_url_3_3 = get_sub_field('add_third_image');

		       		echo '<div class="grid--three-images">';
		       			echo '<img src="' . $image_url_3_1['url'] . '" alt="">';
		       			echo '<img src="' . $image_url_3_2['url'] . '" alt="">';
		       			echo '<img src="' . $image_url_3_3['url'] . '" alt="">';
		       		echo '</div>';

		        endif;

		    endwhile;

		else :

		    // no layouts found

		endif;

	 ?>

	<!-- 
	==========================================

	Section: Post Content

	==========================================
	-->
	
	<?php the_content(); ?>

	<!-- 
	==========================================

	Section: Post Content

	==========================================
	-->
	<?php

	// check if the repeater field has rows of data
	if( have_rows('tools_skill_list') ):
		echo "<ul class='flex--parent-center align-items-flex-end'>";
	 	// loop through the rows of data
	    while ( have_rows('tools_skill_list') ) : the_row();

	        // display a sub field value
	        $skill_title = get_sub_field('skill_title');
	        $skill_image = get_sub_field('skill_image')['url'];


	        if ( $skill_title ) {
	        	echo '<li class="wrapper--flex-child-sixth text--align-center">' . $skill_title;

	        	if ( $skill_image ) {
	        		echo '<img src="' . $skill_image . '">';
	        	}

	        	echo '</li>';

	        }

	        

	    endwhile;

	    echo "</ul>";

	else :

	    // no rows found

	endif;

	?>

	<!-- 
	==========================================

	Section: View Live button

	==========================================
	-->
	
	<?php 
		$btn_text = get_field('work_view_button');
		$btn_url = get_field('work_view_button_url');

	if ($btn_text) {
		echo '<p class="button--large button--main-color button--center"><a href="' . $btn_url . '">' . $btn_text . '</a></p>';
	}?>

	
	</main><!-- .page-content -->
</section><!-- .no-results -->
