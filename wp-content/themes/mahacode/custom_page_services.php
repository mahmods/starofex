<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 25/10/17
 * Time: 01:09 م
 */

?>

<?php /* Template Name:custom-page-services.php*/ ?>



<?php

get_header();

$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>


<!---------------------------------Start Section Head-------------------------------->
<section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/event.png">
    <div class="overlay">
        <h2 class="uppercase"><?php wp_title('')?></h2>
        <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"  class="uppercase ti-arrow-right ">
                <?php pll_e('Home')?></a><?php wp_title('')?></p>
    </div>

</section>

<!---------------------------------End Section Head---------------------------------->

 <!---------------Start Section Of Our Services---------------------->
    <section class="services">
        <div class="container">
            <h2 class="uppercase title">
                <?php wp_title('') ?>
            </h2>
            <div class="title-star">
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
                <span class="ti-android-star"></span>
            </div>
</br>
            <!-- <p class="under-title"><?php pll_e('our services text') ?></p> -->
            <div class="row">

                <?php
                $loop = new WP_Query(array('posts_per_page' => '10', 'post_type' => 'services', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                <?php

                while ($loop->have_posts()) : $loop->the_post();
                    ?>

                    <div class="col-s-12 col-m-6 col-l-4">
                        <div class="services-block wow fadeInLeft">
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

<?php echo paginate_links(); ?>


            </div>
        </div>
    </section>
    <!---------------End Section Of Our Services---------------------->


<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        $('.navbar-bg').addClass('navbar-head');
    })
</script>





