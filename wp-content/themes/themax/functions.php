<?php
include 'typerocket/init.php';
require dirname( __FILE__ ) . '/inc/init.php';

// TypeRocket Page Templates Configs
require dirname( __FILE__ ) . '/inc/typerocket-homepage.php';
require dirname( __FILE__ ) . '/inc/typerocket-aboutus.php';
require dirname( __FILE__ ) . '/inc/typerocket-career.php';
require dirname( __FILE__ ) . '/inc/typerocket-contact.php';
require dirname( __FILE__ ) . '/inc/typerocket-service.php';
require dirname( __FILE__ ) . '/inc/typerocket-casestudy.php';
require dirname( __FILE__ ) . '/inc/typerocket-ourclient.php';
require dirname( __FILE__ ) . '/inc/typerocket-thanks.php';
require dirname( __FILE__ ) . '/inc/typerocket-default.php';
add_filter('tr_theme_options_page', function() {
    return get_template_directory() . '/theme-options.php';
});

load_theme_textdomain( 'chloe_pallete', get_template_directory().'/languages' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//Media Support
add_image_size( 'post-default', 900, 480, true ); // 480 pixels wide by 370 pixels tall, soft proportional crop mode

add_filter('show_admin_bar', '__return_false');

function themax_enqueue_assets() {
    $theme_dir = get_template_directory_uri();

    // Global CSS
    $style_version = filemtime(get_template_directory() . '/css/style.css') ?: '1.0.0';
    wp_enqueue_style('themax-style', $theme_dir . '/css/style.css', array(), $style_version);

    // Global JS
    wp_enqueue_script('jquery-3.7.1', $theme_dir . '/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('gsap', $theme_dir . '/js/gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scroll-trigger', $theme_dir . '/js/ScrollTrigger.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('split-text', $theme_dir . '/js/SplitText.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('lenis', $theme_dir . '/js/lenis.min.js', array(), '1.0.0', true);
    wp_enqueue_script('themax-index-js', $theme_dir . '/js/index.js', array('jquery-3.7.1', 'gsap'), '1.0.0', true);

    // Template specific CSS
    if (is_page_template('page-templates/aboutus.php')) {
        wp_enqueue_style('themax-aboutus', $theme_dir . '/css/aboutus.css');
    }
    elseif (is_page_template('page-templates/career-detail.php')) {
        wp_enqueue_style('themax-career-detail', $theme_dir . '/css/career-detail.css');
    }
    elseif (is_page_template('page-templates/career.php')) {
        wp_enqueue_style('themax-career', $theme_dir . '/css/career.css');
    }
    elseif (is_page_template('page-templates/case-study-detail.php')) {
        wp_enqueue_style('themax-case-study-detail', $theme_dir . '/css/case-study-detail.css');
    }
    elseif (is_page_template('page-templates/case-study.php')) {
        wp_enqueue_style('themax-case-study', $theme_dir . '/css/case-study.css');
    }
    elseif (is_page_template('page-templates/contact.php')) {
        wp_enqueue_style('themax-contact', $theme_dir . '/css/contact.css');
    }
    elseif (is_page_template('page-templates/homepage.php')) {
        wp_enqueue_style('themax-home', $theme_dir . '/css/home.css');
    }
    elseif (is_page_template('page-templates/our-client.php')) {
        wp_enqueue_style('themax-our-client', $theme_dir . '/css/our-client.css');
    }
    elseif (is_page_template('page-templates/service.php')) {
        wp_enqueue_style('themax-service', $theme_dir . '/css/service.css');
    }
}
add_action('wp_enqueue_scripts', 'themax_enqueue_assets');