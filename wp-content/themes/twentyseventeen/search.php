<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
			<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Tìm kiếm theo: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<?php else : ?>
				<h1 class="page-title"><?php _e( 'Không tìm thấy kết quả', 'twentyseventeen' ); ?></h1>
			<?php endif; ?>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">Search</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="shopgrid" class="shop shop-grid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			<?php
			if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content', 'excerpt' );

				endwhile; // End of the loop.
				echo '<div class="row"><div class="col-xs-12 col-sm-12 col-md-12">';
				the_posts_pagination( array(
					'prev_text' => '<span class="screen-reader-text">' . __( '<i class="fa fa-angle-left"></i>', 'twentyseventeen' ) . '</span>',
					'next_text' => '<span class="screen-reader-text">' . __( '<i class="fa fa-angle-right"></i>', 'twentyseventeen' ) . '</span>',
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentyseventeen' ) . ' </span>',
				) );
				echo '</div></div>'; 
			else : ?>

				<p><?php _e( 'Không tìm thấy kết quả.', 'twentyseventeen' ); ?></p>
				<?php

			endif;
			?>
			</div>
		</div>
	</div>
</section>



<?php get_footer();
