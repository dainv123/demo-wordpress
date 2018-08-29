<?php
/**
 * Displays footer widgets if assigned
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="footer-info">
    <div class="container">
        <div class="row">
            <?php 
                if(get_field('dich_vu', 'option'))
                foreach ( get_field('dich_vu', 'option') as $name => $value ) {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="panel-info">
                    <div class="info-icon">
                        <i class="icon icon-<?php echo $value['chu_de'] ?>"></i>
                    </div>
                    <div class="info-content">
                        <h4><?php echo $value['tieu_de'] ?></h4>
                        <p><?php echo $value['noi_dung'] ?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-4 footer-widget-about">
                <div class="footer-widget-title">
                    <h5><?php the_field('tieu_de', 'option') ?></h5>
                </div>
                <div class="footer-widget-content">
                    <p><?php the_field('mieu_ta', 'option') ?></p>
                    <?php 
                    if(get_field('urls', 'option'))
                    foreach ( get_field('urls', 'option') as $name => $value ) { ?>
                        <div class="footer-social">
                            <a class="share-facebook" href="<?php echo $value['facebook'] ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="share-google-plus" href="<?php echo $value['google_plus'] ?>">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a class="share-twitter" href="<?php echo $value['twitter'] ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="share-pinterest" href="<?php echo $value['pinterest'] ?>">
                                <i class="fa fa-pinterest"></i>
                            </a>
                            <a class="share-vimeo" href="<?php echo $value['vimeo'] ?>">
                                <i class="fa fa-vimeo"></i>
                            </a>
                            <a class="share-rss" href="<?php echo $value['rss'] ?>">
                                <i class="fa fa-rss"></i>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php
                custom_menu_top("footer-top");
            ?>
        </div>
    </div>
    <!-- .container end -->
</div>
<div class="footer-bar">
    <div class="container">
        <div class="powered text-center">
            <p><?php the_field('giay_phep', 'option'); ?>
            </p>
            <ul class="list-inline mb-0">
                <?php
                    custom_menu_bottom("footer-bottom");
                ?>
            </ul>
        </div>
    </div>
</div>