<?php /* Template Name: contact */

get_header(); ?>
    <!--
	CONTACT PAGE
	-->
<div class="container">
    <div class="row">
        <div class="wrapper">
            <?php while (have_posts()): the_post(); ?>
                <div class="title">
                    <h1><?php the_title() ?></h1>
                </div>
                <div>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </div> <!--Wrapper ends-->
    </div>



<?php get_footer(); ?>