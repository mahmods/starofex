<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Radix
 * @since Radix 1.0
 *
 */
?>

<!--
<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
	<div id="sidebar" class="col-md-3" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">
		<div class="sidebar-padder clearfix">
			<aside class="widget-area">
				<?php dynamic_sidebar( 'sidebar' ); ?>
			</aside>
		</div>
	</div>
<?php } ?>
-->


<!-- Widgets Side -->
<div class="col-s-12 col-l-4 widgets">
    <!-- Widget -->
    <div class="content-box prim-theme">
        <h2 class="title"><?php pll_e('الاقسام والتصنيفات')?></h2>

        <ul class="categorys-list">

            <li class="ti-chevron-left"><a href="<?php echo get_permalink(82)?>">سباقات</a> <span></span></li>
            <li class="ti-chevron-left"><a href="<?php echo get_permalink(80)?>">فيديوهات</a> <span></span></li>
            <li class="ti-chevron-left"><a href="<?php echo get_site_url().'/famous/الكل'?>">شخصيات بارزة</a> <span></span></li>
            <li class="ti-chevron-left"><a href="<?php echo get_permalink(78)?>">الاخبار الشائعه </a> <span></span></li>

            <?php
            $categories = get_categories(array('hide_empty' =>0,'show_count'=> 1,'style'=> 'no-list'));
            foreach($categories as $category) {
            echo '<li class="ti-chevron-left">
                    <a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>
                </li>';
            }
            ?>


        </ul>
    </div>
    <!-- // Widget -->

    <!-- Widget -->
    <div class="content-box prim-theme">
        <h2 class="title"><?php pll_e('مقالات مميزة')?></h2>


        <?php
        $loop=new WP_Query(array('posts_per_page'=>'5','category' => 0,'post_type' => 'post','orderby'=>'post_id','order'=>'DESC'));?>
        <?php

        while($loop->have_posts()) : $loop->the_post();
            /*setup_postdata($post2);*/
            ?>
            <!-- Small News -->
            <div class="small-news table-style">
                <a href="<?php the_permalink(); ?>" class="image ti-control-point">
                    <img src="<?php the_post_thumbnail_url( 'full' );?>" alt=""></a>
                <div class="info">
                    <a href="<?php the_permalink(); ?>">
                        <h3>
                            <?php echo mb_strimwidth($post->post_title,0,200); ?>

                        </h3></a>
                </div>
            </div>
            <!-- // Small News -->
        <?php endwhile;
        wp_reset_postdata(); ?>





    </div>
    <!-- // Widget -->

    <!-- Countdown Banner -->
    <div class="countdown-banner">
        <?php
        $loop=new WP_Query(array('posts_per_page'=>'1','post_type'=>'racing_soon','orderby'=>'post_id','order'=>'DESC'));?>
        <?php

        while($loop->have_posts()) : $loop->the_post();
            /*setup_postdata($post2);*/
            ?>


            <div class="content-box">
                <a href="#" class="logo-x">
                    <img src="<?php the_post_thumbnail_url( 'full' );?>" alt=""></a>
                <div class="reding-area">
                    <a href="#" class="logo-x2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/booking-logo2.png" alt=""></a>
                    <h3><?php pll_e('العد التنازلى الي')?><span>

                            <?php echo mb_strimwidth($post->post_title,0,200); ?>

                            </span></h3>
                    <div id="counter" class="counter"></div>
                    <!--2018/03/01-->
                    <script type="text/javascript">
                        $(".counter").countdown("<?php echo get_post_meta( get_the_ID(), 'start_date', true)?>", function(event) {
                            $(this).html(event.strftime('<span>%D<i>D</i></span> <span>%H<i>H</i></span> <span>%M<i>M</i></span> <span>%S<i>S</i></span>'));
                        });
                    </script>

                </div>
            </div>


        <?php endwhile;
        wp_reset_postdata(); ?>
    </div>
    <!-- // Countdown Banner -->

    <!-- Widget -->
    <div class="content-box prim-theme">
        <h2 class="title"><?php pll_e('احدث الفيديوهات')?></h2>
        <!-- Small News -->


        <?php
        $loop=new WP_Query(array('posts_per_page'=>'5','post_type'=>'videos','orderby'=>'post_id','order'=>'DESC'));?>
        <?php

        while($loop->have_posts()) : $loop->the_post();
            /*setup_postdata($post2);*/
            ?>

            <div class="small-news table-style">
                <a href="<?php the_permalink(); ?>" class="image ti-control-point">
                    <img src="<?php the_post_thumbnail_url( 'full' );?>" alt=""></a>
                <div class="info">
                    <a href="<?php the_permalink(); ?>">
                        <h3>
                            <?php echo mb_strimwidth($post->post_title,0,200); ?>

                        </h3></a>
                </div>
            </div>

        <?php endwhile;
        wp_reset_postdata(); ?>





    </div>
    <!-- // Widget -->

</div>
<!-- // Widgets Side -->
