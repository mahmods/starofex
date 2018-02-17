<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Radix
 * @since Radix 1.0
 *
 */
get_header(); ?>


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


            <div class="row-fluid">
                <div id="primary" class="content-area">
                    <section class="error-404 not-found">
                        <div class="page-content">
                            <div class="container clearfix">
                                <div class="row">
                                    <div class="error-404-box">
                                        <div class="error-message"><?php echo __('Error 404', 'radix'); ?></div>
                                        <p class="lead"><?php echo __('It looks like nothing was found at this location.', 'radix'); ?></p>
                                        <input type="button" value="<?php echo __('Go Back', 'radix'); ?>"
                                               onclick="history.back(-1)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="container clearfix">
                                <div class="row">
						<span class="search-text">
						<p><?php echo __('Or maybe try a search?', 'radix'); ?></p>
						</span>
                                    <?php get_search_form(); ?>
                                </div>
                                <br>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </div>
    </div>
    <!-- // Page Content -->

    <?php get_footer(); ?>
