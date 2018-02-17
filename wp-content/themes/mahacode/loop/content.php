<?php
/**
 * @package Radix
 * @since Radix 1.0
 *
 */
?>

    <div class="blog-block table-style">
        <!--    <article id="post---><?php //the_ID(); ?><!--" -->
        <?php //post_class(); ?><!-- itemtype="http://schema.org/Blog" itemscope="itemscope">-->

        <?php if (is_sticky() && is_home() && !is_paged()) {
            //printf('<span class="sticky-pin"></span>');
        } ?>

        <?php //Radix_post_thumbnail(); ?>

        <a href="<?php the_permalink(); ?>" class="image ti-control-point"><img
                    src="<?php the_post_thumbnail_url('full'); ?>" alt=""></a>


        <!--        <header class="entry-header">-->
        <!--            <h1 class="entry-title" itemprop="headline"><a href="--><?php //the_permalink(); ?><!--">-->
        <?php //the_title(); ?><!--</a>-->
        <!--            </h1>-->
        <!--            <div class="entry-meta">-->
        <!--                --><?php //Radix_posted_on(); ?>
        <!--            </div>-->
        <!--        </header>-->


        <div class="info">
            <span><?php echo get_the_date('d M Y') ?></span>
            <a href="<?php the_permalink(); ?>">
                <h3>
                    <?php the_title() ?>
                </h3></a>
            <p>

                <?php
                /* translators: %s: Name of current post */
                the_content(sprintf(
                    __('Continue reading %s', 'radix'),
                    the_title('<span class="screen-reader-text">', '</span>', false)
                ));

                ?>
            </p>
        </div>

        <!--        <div class="entry-content clearfix">-->
        <!--            --><?php
        //            /* translators: %s: Name of current post */
        //            the_content(sprintf(
        //                __('Continue reading %s', 'radix'),
        //                the_title('<span class="screen-reader-text">', '</span>', false)
        //            ));
        //
        wp_link_pages(array(
            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'radix') . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'current_before' => '',
            'current_after' => '',
            'pagelink' => '%',
        ));
        //            ?>
        <!--        </div>-->

        <!--	<footer class="entry-footer">-->
        <!--		--><?php //Radix_entry_footer(); ?>
        <!--	</footer>-->


        <!--    </article>-->
    </div>

<?php
wp_link_pages(array(
    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'radix') . '</span>',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>',
    'current_before' => '',
    'current_after' => '',
    'pagelink' => '%',
));
//
?>