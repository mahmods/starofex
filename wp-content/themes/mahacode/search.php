<?php
/**
 * The template for displaying search results pages.
 *
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
            <!--                <a href="#">الرئيسيه</a>-->
            <!--                <span>--></span>
            <!--                <span>الاخبار</span>-->
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


            <div id="primary" class="hentry content-area <?php echo $col; ?>" itemtype="http://schema.org/SearchResultsPage"
                 itemscope="itemscope">
                <?php if (have_posts()) : ?>
                    <header class="entry-header">
                        <h2 class="search-title"><?php $allsearch = new WP_Query("s=$s&showposts=-1");
                            $key = esc_html($s, 1);
                            $count = $allsearch->post_count;
                            echo $count . ' ';
                            wp_reset_query(); ?><?php printf(__(' Search Results found for', 'radix') . '<span class="text-muted"> %s</span>', get_search_query()); ?></h2>
                    </header>
                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop/content', 'search'); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php get_template_part('loop/content', 'none'); ?>
                <?php endif; ?>
            </div> <!--#primary -->
        </div> <!--#primary -->


        <?php get_sidebar(); ?>


    </div>
</div>
<!-- // Page Content -->

<?php get_footer(); ?>
