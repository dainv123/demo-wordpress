<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); 
while ( have_posts() ) : the_post();
    get_template_part( 'template-parts/post/content', get_post_type(get_the_ID()) );
    
    // If comments are open or we have at least one comment, load up the comment template.
    // if ( comments_open() || get_comments_number() ) :
    // 	comments_template();
    // endif;
endwhile; 
?>
<?php get_footer();