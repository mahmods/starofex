<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 25/10/17
 * Time: 01:09 م
 */

?>

<?php /* Template Name:custom-page-events.php*/ ?>



<?php

get_header();

$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>


<!---------------------------------Start Section Head-------------------------------->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/event.png">
    <div class="overlay">
        <h2 class="uppercase"><?php pll_e('Events')?></h2>
<!--
        <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="uppercase ti-arrow-right ">
                <?php pll_e('Home')?></a><?php pll_e('Events')?></p>
-->
    </div>

</section>

<!---------------------------------End Section Head---------------------------------->

<!-------------Start Section Of Products--------------->

<section class="event content-page">
    <div class="container">

        <div class="row">

            <?php
            $loop = new WP_Query(array('posts_per_page' => '20', 'post_type' => 'our_events', 'orderby' => 'post_id')); ?>
            <?php

            while ($loop->have_posts()) : $loop->the_post();
                /*setup_postdata($post2);*/
                ?>

                <div class="col-s-12 col-m-12">
                    <!--<div class="product-block">
                        <div class="img-product">
                            <img src="<?php the_post_thumbnail_url('full'); ?>">
                        </div>
                        <a class="overlay-product" href="<?php the_post_thumbnail_url('full'); ?>" data-lightbox="image-name" data-title="<?php echo the_title()?>">
                            <p><?php echo the_title()?> </p>
                        </a>
                    </div>
                    -->

                    <a href="<?php echo the_permalink()?>"><h2 class="uppercase title"><?php echo the_title()?> </h2>
                    </a>
                    <div class="title-star">
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                    </div>
                    <div class="row event-block1">
                        <div class="col-s-12">
                            <div class="event-img" >
<img src="<?php the_post_thumbnail_url('large'); ?>" style="width:50vw; display:block; margin:0 auto;">
                            </div>
                        </div>
                    </div>
                    <div class="row event-block2">
                        <div class="col-s-12 col-m-3 event-description">
                            <h4><?php pll_e('Small Description For Event')?></h4>
                        </div>
<!--                        <div class="col-s-12 col-m-3 event-location">-->
<!--                            <p class="ti-place">location</p>-->
<!--                        </div>-->
<!--                        <div class="col-s-12 col-m-3 event-time">-->
<!--                            <p class="ti-ios-time-line capitalize">time of event</p>-->
<!--                        </div>-->
                        <div class="col-s-12 col-m-3 event-social">
                            <div class=" event-social">
                                <?php Radix_author_socials(); ?>
                            </div>
                        </div>
                        <div class="col-s-12  event-block3">
                            <p>

                                <?php echo mb_strimwidth(strip_tags($post->post_content),0,200); ?>

                            </p>
                        </div>
                    </div>




                </div>


            <?php endwhile;
            wp_reset_postdata(); ?>



            <?php echo paginate_links(); ?>

        </div>
    </div>
</section>
<!-------------End Section Of Products--------------->


<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        $('.navbar-bg').addClass('navbar-head');
    })
</script>





