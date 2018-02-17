<?php
/**
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Radix
 * @since Radix 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="icon" type="image/png" sizes="192x192" href="img/Logo-title.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/Logo-title.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>//ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Required CSS Files -->


<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.2.1.min.js"></script>
<?php wp_head(); ?>


<?php if (is_rtl()) : ?>

<?php else:?>

    <link href="<?php echo get_template_directory_uri(); ?>/css/tornado.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/theme.css" rel="stylesheet">
<?php endif;?>

<!-- Required JS Files -->

</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="http://schema.org/WebPage">
<!--
<div class=" social">
                    <a target="_blank" href="<?php echo ro_get_option('facebook');?>" class="ti-facebook"></a>
                    <a target="_blank" href="<?php echo ro_get_option('linkedin');?>" class="ti-linkedin"></a>
                    <a target="_blank" href="<?php echo ro_get_option('google-plus');?>" class="ti-googleplus"></a>
                </div>
-->



<!----------Start Section  Of Navbar--------->
<section class="navbar-bg   sticky-navbar">

    <div class="container-fluid">

        <div class="row no-gutter">

            <div class="col-s-10 col-m-6 col-l-2 logo-offset">

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo white-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="Stars Of Export"></a>

<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo black-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/black-logo.png" alt="Stars Of Export"></a>
                <!-- <span class="slogan">Stars Of Export<span> -->
            </div>
            <div class="col-s-2 col-m-6 col-l-7">
                <nav class="navbar">
                    <div class="navigation-menu ">
                        <?php Radix_main_nav(); ?>

                        <!--                        <ul>-->
                        <!--                            <li class="active"><a href="Home" class="ti-home">Home</a></li>-->
                        <!--                            <li><a href="overview.html">About Us</a>-->
                        <!---->
                        <!--                                <ul>-->
                        <!--                                    <li><a target="_blank" href="overview.html">Overview </a></li>-->
                        <!--                                    <li><a target="_blank" href="certificates.html">Certificates </a></li>-->
                        <!---->
                        <!--                                </ul>-->
                        <!--                            </li>-->
                        <!--                            <li><a target="_blank" href="products.html"> products</a></li>-->
                        <!--                            <li><a target="_blank" href="contact-us.html"> Quotation</a></li>-->
                        <!--                            <li><a target="_blank" href="events.html"> Events</a></li>-->
                        <!--                            <li><a target="_blank" href="contact-us.html">Contact Us</a></li>-->
                        <!--                        </ul>-->

                    </div>
                </nav>

            </div>
            <div class="col-s-6 col-m-6 col-l-2 ">

                <?php dynamic_sidebar('footer-widget-1'); ?>

                <!--
                <ul class="info-phon">
                  <li class="ti-phone">      (+20)111-939-4444 </li>
                  <li class="ti-email">     info@starsofexport.com </li>
                </ul>

-->

            </div>

                <div class="col-s-6 col-m-6 col-l-1 social">
                    <a target="_blank" href="<?php echo ro_get_option('facebook');?>" class="ti-facebook"></a>
                    <a target="_blank" href="<?php echo ro_get_option('linkedin');?>" class="ti-linkedin"></a>
            </div>
        </div>
    </div>
</section>
<!----------End Section  Of Navbar--------->