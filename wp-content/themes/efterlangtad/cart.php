<?php /* Template Name: cart */

get_header();?>


    <div class="row">
        <div class="wrapper">
            <?php while (have_posts()): the_post(); ?>
                <div class="title">
                    <h1><?php the_title() ?></h1>
                </div>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile;?>
        </div>

<?php get_footer(); ?>