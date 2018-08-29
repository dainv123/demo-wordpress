<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<section id="hero" class="hero">
    <div id="hero-slider" class="hero-slider">
        <?php 
        if(get_field('slider'))
        foreach ( get_field('slider') as $name => $value ) { ?>
            <div class="slide bg-overlay">
                <div class="bg-section">
                    <img src="<?php echo $value['anh_dai_dien']['url'] ?>" alt="Background" />
                </div>
                <div class="container vertical-center">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                            <div class="slide-content">
                                <div class="slide-heading"> <?php echo $value['tieu_de_ten'] ?> </div>
                                <div class="slide-title">
                                    <h2><?php echo $value['tieu_de_giua'] ?></h2>
                                </div>
                                <div class="slide-desc"> <?php echo $value['tieu_de_duoi'] ?> </div>
                                <?php if($value['url'] !== '') { ?>
                                    <div class="slide-action">
                                        <a class="btn btn-primary" href="<?php echo $value['url'] ?> ">Watch it now</a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
        <?php } ?>
    </div>
    <!-- #hero-slider end -->
</section>
<section id="shopgrid" class="shop shop-grid shop-items">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <p class="subheading">we get</p> -->
                <h2>Sản phẩm mới</h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <div class="container">
        <div class="row">
            <?php 
                $the_query = new WP_Query( array(
                    'post_type' => 'san_pham',
                    'posts_per_page' => 8,
                )); 
                if ( $the_query->have_posts() ) : 
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        echo '<div class="col-xs-12 col-sm-6 col-md-3 product">
                            <div class="product-img">
                            <img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
                                <div class="product-hover">
                                    <div class="product-action">
                                        <a class="btn btn-primary" href="'.get_field('thong_tin_san_pham', $post->ID)[0]['lien_ket'].'">Mua ngay</a>
                                        <a class="btn btn-primary" href="'.get_post_permalink($post->ID).'">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-bio">
                                <div class="prodcut-cat">
                                    <a href="javascript:void(0)">'.get_field('thong_tin_san_pham', $post->ID)[0]['thuong_hieu'].'</a>
                                </div>
                                <div class="prodcut-title">
                                    <h3>
                                        <a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
                                    </h3>
                                </div>
                                <div class="product-price">
                                    <span>'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
                                </div>
                            </div>
                        </div>';
                    endwhile;
                    wp_reset_postdata();
                else : 
                    echo '<p>Không tìm thấy sản phẩm nào</p>';
                endif; 
            ?>                                    
           
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="clients" class="clients bg-gray">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <p class="subheading">Awesome</p> -->
                <h2><?php the_field('tieu_de_khach_hang'); ?></h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p><?php the_field('mieu_ta_khach_hang'); ?></p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="<?php the_field('url_lien_ket_khach_hang'); ?>"><?php the_field('ten_lien_ket_khach_hang'); ?></a>
            </div>
            <!-- .client end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
    <div class="container">
        <div class="clients-bg">
            <div class="row">
                <div class="col-xs-12 colsm-12 col-md-12 client-carousel">
                <?php 
                if(get_field('danh_sach_khach_hang'))
                    foreach ( get_field('danh_sach_khach_hang') as $name => $value ) { ?>
                        <div class="client">
                            <a href="<?php echo $value['url_khach_hang'] ?>"><img src="<?php echo $value['logo_khach_hang']['url'] ?>" alt="<?php echo $value['ten_khach_hang'] ?>"></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- .row end -->
        </div>
    </div>
    <!-- .container end -->
</section>
<section id="testimonials" class="testimonial  bg-gray">
    <div class="container heading">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <p class="subheading">People Say</p> -->
                <h2><?php the_field('tieu_de_trich_dan'); ?></h2>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->

        <div class="row heading-desc">
            <div class="col-xs-12 col-sm-12 col-md-10">
                <p><?php the_field('mieu_ta_trich_dan'); ?></p>
            </div>
            <!-- .col-md-10 end -->
            <div class="col-xs-12 col-sm-12 col-md-2">
                <a class="btn btn-primary btn-block" href="<?php the_field('url_lien_ket_trich_dan'); ?>"><?php the_field('ten_lien_ket_trich_dan'); ?></a>
            </div>
            <!-- .col-md-2 end -->
        </div>
        <!-- .row end -->

    </div>
    <!-- .container end -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="testimonial-oc" class="testimonial-carousel">
                    <?php 
                    if(get_field('danh_sach_trich_dan'))
                    foreach ( get_field('danh_sach_trich_dan') as $name => $value ) { ?>
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <p><?php echo $value['noi_dung_trich_dan'] ?></p>
                            </div>
                            <div class="testimonial-meta">
                                <img src="<?php echo $value['hinh_dai_dien_trich_dan']['url'] ?>" alt="<?php echo $value['ten_nguoi_trich_dan'] ?>">
                                <div class="testimonial-bio">
                                    <h6><?php echo $value['ten_nguoi_trich_dan'] ?></h6>
                                    <p><?php echo $value['chuc_vu_nguoi_trich_dan'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<section id="offers" class="offers">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="widget widget-recent-products">
                    <div class="widget-title">
                        <h5>Bán chạy</h5>
                    </div>
                    <div class="widget-content">
                        <?php 
                            $args = array(
                                'post_type' => 'san_pham',
                                'tag' => 'ban-chay',
                                'posts_per_page' => 3,
                                'orderby' => 'id',
                                'order' => 'ASC'
                            );

                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                echo '<ul>';
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    echo '<div class="product">
                                    <img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
                                        <div class="product-desc">
                                            <div class="product-title">
                                            <a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
                                            </div>
                                            <div class="product-meta">
                                                <span class="color-theme">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p>Không tìm thấy sản phẩm nào</p>';
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                    <!-- .widget-content end -->
                </div>
                <!-- .widget-recent-product end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="widget widget-recent-products">
                    <div class="widget-title">
                        <h5>Khuyến mãi</h5>
                    </div>
                    <div class="widget-content">
                        <?php 
                            $args = array(
                                'post_type' => 'san_pham',
                                'tag' => 'khuyen-mai',
                                'posts_per_page' => 3,
                                'orderby' => 'id',
                                'order' => 'ASC'
                            );

                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                echo '<ul>';
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    echo '<div class="product">
                                    <img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
                                        <div class="product-desc">
                                            <div class="product-title">
                                            <a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
                                            </div>
                                            <div class="product-meta">
                                                <span class="color-theme">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p>Không tìm thấy sản phẩm nào</p>';
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                    <!-- .widget-content end -->
                </div>
                <!-- .widget-recent-product end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="widget widget-recent-products">
                <div class="widget-title">
                        <h5>Đặc sắc</h5>
                    </div>
                    <div class="widget-content">
                        <?php 
                            $args = array(
                                'post_type' => 'san_pham',
                                'tag' => 'dac-sac',
                                'posts_per_page' => 3,
                                'orderby' => 'id',
                                'order' => 'ASC'
                            );

                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                echo '<ul>';
                                while ( $the_query->have_posts() ) {
                                    $the_query->the_post();
                                    echo '<div class="product">
                                    <img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
                                        <div class="product-desc">
                                            <div class="product-title">
                                            <a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
                                            </div>
                                            <div class="product-meta">
                                                <span class="color-theme">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p>Không tìm thấy sản phẩm nào</p>';
                            }
                            wp_reset_postdata();
                        ?>
                    </div>
                </div>
                <!-- .widget-recent-product end -->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3">
                <div class="widget widget-recent-products">
                <div class="widget-title">
                <h5>Giảm giá</h5>
            </div>
            <div class="widget-content">
                <?php 
                    $args = array(
                        'post_type' => 'san_pham',
                        'tag' => 'giam-gia',
                        'posts_per_page' => 3,
                        'orderby' => 'id',
                        'order' => 'ASC'
                    );

                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        echo '<ul>';
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo '<div class="product">
                            <img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.$post->post_title.'"/>
                                <div class="product-desc">
                                    <div class="product-title">
                                    <a href="'.get_post_permalink($post->ID).'">'.$post->post_title.'</a>
                                    </div>
                                    <div class="product-meta">
                                        <span class="discount">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_cu'].'</span>
                                        <span class="color-theme">'.get_field('thong_tin_san_pham', $post->ID)[0]['gia_moi'].'</span>
                                    </div>
                                </div>
                            </div>';
                        }
                        echo '</ul>';
                    } else {
                        echo '<p>Không tìm thấy sản phẩm nào</p>';
                    }
                    wp_reset_postdata();
                ?>
            </div>
                </div>
                <!-- .widget-recent-product end -->
            </div>
        </div>
    </div>
</section>
<?php get_footer();
