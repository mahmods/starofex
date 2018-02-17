<?php /* Template Name:custom-page-certificates.php*/ ?>
<?php get_header(); ?>
<!--Start Section Head-->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-cert.png">
    <div class="overlay">
        <h2 class="uppercase"><?php pll_e('Certificates') ?></h2>
    </div>
</section>
<!--End Section Head-->
<!--Start Section Of certificates-->
<section class="certificates content-page">
    <div class="container">
        <div class="row">
            <? foreach(get_field('certificates') as $cert) : ?>
            <div class="col-s-12 col-m-6 col-l-4">
                <div class="certificates">
                    <div class="img"><img src="<? echo $cert['image'] ?>"></div>
                    <h3><? echo $cert['name'] ?></h3>
                    <? if (!empty($cert['file'])) : ?>
                    <a href="<? echo $cert['file'] ?>"><? pll_e('Download certificate') ?></a>
                    <? endif; ?>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<!--End Section Of certificates-->


<?php get_footer(); ?>