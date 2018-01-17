<?php
/**
 * Header Template
 *
 * The header template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the top of the file. It is used mostly as an opening
 * wrapper, which is closed with the footer.php file. It also executes key functions needed
 * by the theme, child themes, and plugins
 *
 * @package Blink Design Theme
 * @subpackage Template
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,200,300,400,600,900|Open+Sans:300,400,600|Exo+2:100" rel="stylesheet">
    <link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wp-paginate.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <?php get_header(); ?>
</head>
<body>
    <header>
        <!--<div class="background_image"></div>-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url('/'); ?>">Blink Design</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo home_url('/home'); ?>">Home</a>
                        </li>
                        <li><a href="<?php echo home_url('/about'); ?>">About</a>
                        </li>
                        <li><a href="<?php echo home_url('/blog'); ?>">Blog</a>
                        </li>
                        <li><a href="<?php echo home_url('/contact'); ?>">Contact</a>
                        </li>
                        <li>
                            <?php get_search_form(); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
