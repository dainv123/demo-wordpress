<?php
/*
 Template Name: Liên hệ
 */
?>
 <?php get_header(); ?>
 
 <section id="page-title" class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h1>Liên hệ</h1>
            </div>
            <!-- .col-md-6 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="active">contact</li>
                </ol>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<section class="google-maps pb-0">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div id="googleMap" style="width:100%;height:447px;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 widget-contact pl-0 pr-0 p-none-xs p-none-sm">
                <!-- <form id="contact-form" action="http://demo.zytheme.com/autoshop/assets/php/sendmail.php" method="post">
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-30" name="contact-name" id="name" placeholder="Name :" required/>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control mb-30" name="contact-email" id="email" placeholder="Email :" required/>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control mb-30" name="contact-message" id="message" rows="4" placeholder="Message" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" id="submit-message" class="btn btn-primary btn-block">Send Message</button>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-xs">
                        <div id="contact-result">
                        </div>
                    </div>
                </form> -->
                <?php
                    while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php
                    endwhile; 
                    wp_reset_query();
                ?>
            </div>
            <!-- .col-md-8 end -->
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="contct-widget-content">
                    <p class="mb-0"></i><?php the_field('mieu_ta', 'option'); ?></p>
                    <div class="widget-contact-info mt-md">
                        <div class="col-xs-12 col-sm-12 col-md-6 pl-0 mb-30-xs mb-30-sm">
                            <h6>Phone :</h6>
                            <p><i class="fa fa-phone"></i><?php the_field('so_dien_thoai_di_dong', 'option'); ?></p>
                            <p class="mb-0"><i class="fa fa-fax"></i><?php the_field('so_dien_thoai_ban', 'option'); ?></p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-6">
                            <h6>Email :</h6>
                            <p class="mb-0"><i class="fa fa-envelope"></i><?php the_field('email', 'option'); ?></p>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-12 col-md-12 pl-0 mt-30 mb-30-xs mb-30-sm">
                            <h6>Address :</h6>
                            <p class="mb-0"><i class="fa fa-map-marker"></i><?php the_field('dia_chi', 'option'); ?></p>
                        </div>
                        <!-- .col-md-12 end -->
                    </div>
                </div>
            </div>
            <!-- .col-md-4 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
  
 <?php get_footer(); ?>