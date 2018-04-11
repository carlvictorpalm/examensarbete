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
        <nav class="top-nav">

            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

        </nav>
      </div>
    </div>
    <?php if (is_front_page())
        $image = get_field( 'bg_img' );
    if ( ! empty( $image ) ): ?>
        <div class="front-header"
             style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>')">
            <div class="ingresshome col-xs-12 col-md-6 col-lg-5">
                <h2><?php the_field('bg_title'); ?></h2>
                <p><?php the_field('bg_text'); ?></p>
                <div class="centerbutton">
                    <a href="index.php?page_id=64"><button class="img_btn_1">Skapa din tavla</button></a>
                    <a href="index.php?page_id=17"><button class="img_btn_2">Läs Mer</button></a>
                </div>
            </div>
        </div>

    <?php endif; ?>
<div class="container">