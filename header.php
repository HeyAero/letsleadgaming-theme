<!DOCTYPE html>
<html>
    <head>
       <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, inisital-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <div class="notice-div sticky-top text-center">
        Please note that this website is for demonstration purposes only. Visit <a href="http://yourlocaldev.com/portfolio/">here</a> to view more of my work.
    </div>
    <nav class="navbar pl-5 pr-5">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://letslead.yourlocaldev.com/wp-content/uploads/2020/10/logo.png" style="width:100px">
            </a>
            <div class="d-none d-md-flex">
                <ul class="navbar-nav d-flex flex-row ml-auto">
                    <li><a href="#" class="active">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">EVENTS</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="d-flex d-md-none ml-auto">
                <a id="mobileMenu"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
            </div>
        </div>
    </nav>
