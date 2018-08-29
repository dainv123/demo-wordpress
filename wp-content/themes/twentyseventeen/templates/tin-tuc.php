<?php
/*
 Template Name: Tin tức
 */
?>
<?php get_header(); ?>
<section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>blog grid</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">blog grid</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="blog" class="blog blog-grid">
    <div class="container">
        <div class="row">
            <!-- Entry Article #1 -->
            <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'tin_tuc',
                    'posts_per_page' => 3,
                )); 
                if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="entry">
                                <div class="entry-img">
                                    <a href="<?php echo get_post_permalink($post->ID) ?>">
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>" alt="<?php echo $post->post_title ?>"/>
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <div class="entry-format">
                                        <i class="fa fa-image"></i>
                                    </div>
                                    <div class="entry-title">
                                        <h3>
                                            <a href="<?php echo get_post_permalink($post->ID) ?>"><?php echo $post->post_title ?></a>
                                        </h3>
                                    </div>
                                    <ul class="entry-meta list-inline clearfix">
                                        <li class="entry-date">On:
                                            <span><?php echo $post->post_date ?></span>
                                        </li>
                                        <li class="entry-author">By:
                                            <a href="javascript:void(0)"><?php echo get_the_author($post->id) ?></a>
                                        </li>
                                        
                                    </ul>
                                    <div class="entry-snippet">
                                        <p><?php echo limitText($post->post_content, 200) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else : 
                    echo '<p>Không tìm thấy tin tức nào</p>';
                endif; 
            ?> 
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12  text-center">
                <ul class="pagination">
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#" aria-label="Next">
                        <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>
<?php get_footer(); ?>