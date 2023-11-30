<?php 
/**
 * Template Name: Front Page
 */

// get_header();

// $post_args = array(
//     'post_type'      => 'post',
//     'posts_per_page' => 3,
//     'orderby'        => 'date',
//     'order'          => 'DESC',
//     'post_status'    => 'publish',
// );

// $post_query = new WP_Query($post_args);

// if( $post_query->have_posts() ){
//     while($post_query->have_posts()){ //checking against multiple
//         $post_query->the_post(); //getting the ONE
//         ?>
//         <br>
//         <?php
//         the_post_thumbnail();
//         the_title();
//         the_excerpt();
//         the_permalink();
//     }
//     wp_reset_postdata(); //resets query back to default query
// }

// while ( have_posts() ) :
// 	the_post();
// 	get_template_part( 'template-parts/content/content-page' );

// 	// If comments are open or there is at least one comment, load up the comment template.
// 	if ( comments_open() || get_comments_number() ) {
// 		comments_template();
// 	}
// endwhile; // End of the loop.

// get_footer();