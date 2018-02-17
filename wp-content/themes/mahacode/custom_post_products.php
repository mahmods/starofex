<?php
/**
 * Template Name: Products View
 *
 */

get_header();
?>
<!--Start Section Head-->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-prod-port.png">
    <div class="overlay">
        <h2 class="uppercase"><?php the_title(); ?></h2>
    </div>
</section>
<!--End Section Head-->
<section class="portfolio-product content-page">
    <div class="container">
        <h2 class="uppercase title"><?php the_title(); ?></h2>
        <div class="title-star">
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
        </div>
        <div class="row ">
            <div class="col-s-12 col-m-6 col-l-9 ">
            <?php while (have_posts()) : the_post(); ?>
                <? $slider = get_field("slider") ?>
                <? if($slider): ?>
                <div class="product-slider tornado-ui image">
                <? foreach($slider as $image): ?>
                    <div class="portfolio-block" data-src="<?php echo wp_get_attachment_url( $image['ID'], 'full' ); ?>"></div>
                <? endforeach; ?>
                </div>
                <? endif; ?>
            </div>
            <div class="col-s-12 col-m-6 col-l-3">
                <h2>overview</h2>
                <?php the_content(); ?>
                <div class="accordion tornado-ui">
                    <h2>Specifications</h2>
                    <? $specifications = get_field("specifications") ?>
                    <? if($specifications): ?>
                    <? foreach($specifications as $item): ?>
                        <!-- Accordion item -->
                    <div class="accordion-item">
                        <div class="accordion-title ti-chevron-down"><? echo $item['title']; ?></div>
                        <div class="accordion-content"><? echo $item['content']; ?></div>
                    </div>
                    <? endforeach; ?>
                    <? endif; ?>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('.navbar-bg').addClass('navbar-head');
    })
</script>
<?php get_footer(); ?>