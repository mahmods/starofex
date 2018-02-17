<?php /* Template Name:custom-page-team.php*/ ?>
<?php get_header(); ?>
<!--Start Section Head-->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-cont.png">
    <div class="overlay">
        <h2 class="uppercase"><? pll_e('Our Team')?></h2>
    </div>
</section>
<!--End Section Head-->
<!--Start Section Of Team-->
<section class="form-contact">
    <div class="container"></div>
</section>
<section class="toutch">
    <div class="container">
    <h2 class="uppercase title"><? the_field('head_title') ?></h2>
        <div class="title-star">
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
            <span class="ti-android-star"></span>
        </div>
        <p><? the_field('head_content') ?></p>
        <? $team = get_field('team_block') ?>
        <h3 class="uppercase"><? echo $team['title'] ?></h3>
        <div class="row">
            <? foreach ($team['members'] as $member): ?>
            <div class="col-s-12 col-m-6 col-l-4 ">
                <div class="toutch-block">
                    <? if(!empty($member['title'])): ?>
                        <h4 class="uppercase title"><? echo $member['title'] ?></h4>
                    <? endif ?>
                    <div class="title-star">
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                        <span class="ti-android-star"></span>
                    </div>
                    <ul>
                        <li class="ti-android-done"><? echo $member['name'] ?></li>
                        <? if(!empty($member['email'])): ?>
                            <li class="ti-email"><? echo $member['email'] ?></li>
                        <? endif ?>
                        <? if(!empty($member['email'])): ?>
                            <li class="ti-smartphone"><? echo $member['phone'] ?></li>
                        <? endif ?>
                    </ul>
                </div>
            </div>
            <? endforeach; ?>
        </div>
    </div>
</section>
<!--End Section Get In Toutch-->
<script>
    $(document).ready(function() {
        $('.navbar-bg').addClass('navbar-head');
    })
</script>
<?php get_footer(); ?>