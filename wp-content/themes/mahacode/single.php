<?php
/**
 * The Template for displaying all single posts.
 *
 * Please note that this is the WordPress construct of posts
 * and that other 'posts' on your WordPress site will use a
 * different template.
 *
 * @package Radix
 * @since Radix 1.0
 *
 */

get_header();
$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>



    <!---------------------------------Start Section Head-------------------------------->
    <section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-prod-port.png">
        <div class="overlay">
            <h2 class="uppercase"><?php the_title(); ?></h2>
<!--
            <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" target="_blank" class="uppercase ti-arrow-right ">
                    <?php pll_e('Home')?></a>
                <?php the_title(); ?></p>
-->
        </div>

    </section>

    <!---------------------------------End Section Head---------------------------------->


    <section class="portfolio-product content-page">
    <div class="container">



                <div id="primary" class="content-area <?php echo $col; ?>">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('loop/content', 'single', get_post_format()); ?>
                        <?php if (ro_get_option('post_navigation')) { ?>
                            <?php Radix_content_nav('nav-below'); ?>
                        <?php } ?>
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if (comments_open() || '0' != get_comments_number())
                            comments_template();
                        ?>
                    <?php endwhile; // end of the loop. ?>
                </div> <!-- #primary -->



    </div>
    </section>



<?php get_footer(); ?>
<script>
    $(document).ready(function(){
        $('.navbar-bg').addClass('navbar-head');
    })
</script>
