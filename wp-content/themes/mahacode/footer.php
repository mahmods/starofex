<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content main and all content after
 *
 * @package Radix
 * @since Radix 1.0
 */
?>

<!--Start Section Footer-->
<!--<section class="footer" data-src="<?php echo get_template_directory_uri(); ?>/img/footer1.png">-->
<section class="footer">
    <div class="container">
        <div class="row">

            <?php if (is_rtl()) : ?>
            <?php //dynamic_sidebar('footer-widget-1'); ?>
            <?php else: ?>
            <?php //dynamic_sidebar('footer-widget-2'); ?>
            <?php endif;?>
            <div class="widget_text footer-widgets widget_custom_html">
                <div style="width:160px" class="logo-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" />
                </div>
            </div>
            <div class="footer-widgets widget_text">
                <p><?php echo get_option('address'); ?></p>
                <p><?php echo get_option('phone1'); ?></p>
                <p><?php echo get_option('phone2'); ?></p>
                <p><?php echo get_option('phone3'); ?></p>
                <p><?php echo get_option('email'); ?></p>
            </div>

            <!--<div class="col-s-12 col-m-8 col-l-3 ">
                <h2 class="capitalize title-footer"> <?php pll_e('Gallary')?>
                     </h2>
                <div class="footer-star">
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                </div>
                <div class="row cols-gutter-10">

                    <?php //echo do_shortcode('[gallery link="file" ids="91,92,93,94"]')?>-->
<!--                    -->
<!--                    <div class=" col-s-12 col-m-6">-->
<!--                        <div class="img-block" data-src="img/gallary1.png">-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class=" col-s-12 col-m-6">-->
<!--                        <div class="img-block" data-src="img/gallary2.png"></div>-->
<!--                    </div>-->
<!--                    <div class=" col-s-12 col-m-6">-->
<!--                        <div class="img-block" data-src="img/gallary3.png"></div>-->
<!--                    </div>-->
<!--                    <div class=" col-s-12 col-m-6">-->
<!--                        <div class="img-block" data-src="img/gallary4.png"></div>-->
<!--                    </div>-->
                </div>
            </div>

          


    <!------------------Start Section Question---------------------->
<!--
    <section class="question">
        <div class="container">
            <div class="question-content">
                <div class="row ">
                    <div class="col-s-12 col-m-6 col-l-8 ">
                        <h6 class="uppercase">
                            <?php pll_e('get quotation for your desired product')?>
                            </h6>
                        <span>
                            <?php pll_e('provide us with your order details and get a reasonable price offer')?>
                            </span>
                    </div>

                    <div class="col-s-12 col-m-6 col-l-4">
                        <a href="<?php echo site_url()?>/quotation" target="_blank" class="uppercase"><?php pll_e('ask for a quotation')?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <!------------------End Section Question---------------------->

</section>
<!----------------------End Section Footer --------------------->


<!----------------------Start Section Copy Right --------------------->
<section class="copy">
    <div class="container">
        <div class="row">
            <div class="col-s-12 col-m-6 copy-right">
                <p>Copyright 1992-2017 <span>Stars Of Export Co</span></p>
            </div>
            <div class="col-s-12 col-m-6 maha">
                <img >

<!----------Copyright For MahaCode-------------->
<div class="mahacode-copyrights">
                        <a href="http://mahacode.com/" target="_blank" class="logo "><img style="width:150px" src="<?php echo get_template_directory_uri(); ?>/img/maha-copy.png" alt="Logo"></a>
                        <div class="mc-tooltip">
                        <h3> Design and development Maha/Code</h3>
                        <h4 class="ti-email">info@mahacode.com</h4>
                        <h4 class="ti-phone">00201007717914</h4>
                        <h4 class="ti-phone">00201093678012</h4>
                        <div class="btns-icons">
                            <a href="http://mahacode.com/" target="_blank" class="ti-home-io"></a>
                            <a href="#" target="_blank"  class="ti-whatsapp-line"></a>
                            <a href="https://www.behance.net/mahacode" target="_blank"  class="ti-behance"></a>
                            <a href="https://www.instagram.com/maha.code/" target="_blank"  class="ti-instagram"></a>
                            <a href="http://www.twitter.com/mahacode" target="_blank"  class="ti-twitter"></a>
                            <a href="https://www.facebook.com/MahaCode/" target="_blank"  class="ti-facebook"></a>
                        </div>
                    </div>
                    </div>
<!---------------->


            </div>
        </div>
    </div>
</section>
<!----------------------End Section Copy Right --------------------->

<?php wp_footer(); ?>

<!-- Required JS Files -->

<script src="<?php echo get_template_directory_uri(); ?>/js/tornado.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<script>
$('#polylang-3').removeClass();
$('#polylang-3').addClass('languge');
//$("#polylang-3 [lang='en-US']").text('En');
//$("#polylang-3 [lang='de-DE']").text('De');
//$("#polylang-3 [lang='nl-NL']").text('Nl');

</script>
<?php if(ro_get_option('scroll_to_top')): ?>
    <a href="#" class="to-top"><i class="ti-arrow-up " aria-hidden="true"></i></a>
<?php endif; ?>
</body>

</html>