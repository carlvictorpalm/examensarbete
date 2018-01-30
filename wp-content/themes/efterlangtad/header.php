<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
      <?php wp_head(); ?>
  </head>
  <body>
    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <?php
           wp_nav_menu( array(
              'menu'              => 'primary',
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
           );
          ?>
            <div class="topnav" id="myTopnav">
                <a href="#home">Hem</a>
                <a href="http://localhost/examensarbete/product/hasse/">Skapa tavla</a>
                <a href="http://localhost/examensarbete/illustrationer/">Illustration</a>
                <a href="http://localhost/examensarbete/om-oss/">Om oss</a>
                <a href="http://localhost/examensarbete/kontakt/">Kontakt</a>
                <a href="http://localhost/examensarbete/cart/">Varukorg</a>
                <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </nav>
      </div>
    </div>


    <div class="container">
