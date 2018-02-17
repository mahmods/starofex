<?php
/**
 * Created by PhpStorm.
 * User: mustafa
 * Date: 25/10/17
 * Time: 01:09 م
 */

?>

    <?php /* Template Name:custom-page-quality.php*/ ?>



    <?php

get_header();

$col = 'col-md-12';
if (is_active_sidebar('sidebar')) {
    $col = 'col-md-9';
} ?>

        <!---------------------------------Start Section Head-------------------------------->
        <section class="head" data-src="<?php echo get_template_directory_uri(); ?>/img/bg-cont.png">
            <div class="overlay">
                <h2 class="uppercase">
                    <?php pll_e('Quality')?>
                </h2>
                <p>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="uppercase ti-arrow-right">
                        <?php pll_e('Home')?>
                    </a>
                    <?php pll_e('Quality')?>
                </p>
            </div>

        </section>

        <!---------------------------------End Section Head---------------------------------->

        <!-------------Start Section Of Quality--------------->



        <section class="quality">
            <div class="container">
                <h4 class="uppercase title"> Quality</h4>
                <div class="title-star">
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                    <span class="ti-android-star"></span>
                </div>
                <div class="row">
                    <div class="col-s-12 col-m-6">
                        <p>
                            The complete distribution of Harva is temperature controlled. Next to this we have a number of cold stores with different temperatures settings. In this way all the products are kept at all times under the right conditions when they are passing our distribution center. Obviously, all cooling cells are continuously electronically monitored, for correct functioning.
                        </p>
                    </div>
                    <div class="col-s-12 col-m-6">
                        <div class="quality-slider tornado-ui">
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                        </div>
                    </div>

                    <div class="col-s-12 col-m-6">
                        <p>
                            The complete distribution of Harva is temperature controlled. Next to this we have a number of cold stores with different temperatures settings. In this way all the products are kept at all times under the right conditions when they are passing our distribution center. Obviously, all cooling cells are continuously electronically monitored, for correct functioning.
                        </p>
                    </div>
                    <div class="col-s-12 col-m-6">
                        <div class="quality-slider tornado-ui">
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                            <div class="img-block">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/Seasons.png">
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-------------End Section Of Quality--------------->


        <?php get_footer(); ?>
        <script>
            $(document).ready(function() {
                $('.navbar-bg').addClass('navbar-head');
            })

        </script>
