<?php /* Template Name:custom-page-products.php*/ ?>
<?php get_header(); ?>
<!---------------------------------Start Section Head-------------------------------->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-products.png">
    <div class="overlay">
        <h2 class="uppercase"><?php pll_e('Products')?></h2>
    </div>
</section>
<!---------------------------------End Section Head---------------------------------->
<!-------------Start Section Of Products--------------->
<section class="products-page content-page">
    <div class="container">
        <div class="row">

            <?php
            $loop = new WP_Query(array('posts_per_page' => '20', 'post_type' => 'our_products', 'orderby' => 'post_id')); ?>
            <?php

            while ($loop->have_posts()) : $loop->the_post();
            /*setup_postdata($post2);*/
            ?>

            <div class="col-s-12 col-m-6 col-l-3">
                <div class="product-block">
                    <div class="img-product">
                        <img src="<?php the_post_thumbnail_url('full'); ?>">
                    </div>
                    <a class="overlay-product" href="<?php the_permalink() ?>" data-title="<?php echo the_title()?>">
                        <p><?php echo the_title()?> </p>
                    </a>
                </div>
            </div>


            <?php endwhile;
            wp_reset_postdata(); ?>



            <?php echo paginate_links(); ?>

        </div>
    </div>
</section>
<!-------------End Section Of Products--------------->

<!--Start Section Of Avability-->

<div class="container available">
    <div class="row">
        <? $blocks = get_field("blocks") ?>
        <? foreach ($blocks as $block) : ?>
        <div class="col-s-12 col-l-5">
            <div>
                <h3><?= $block['title'] ?></h3>
                <p><?= $block['content'] ?></p>
            </div>
        </div>
        <div class="col-s-12 col-l-7">
            <div class="img-avability">
                <img src="<?= $block['image'] ?>">
            </div>
        </div>
        <? endforeach; ?>
    </div>
</div>
<? $gallery = get_field("gallery") ?>
<? if ($gallery) : ?>
<div class="container-fluid products-gallery">
    <div class="row no-gutter">
    <? foreach ($gallery as $images) : ?>
        <div class="col-s-12 col-m-4 col-l-2 gallary">
            <img src="<?= $images['url'] ?>">
        </div>
    <? endforeach; ?>
    </div>
</div>
<? endif; ?>
<!--Start Section Of Avability-->
<?php get_footer(); ?>