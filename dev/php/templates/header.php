<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

   

    <!-- Wordpress head function -->
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

<div class="u-gridContainer">
    <div class="Logo-img">
    <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.svg" /></a>
    </div>


</div>
<div class="Navigation-wrap">
    <div class="u-gridContainer">
        <div class="gridRow">
            <div class="Home-icon ">
                <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home_button.png" /></a>
            </div>

            <div class="Nav-Toggle">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                        <use xlink:href="#icon-menu2"></use>
                     </svg>
                </a>
            </div>
            <?php include 'includes/navigation.php'; ?>

            
            <div class="Facebook-icon">
                <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.png" /></a>
                <!-- <img src="http://placehold.it/50x50/2ecc5a/2ecc5a"></img> -->
            </div>

            <div class="Twitter-icon">
                 <a href="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png" /></a>
            </div>
       </div>
    </div>
</div>
