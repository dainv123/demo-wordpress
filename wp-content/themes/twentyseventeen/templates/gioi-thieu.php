<?php
/*
 Template Name: Giới thiệu
 */
get_header(); ?>
<section id="featured1" class="featured featured-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading">
                    <!-- <p class="subheading">History</p> -->
                    <h2>Về công ty</h2>
                </div>
                <!-- .heading end -->
                <div class="about-accordion">
                    <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">
                        <?php 
                        if(get_field('khac','option'))
                        foreach ( get_field('khac','option') as $name => $value ) { ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion02" href="#collapse02-<?php echo $name+1 ?>" aria-expanded="<?php if($name === 0) echo true; else echo false; ?>"
                                            aria-controls="collapse02-<?php echo $name+1 ?>"><?php echo $value['tieu_de'] ?></a>
                                        <span class="icon"></span>
                                    </h4>
                                </div>
                                <div id="collapse02-<?php echo $name+1 ?>" class="panel-collapse collapse <?php if($name === 0) echo 'in' ?>" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false">
                                    <div class="panel-body">
                                        <?php if($value['anh_dai_dien']){ ?>
                                            <div class="pull-left pr-30">
                                                <img src="<?php echo $value['anh_dai_dien']['url'] ?>" alt="<?php echo $value['tieu_de'] ?>">
                                            </div>
                                        <?php } ?>
                                        <div><?php echo $value['noi_dung']  ?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- .accordion end -->
                </div>
                <!-- .about-accordion end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="heading">
                    <!-- <p class="subheading">We Are Good</p> -->
                    <h2>Định hướng</h2>
                </div>
                <!-- .heading end -->
                <div class="row">
                    <?php 
                    if(get_field('dinh_huong','option'))
                    foreach ( get_field('dinh_huong','option') as $name => $value ) { ?>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="feature-panel">
                                <div class="feature-icon">
                                    <i class="icon icon-<?php echo $value['chu_de'] ?>"></i>
                                </div>
                                <h4 class="text-uppercase"><?php echo $value['tieu_de'] ?></h4>
                                <p><?php echo $value['noi_dung'] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
</section>
<section id="blog" class="blog blog-grid bg-gray">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <p class="subheading">In The News</p> -->
                <h2><?php the_field('tieu_de_tin_tuc') ?></h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p><?php the_field('mieu_ta_tin_tuc') ?></p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="<?php the_field('url_lien_ket') ?>"><?php the_field('ten_lien_ket_tin_tuc') ?></a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
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
    </div>
    <!-- .container end -->
</section>
<section id="team" class="team">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <p class="subheading">Creatives</p> -->
                <h2><?php the_field('tieu_de_team') ?></h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p><?php the_field('mieu_ta_team') ?></p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="#">Xem thêm</a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
    <div class="container">
        <div class="row">
            <?php 
            if(get_field('danh_sach_team'))
            foreach ( get_field('danh_sach_team') as $name => $value ) { ?>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="member">
                        <div class="member-img">
                            <img src="<?php echo $value['anh_dai_dien_team']['url'] ?>" alt="<?php echo $value['ten_team'] ?>" />
                            <div class="member-hover">
                                <p><?php echo $value['gioi_thieu_team'] ?></p>
                                <div class="member-social">
                                    <a href="<?php echo $value['urls_team'][0]['facebook'] ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="<?php echo $value['urls_team'][0]['twitter'] ?>">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="<?php echo $value['urls_team'][0]['google_plus'] ?>">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="<?php echo $value['urls_team'][0]['linkedin'] ?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- .member-hover end -->
                        </div>
                        <!-- .member-img end -->
                        <div class="member-info">
                            <h5><?php echo $value['ten_team'] ?></h5>
                            <h6><?php echo $value['chuc_vu_team'] ?></h6>
                        </div>
                        <!-- .memebr-info end -->
                    </div>
                    <!-- .member end -->
                </div>
            <?php } ?>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<?php get_footer(); ?>