<?php
/**
 * @package Radix
 * @since Radix 1.0
 */

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
<!--                <span>--><?php //echo get_the_title() ?><!--</span>-->
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


                <div id="primary" class="content-area <?php echo $col; ?>" role="main">
                    <?php if (have_posts()) { ?>
                        <?php while (have_posts()) {
                            the_post(); ?>
                            <?php get_template_part('loop/content', get_post_format()); ?>
                        <?php } ?>
                        <?php echo Radix_pagination(); ?>
                    <?php } else { ?>
                        <?php get_template_part('loop/content', 'none'); ?>
                    <?php } ?>
                </div> <!-- #primary -->

            </div> <!-- #primary -->


            <?php get_sidebar(); ?>


        </div>
    </div>
    <!-- // Page Content -->

<?php get_footer(); ?>