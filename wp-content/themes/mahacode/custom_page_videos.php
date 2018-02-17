<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 25/10/17
 * Time: 01:09 م
 */

?>

<?php /* Template Name:custom-page-videos.php*/ ?>



<?php

get_header();

$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>

<!-- Page Head -->
<div class="page-head">
    <div class="container">
        <h1><?php //the_title(); ?></h1>

        <div class="breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php pll_e('الرئيسيه')?></a>
            <span>--></span>
            <span><?php echo get_the_title() ?></span>
            <!--                <span>--></span>
            <!--                <span>--><?php //the_title(); ?><!--</span>-->
        </div>
    </div>
</div>
<!-- // Page Head -->


<!-- Page Content -->
<div class="page-content container">
    <div class="row row-reverse">
        <!-- Content Side -->

        <div class="col-s-12 col-l-8">


            <?php
            $loop = new WP_Query(array('posts_per_page' => '20', 'post_type' => 'videos', 'orderby' => 'post_id')); ?>
            <?php

            while ($loop->have_posts()) : $loop->the_post();
                /*setup_postdata($post2);*/
                ?>
                <div class="blog-block table-style">

                    <?php if (is_sticky() && is_home() && !is_paged()) {
                        //printf('<span class="sticky-pin"></span>');
                    } ?>


                    <h3 style="display: block;">

                        <?php the_title()?>

                    </h3>
                    <br clear="all"/>


                    <iframe width="100%" height="278" src="<?php echo get_post_meta( get_the_ID(), 'video', true)?>" frameborder="0" ></iframe>



                </div>


                <!--    <div class="news-block col-s-12 col-m-6 col-l-4">-->
                <!--        <div data-src="--><?php //the_post_thumbnail_url( 'full' );?><!--">-->
                <!--            <a href="--><?php //the_permalink(); ?><!--" class="ti-zoom-in"></a>-->
                <!--        </div>-->
                <!--        <a href="--><?php //the_permalink(); ?><!--"><h3>-->
                <!--                --><?php //echo mb_strimwidth($post->post_title,0,200); ?>
                <!---->
                <!--            </h3></a>-->
                <!--    </div>-->

            <?php endwhile;
            wp_reset_postdata(); ?>



            <?php echo paginate_links(); ?>

        </div> <!-- #primary -->


        <?php get_sidebar(); ?>


    </div>
</div>
<!-- // Page Content -->

<?php get_footer(); ?>
