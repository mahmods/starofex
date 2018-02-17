<?php
/**
 * @package Radix
 * @since Radix 1.0
 *
 */
?>

<h2 class="uppercase title"><?php the_title(); ?>
</h2>
<div class="title-star">
    <span class="ti-android-star"></span>
    <span class="ti-android-star"></span>
    <span class="ti-android-star"></span>
    <span class="ti-android-star"></span>
    <span class="ti-android-star"></span>
</div>
<div class="row image">
    <div class="col-s-12">
        <div class="portfolio-block" data-src="<?php the_post_thumbnail_url('full'); ?>">

        </div>
    </div>
</div>
<div class="row paragraph">
    <div class="col-s-12 col-m-10 col-l-8">
        <h3 class="uppercase">overflow</h3>
        <p>
            <?php the_content() ?>
        </p>
        <div class=" social">
            <?php Radix_author_socials(); ?>

        </div>
    </div>
</div>








<!--
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemtype="http://schema.org/BlogPosting" itemscope="itemscope">

	<?php Radix_post_thumbnail(); ?>

	<header class="entry-header">
		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
		<div class="entry-meta">
			<?php Radix_posted_on(); ?>
		</div>
	</header>

	<div class="entry-content clearfix">
		<?php
the_content(sprintf(
    __('Continue reading %s', 'radix'),
    the_title('<span class="screen-reader-text">', '</span>', false)
));

wp_link_pages(array(
    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'radix') . '</span>',
    'after' => '</div>',
    'link_before' => '<span>',
    'link_after' => '</span>',
    'current_before' => '',
    'current_after' => '',
    'pagelink' => '%',
));
?>
	</div>

	<footer class="entry-footer">
		<?php //Radix_entry_footer(); ?>
	</footer>
</article>

<?php if (ro_get_option('blog_author_bio')) { ?>
	<?php //get_template_part('loop/content', 'author'); ?>
<?php } ?>
-->

