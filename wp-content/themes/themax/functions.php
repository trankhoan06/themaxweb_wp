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
// require dirname( __FILE__ ) . '/inc/typerocket-single.php';
require dirname( __FILE__ ) . '/inc/typerocket-career-detail.php';
require dirname( __FILE__ ) . '/inc/typerocket-single-work.php';
require dirname( __FILE__ ) . '/inc/typerocket-policy.php';
add_filter('tr_theme_options_page', function() {
    return get_template_directory() . '/theme-options.php';
});

load_theme_textdomain( 'chloe_pallete', get_template_directory().'/languages' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// Register Menus
register_nav_menus( array(
    'header_menu' => esc_html__( 'Header Menu', 'themax' ),
    'footer_menu' => esc_html__( 'Footer Menu', 'themax' ),
) );

//Media Support
add_image_size( 'post-default', 900, 480, true ); // 480 pixels wide by 370 pixels tall, soft proportional crop mode

add_filter('show_admin_bar', '__return_false');

function themax_enqueue_assets() {
    $theme_dir = get_template_directory_uri();

    // Global CSS
    $style_version = filemtime(get_template_directory() . '/css/style.css') ?: '1.0.0';
    wp_enqueue_style('swiper-css', $theme_dir . '/plugin/swiper/swiper-bundle.min.css');
    wp_enqueue_style('themax-style', $theme_dir . '/css/style.css', array(), $style_version);

    // Global JS
    wp_enqueue_script('jquery-3.7.1', $theme_dir . '/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('gsap', $theme_dir . '/js/gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scroll-trigger', $theme_dir . '/js/ScrollTrigger.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('split-text', $theme_dir . '/js/SplitText.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('lenis', $theme_dir . '/js/lenis.min.js', array(), '1.0.0', true);
    wp_enqueue_script('swiper-js', $theme_dir . '/plugin/swiper/swiper-bundle.min.js', array(), '7.0.6', true);
    $index_js_version = filemtime(get_template_directory() . '/js/index.min.js') ?: '1.0.0';
    wp_enqueue_script('themax-index-js', $theme_dir . '/js/index.min.js', array('jquery-3.7.1', 'gsap', 'swiper-js'), $index_js_version, true);

    $recaptcha_site_key = tr_options_field('tr_theme_options.recaptcha_site_key') ?: '6LcQlD0tAAAAALN2ByRRGHnl9FO9EO7UvIBf99mR';

    wp_localize_script('themax-index-js', 'caseStudyAjax', array(
        'ajaxurl' => admin_url('admin-ajax.php'),
        'loadMoreText' => 'XEM THÊM',
        'recaptchaSiteKey' => $recaptcha_site_key
    ));

    wp_enqueue_script('google-recaptcha', 'https://www.google.com/recaptcha/api.js?render=' . esc_attr($recaptcha_site_key), array(), null, true);

    // Template specific CSS
    if (is_page_template('page-templates/aboutus.php')) {
        $about_version = filemtime(get_template_directory() . '/css/aboutus.css') ?: '1.0.0';
        wp_enqueue_style('themax-aboutus', $theme_dir . '/css/aboutus.css', array(), $about_version);
    }
    elseif (is_page_template('page-templates/career-detail.php') || is_singular('career')) {
        $career_detail_version = filemtime(get_template_directory() . '/css/career-detail.css') ?: '1.0.0';
        wp_enqueue_style('themax-career-detail', $theme_dir . '/css/career-detail.css', array(), $career_detail_version);
    }
    elseif (is_page_template('page-templates/career.php')) {
        wp_enqueue_style('themax-career', $theme_dir . '/css/career.css');
    }
    elseif (is_page_template('page-templates/case-study-detail.php') || is_singular('case-study-detail') || is_singular('work')) {
        wp_enqueue_style('themax-case-study-detail', $theme_dir . '/css/case-study-detail.css');
    }
    // elseif (is_singular('post')) {
    //     wp_enqueue_style('themax-case-study-detail', $theme_dir . '/css/case-study-detail.css');
    // }
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

function themax_load_more_case_studies() {
    $paged = isset($_POST["paged"]) ? intval($_POST["paged"]) : 1;
    
    $args = array(
        "post_type" => "work",
        "post_status" => "publish",
        "posts_per_page" => 6,
        "paged" => $paged
    );
    
    $query = new WP_Query($args);
    
    ob_start();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part("template-parts/content", "case-study");
        }
    }
    $html = ob_get_clean();
    
    wp_reset_postdata();
    
    if (!empty($html)) {
        wp_send_json_success(array("html" => $html));
    } else {
        wp_send_json_error(array("message" => "No more posts"));
    }
}
add_action("wp_ajax_load_more_case_studies", "themax_load_more_case_studies");
add_action("wp_ajax_nopriv_load_more_case_studies", "themax_load_more_case_studies");

add_filter('script_loader_tag', 'themax_add_defer_to_scripts', 10, 2);
function themax_add_defer_to_scripts($tag, $handle) {
    $defer_scripts = array(
        'jquery-3.7.1',
        'gsap',
        'scroll-trigger',
        'split-text',
        'lenis',
        'swiper-js',
        'themax-index-js'
    );
    
    if (in_array($handle, $defer_scripts)) {
        return str_replace(' src', ' defer src', $tag);
    }
    
    if ('google-recaptcha' === $handle) {
        return str_replace(' src', ' async defer src', $tag);
    }
    
    return $tag;
}
