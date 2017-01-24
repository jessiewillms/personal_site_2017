<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jessie_site
 */

?>

<section class="article wrapper--outer">
	


	<!-- 
	==========================================

	Section: CLient information + title

	==========================================
	-->
	<?php
	$work_client_title_colour = get_field('work_client_title_colour');
	$title_colour = "";

	if ($work_client_title_colour == 'light') {
	 	$title_colour = 'text--color-white';
	 	
	} elseif ($work_client_title_colour == 'dark') {
	 	$title_colour = 'text--color-dark-grey';
	} ?>


	<?php 
		$image = get_the_post_thumbnail_url();
		if( !empty($image) ):
	?>

		<header class="entry-header text--align-center" style="background-image:url(' <?php echo $image ?> ')">
			<div class="wrapper--inner">
				<h1 class="page-title <?php echo $title_colour; ?>"><?php esc_html_e( get_the_title() ); ?></h1>
				<p class="text--small <?php echo $title_colour; ?>">WordPress developer</p>

				<div class="wrapper--inner-small align-center clearfix">
					<p class="text--btn-small"><a class="<?php echo $title_colour; ?>" href="<?php echo get_site_url() . '/work' ?>">View work</a></p>
					<p class="text--btn-small"><a class="<?php echo $title_colour; ?>" href="<?php echo get_site_url() . '/contact-page' ?>">Get in touch</a></p>
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
		$work_client_copy = get_field('work_client_copy');
		$work_client_sub_copy = get_field('work_client_sub_copy');

		$client = "";
		$client_by = "";

		if ($work_client_copy) {
			$client = '<strong>' . $work_client_copy . ':</strong> ';
		}

		if ($work_client_sub_copy) {
			$client_by = '<strong>' . $work_client_sub_copy . ':</strong> ';
		}

		$client_name = get_field('work_client_title');
		$client_sub_title = get_field('work_client_subtitle');
		$client_images = get_field('work_images');

			

		if ($client_name) {
			echo '<h3>' . $client . $client_name . '</h3>';
		}

		if ($client_sub_title) {
			echo '<p>' . $client_by . $client_sub_title . '</p>';
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

	Section: Title + Sub-title

	==========================================
	-->
	</header>
	<?php

	$tools_skills_used_title = get_field('tools_skills_used_title');
	$tools_skills_used_subtitle = get_field('tools_skills_used_subtitle');

	if ( $tools_skills_used_title || $tools_skills_used_subtitle ) {
		echo '<header class="wrapper--header wrapper--inner">';
	}
	if ( $tools_skills_used_title ) {
		echo '<h2>' . $tools_skills_used_title . '</h2>';
	}

	if ( $tools_skills_used_subtitle ) {
		echo '<p>' . $tools_skills_used_subtitle . '</p>';
	}

	if (  $tools_skills_used_title || $tools_skills_used_subtitle ) {
		echo '<header class="wrapper--header wrapper--inner">';
	} ?>


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
	        // $skill_image = get_sub_field('skill_image')['url'];

	        // rwd 	:	Responsive Web Design
	        // psd 	:	Design to WordPress
	        // wp 	:	Custom WordPress development
	        // sp 	:	Shopify development
	        // js 	:	JavaScript app

	        if ( $skill_title['value']  ) {
	        	echo '<li class="wrapper--flex-child-sixth text--align-center">';
	        		echo $skill_title['label'];

	        	if ( $skill_title['value'] == 'rwd' ) {
	        		
	        		echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png' . '">';

	        	} elseif ( $skill_title['value'] == 'psd' ) {
	        		
	        		echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png' . '">';
	        	
	        	} elseif ( $skill_title['value'] == 'wp' ) {
	        		
	        		// echo $skill_title['label'];
	        		echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png' . '">';

	        	} elseif ( $skill_title['value'] == 'sp' ) {
	        		
	        		// echo $skill_title['label'];
	        		echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png' . '">';

	        	} elseif ( $skill_title['value'] == 'js' ) {
	        		
	        		// echo $skill_title['label'];
	        		echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png' . '">';

	        	} else {
	        		
	        		echo "none selected";
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

	<!-- 
	==========================================

	Section: Next + Previous buttons 
	
	
	==========================================
	-->

	<div class="wrapper--inner flex--display-flex flex--parent-center">
		<?php 
			previous_post_link('<div class="wrapper--next-prev"><p class="text--small">Previous:</p><p> %link</p></div>');
			echo '<img src="' . get_site_url() . '/wp-content/uploads/2017/01/JW_icon.png" class="image--small-image">';
			next_post_link('<div class="wrapper--next-prev"><p class="text--small">Next:</p><p> %link </p></div>');
		?>
	</div>


	
	</main><!-- .page-content -->
</section><!-- .no-results -->
