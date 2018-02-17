<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the 
 
 
 
 
  page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Radix
 * @since Radix 1.0
 *
 */

get_header();
?>
    <!--Start Section Header-->
    <div class="header-slider tornado-ui ">
    <? $slider = get_field('slider', pll_get_post(492));?>
   <? foreach($slider as $item): ?>
        <div class="header " data-src="<? echo $item['image'] ?>">
            <div class="overlay">
                <div class="container">
                    <div class="row row-hCenter  align-center content">
                        <div class="col-s-12 col-m-8 col-l-6">
                            <h1><? echo $item['title'] ?></h1>
                            <span>For English: Laurens Borg – Tel <?php echo get_option('phone1'); ?> – email <a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></span><br>
                            <span>Für Deutsch: Tom Radder – Tel <?php echo get_option('phone1'); ?> – email <a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></span>
                            <a  class="header-button" href="<? echo get_page_link(pll_get_post($item['link']->ID)) ?>" class="capitalize">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
    <!---------------End Section Header----------------->



    <!---------------Start Section Of Our Services---------------------->
    <section class="services">
        <div class="container">
            <h2 class="uppercase title">
                <?php pll_e('our services') ?>
            </h2>
            <div class="title-star">
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
            </div>
            <div class="row">

                <?php
                $loop = new WP_Query(array('posts_per_page' => '3', 'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php

                while ($loop->have_posts()) : $loop->the_post();
                    ?>

                    <div class="col-s-12 col-m-6 col-l-4">
                        <div class="services-block wow fadeIn">
                            <div class="block-img" data-src="<?php the_post_thumbnail_url('full'); ?>">
                            </div>
                            <div class="block-content">
                                <h3 class="uppercase "> <?php the_title() ?></h3>
                                <div class="stars">
                                    <span class="ti-android-star"></span>
                                    <span class="ti-android-star"></span>
                                    <span class="ti-android-star"></span>
                                </div>
                                <p>
                                    <?php echo mb_strimwidth(strip_tags($post->post_content), 0, 200); ?>
                                </p>
                                <a  href="<?php the_permalink() ?>"
                                   class="capitalize"><?php pll_e('Read More') ?></a>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>


            </div>
<div style="display:flex;justify-content: center;">
<!-- 
   <a href="<?php echo get_site_url(); ?>/<?php pll_e('Services Link') ?>" class="capitalize button-more" style="display: inline-block;
    padding: 10px 40px;
    background-color: #7caf36;
    color: #fff;
    text-align: center;
    margin-top: 10px;
    font-weight: 600;
    -webkit-transition: all ease-in-out 0.5s;
    -moz-transition: all ease-in-out 0.5s;
    -o-transition: all ease-in-out 0.5s;
    transition: all ease-in-out 0.5s;"><?php pll_e('View More') ?></a></div>
    
    -->
        </div>
        </div>
    </section>
    <!---------------End Section Of Our Services---------------------->
    
    
<!-- Start Section of Gallary Home-->
<? $gallery = get_field('bottom_gallery', pll_get_post(492)); ?>
<? if ($gallery) : ?>
<section class="gallary-home">
    <div class="row no-gutter row-stretch">
        <? foreach ($gallery as $image) : ?>
        <div class="sol-s-12 col-m-3 ">
            <div class="block">
                <!-- Modal Button -->
                <a href="#"  data-modal="modal-demo-<?=$image['id']?>">
                    <img src="<?= $image['url'] ?>">
                </a>
                
                <!-- Modal Box -->
                <div class="modal-box" id="modal-demo-<?=$image['id']?>">
                    <button class="close-modal ti-clear"></button>
                    <img src="<?= $image['url'] ?>">
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</section>
<? endif; ?>
<!-- End Section of Gallary Home-->


    <!----------------------Start Section Of  Our Core Products--------------------->

<!--
    <section class="products">
        <div class="container">
            <h2 class="uppercase title"><?php pll_e('Our Core Products') ?>
            </h2>
            <div class="title-star">
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
            </div>
            <div class="row content">
                <?php
                $loop = new WP_Query(array('posts_per_page' => '1', 'cat' => '19', 'post_type' => 'our_products', 'orderby' => 'post_id', 'order' => 'ASC', 'offset' => 0)); ?>
                <?php

                while ($loop->have_posts()) : $loop->the_post();
                    ?>

                    <div class="col-s-12 col-m-12 col-l-6">
                        <div class="img-block-big" data-src="<?php the_post_thumbnail_url('full'); ?>">
 <?php the_post_thumbnail_url('full'); ?> 
                            <a href="<?php the_permalink() ?>"
                               data-title="<?php the_title() ?> "
                               class="overlay">
                                <span>+</span>
                                <p><?php the_title() ?></p>
                            </a>
                        </div>
                    </div>

                <?php endwhile;
                wp_reset_postdata(); ?>


                <div class="col-s-12 col-m-12 col-l-6">
                    <div class="row">

                        <?php
                        $loop = new WP_Query(array('posts_per_page' => '4', 'cat' => '19', 'post_type' => 'our_products', 'orderby' => 'post_id', 'order' => 'ASC', 'offset' => 1)); ?>
                        <?php

                        while ($loop->have_posts()) : $loop->the_post();
                            ?>

                            <div class="col-s-12 col-m-6 small-block">
                                <div class="img-block" data-src="<?php the_post_thumbnail_url('full'); ?>">
                                    <a href="<?php the_permalink() ?>"
                                       data-title="<?php the_title() ?>"
                                       class="overlay">
                                        <span>+</span>
                                        <p class="capitalize"><?php the_title() ?></p>
                                    </a>
                                </div>
                            </div>


                        <?php endwhile;
                        wp_reset_postdata(); ?>


                    </div>
                </div>
            </div>
            <a  href="<?php echo get_site_url(); ?>/<?php pll_e('Products Link') ?>" class="capitalize button-more"><?php pll_e('View More') ?></a>
        </div>

    </section>
-->

    <!----------------------End Section Of  Our Core Products--------------------->


    <!----------------------Start Section Of what We Have --------------------->

<!--
    <section class="have">
        <div class="container">
            <h2 class="uppercase title"><?php pll_e('what else do we have ?') ?> </h2>
            <div class="title-star">
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
            </div>
            <div class="row">
                <div class="col-s-12 col-l-4 tabs">
                    <ul>

                        <?php
                        $loop = new WP_Query(array('posts_per_page' => '4', 'cat' => '21', 'post_type' => 'our_products', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                        <?php

                        while ($loop->have_posts()) : $loop->the_post();
                            ?>


                            <li data-class="tab<?php echo get_the_ID() ?>">
                                <i class="img">
                                    <img src="<?php echo wp_get_attachment_image_src(get_post_meta(get_the_ID(), 'icon', true))[0] ?>">
                                </i>
                                <h3><?php the_title() ?></h3>
                            </li>


                        <?php endwhile;
                        wp_reset_postdata(); ?>


                    </ul>
                </div>
                <div class="col-s-12 col-l-8">
                    <div class="all-tabs">


                        <?php
                        $loop = new WP_Query(array('posts_per_page' => '4', 'cat' => '21', 'post_type' => 'our_products', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                        <?php

                        while ($loop->have_posts()) : $loop->the_post();
                            ?>
                            <div class="tab<?php echo get_the_ID() ?> block vAlign-center"
                                 data-src="<?php the_post_thumbnail_url('full'); ?>">
                                <div class="overlay">
                                    <p>
                                        <?php echo mb_strimwidth(strip_tags($post->post_content), 0, 200); ?>

                                    </p>
                                    <a href="<?php the_permalink() ?>"
                                       class="capitalize"><?php pll_e('Read more') ?></a>
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata(); ?>


                    </div>

                </div>
            </div>
        </div>
    </section>
-->

    <!----------------------End Section Of what We Have --------------------->

    <!----------------------Start Section Of Quality Awards--------------------->

<!--
    <section class="awards">
        <h2 class="uppercase title"><?php pll_e('quality awards') ?>  </h2>
        <div class="title-star">
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
        </div>
        <div class="campany" data-src="<?php echo get_template_directory_uri(); ?>/img/campany.png">
            <div class="container">

                <div class="row row-zCenter">
                    <?php
                    $loop = new WP_Query(array('posts_per_page' => '10', 'post_type' => 'awards', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                    <?php

                    while ($loop->have_posts()) : $loop->the_post();
                        ?>

                        <div class="col-s-12 col-m-6 col-l-3">
                            <div class="campany-block">
                                <a href="quality-certificates"><img src="<?php the_post_thumbnail_url('full'); ?>"></a>
                            </div>
                        </div>


                    <?php endwhile;
                    wp_reset_postdata(); ?>


                </div>
            </div>
        </div>
    </section>
-->

    <!----------------------End Section Of Quality Awards --------------------->


<?php get_footer(); ?>