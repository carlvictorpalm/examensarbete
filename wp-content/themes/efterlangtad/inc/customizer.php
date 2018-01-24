<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'wp_theme'),
      'description' => sprintf(__('Options for showcase','wp_theme')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/lapin.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'wp_theme'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Kim and Victors Custom Bootstrap Wordpress Theme', 'wp_theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'wp_theme'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('Default text', 'wp_theme'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'wp_theme'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('http://test.com', 'wp_theme'),
      'type'      => 'theme_mod'
    ));


    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'wp_theme'),
      'section' => 'showcase',
      'priority'  => 5
    ));
  }

  add_action('customize_register', 'wpb_customize_register');
