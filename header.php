<!DOCTYPE html>
<html>
    <head>
       <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, inisital-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <nav class="navbar pl-5 pr-5">
        <a class="navbar-brand" href="#">
            <img src="http://letsleadgaming.test/wp-content/uploads/2020/10/logo.png" style="width:100px">
        </a>
        <ul class="navbar-nav d-flex flex-row ml-auto">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
