<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BHE - Home</title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="text/image">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- css files -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="scss/theme-style.css">
    <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>


<body>
    <div class="thetop"></div>
    <div class="load-complete"></div>
    <header>
        <div class="head-logo">
            <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="traperent-logo"></a>
        </div>
        <div class="head-right">
            <div class="head-menu">
                <ul>
                    <li><a href="#about" data-scroll-nav="0" class="active">About Us</a><span></li>
                    <li><a href="#core-service" data-scroll-nav="1">Services</a></li>
                    <li><a href="#success" data-scroll-nav="2">Our Success</a></li>
                    <li><a href="#meet-team" data-scroll-nav="5">Leadership</a></li>
                    <li><a href="#contact-us" data-scroll-nav="6">Contact Us</a></li>
                    </ul>
                    <div class="burger">Menu <span></span></div>
                </div>
            </div>
      
    </header>