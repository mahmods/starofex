<?php /* Template Name:custom-page-quality.php*/ ?>
<?php get_header(); ?>
<!--Start Section Head-->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-cont.png">
    <div class="overlay">
        <h2 class="uppercase">
            <?php pll_e('Quality')?>
        </h2>
    </div>
</section>
<!--End Section Head-->
<!--Start Section Of Quality-->
<section class="quality">
    <div class="container">
        <h4 class="uppercase title"><? the_title() ?></h4>
        <div class="title-star">
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
        </div>
        <? $blocks = get_field("blocks") ?>
        <? $i = 1 ?>
        <div class="row">
            <? foreach ($blocks as $block) : ?>
            <? $block = $block['block']; ?>
            <? if ($i % 2 == 0) : ?>
            <div class="col-s-12 col-m-6 box">
                <div class="quality-slider tornado-ui">
                    <? foreach ($block['images'] as $image) : ?>
                    <div class="img-block">
                        <img src="<? echo $image['url'] ?>">
                    </div>
                    <? endforeach; ?>
                </div>
            </div>
                <div class="col-s-12 col-m-6 box">
                <p><? echo $block['content'] ?></p>
            </div>
            <? else: ?>
            <div class="col-s-12 col-m-6 box">
                <p><? echo $block['content'] ?></p>
            </div>
            <div class="col-s-12 col-m-6 box">
                <div class="quality-slider tornado-ui">
                    <? foreach ($block['images'] as $image) : ?>
                    <div class="img-block">
                        <img src="<? echo $image['url'] ?>">
                    </div>
                    <? endforeach; ?>
                </div>
            </div>
            <? endif; ?>
            <? $i++ ?>
            <? endforeach; ?>
        </div>

    </div>
</section>
<!--End Section Of Quality-->
<?php get_footer(); ?>