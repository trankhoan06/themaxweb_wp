<?php
flush_rewrite_rules();
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
    wp_enqueue_style('themax-style', $theme_dir . '/css/style.css', array(), $style_version);

    // Global JS
    wp_enqueue_script('jquery-3.7.1', $theme_dir . '/js/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('gsap', $theme_dir . '/js/gsap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('scroll-trigger', $theme_dir . '/js/ScrollTrigger.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('split-text', $theme_dir . '/js/SplitText.min.js', array('gsap'), '1.0.0', true);
    wp_enqueue_script('lenis', $theme_dir . '/js/lenis.min.js', array(), '1.0.0', true);
    $index_js_version = filemtime(get_template_directory() . '/js/index.min.js') ?: '1.0.0';
    wp_enqueue_script('themax-index-js', $theme_dir . '/js/index.min.js', array('jquery-3.7.1', 'gsap'), $index_js_version, true);

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
        $career_version = filemtime(get_template_directory() . '/css/career.css') ?: '1.0.0';
        wp_enqueue_style('themax-career', $theme_dir . '/css/career.css', array(), $career_version);
    }
    elseif (is_page_template('page-templates/case-study-detail.php') || is_singular('case-study-detail') || is_singular('work')) {
        $case_study_detail_version = filemtime(get_template_directory() . '/css/case-study-detail.css') ?: '1.0.0';
        wp_enqueue_style('themax-case-study-detail', $theme_dir . '/css/case-study-detail.css', array(), $case_study_detail_version);
    }
    // elseif (is_singular('post')) {
    //     $case_study_detail_version = filemtime(get_template_directory() . '/css/case-study-detail.css') ?: '1.0.0';
    //     wp_enqueue_style('themax-case-study-detail', $theme_dir . '/css/case-study-detail.css', array(), $case_study_detail_version);
    // }
    elseif (is_page_template('page-templates/case-study.php')) {
        $case_study_version = filemtime(get_template_directory() . '/css/case-study.css') ?: '1.0.0';
        wp_enqueue_style('themax-case-study', $theme_dir . '/css/case-study.css', array(), $case_study_version);
    }
    elseif (is_page_template('page-templates/contact.php')) {
        $contact_version = filemtime(get_template_directory() . '/css/contact.css') ?: '1.0.0';
        wp_enqueue_style('themax-contact', $theme_dir . '/css/contact.css', array(), $contact_version);
    }
    elseif (is_page_template('page-templates/homepage.php')) {
        $home_version = filemtime(get_template_directory() . '/css/home.css') ?: '1.0.0';
        wp_enqueue_style('themax-home', $theme_dir . '/css/home.css', array(), $home_version);
    }
    elseif (is_page_template('page-templates/our-client.php')) {
        $our_client_version = filemtime(get_template_directory() . '/css/our-client.css') ?: '1.0.0';
        wp_enqueue_style('themax-our-client', $theme_dir . '/css/our-client.css', array(), $our_client_version);
    }
    elseif (is_page_template('page-templates/service.php')) {
        $service_version = filemtime(get_template_directory() . '/css/service.css') ?: '1.0.0';
        wp_enqueue_style('themax-service', $theme_dir . '/css/service.css', array(), $service_version);
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

// Khởi tạo menu Clients riêng trên Sidebar
add_action('admin_menu', 'themax_register_clients_sidebar_menu');
function themax_register_clients_sidebar_menu() {
    add_menu_page(
        'Clients Settings',        // Tiêu đề trang
        'Clients',                 // Tên menu hiển thị ở sidebar
        'manage_options',          // Quyền truy cập
        'themax-clients-settings', // Slug của menu
        'themax_render_clients_settings_page', // Tên hàm hiển thị giao diện
        'dashicons-groups',        // Icon (hình nhóm người)
        30                         // Vị trí hiển thị trên sidebar
    );
}

// Giao diện (Form) của trang Clients mới
function themax_render_clients_settings_page() {
    // Khởi tạo model WPOption và gắn vào form để lấy dữ liệu từ bảng options
    $model = new \TypeRocket\Models\WPOption();
    $form = tr_form('option', 'create', null, $model)->useJson()->setGroup('tr_client_options');
    
    echo '<div class="wrap"><div class="typerocket-container">';
    echo '<h1>Our Clients Settings</h1>';
    echo '<p>Quản lý logo đối tác và khách hàng.</p>';
    
    // Fix lỗi ảnh SVG bị ẩn (width 1px, height 1px) khi load lại trang
    echo '<style>
        .typerocket-container img.attachment-thumbnail {
            width: auto !important;
            height: auto !important;
            max-width: 150px;
            max-height: 150px;
            min-width: 50px;
            min-height: 50px;
        }
    </style>';
    
    echo $form->open();

    echo $form->row(
        $form->text('home_clients_tab1_name')->setLabel("Tên Tab 1 (EN)"),
        $form->text('home_clients_tab1_name_vi')->setLabel("Tên Tab 1 (VI)")
    );
    echo $form->repeater('home_clients_tab1')->setLabel("Logo Tab 1")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_tab2_name')->setLabel("Tên Tab 2 (EN)"),
        $form->text('home_clients_tab2_name_vi')->setLabel("Tên Tab 2 (VI)")
    );
    echo $form->repeater('home_clients_tab2')->setLabel("Logo Tab 2")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_tab3_name')->setLabel("Tên Tab 3 (EN)"),
        $form->text('home_clients_tab3_name_vi')->setLabel("Tên Tab 3 (VI)")
    );
    echo $form->repeater('home_clients_tab3')->setLabel("Logo Tab 3")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_tab4_name')->setLabel("Tên Tab 4 (EN)"),
        $form->text('home_clients_tab4_name_vi')->setLabel("Tên Tab 4 (VI)")
    );
    echo $form->repeater('home_clients_tab4')->setLabel("Logo Tab 4")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_tab5_name')->setLabel("Tên Tab 5 (EN)"),
        $form->text('home_clients_tab5_name_vi')->setLabel("Tên Tab 5 (VI)")
    );
    echo $form->repeater('home_clients_tab5')->setLabel("Logo Tab 5")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_tab6_name')->setLabel("Tên Tab 6 (EN)"),
        $form->text('home_clients_tab6_name_vi')->setLabel("Tên Tab 6 (VI)")
    );
    echo $form->repeater('home_clients_tab6')->setLabel("Logo Tab 6")->setFields([
        $form->image('logo')->setLabel("Logo đối tác"),
        $form->text('link')->setLabel("Link (Optional)")
    ]);
    
    echo $form->row(
        $form->text('home_clients_btn_text')->setLabel("Text nút bấm (EN)"),
        $form->text('home_clients_btn_link')->setLabel("Link nút bấm (EN)")
    );
    echo $form->row(
        $form->text('home_clients_btn_text_vi')->setLabel("Text nút bấm (VI)"),
        $form->text('home_clients_btn_link_vi')->setLabel("Link nút bấm (VI)")
    );

    echo $form->submit('Save Options');
    echo $form->close();
    
    echo '</div></div>';
}

// Add defer attribute to speed up script loading and eliminate parser blocking
add_filter('script_loader_tag', function($tag, $handle) {
    if (is_admin()) {
        return $tag;
    }
    $defer_handles = array(
        'gsap',
        'scroll-trigger',
        'split-text',
        'lenis',
        'themax-index-js',
        'google-recaptcha'
    );
    if (in_array($handle, $defer_handles)) {
        return str_replace(' src', ' defer src', $tag);
    }
    return $tag;
}, 10, 2);

// Prevent caching for requests coming from Zalo In-App Browser
add_action('send_headers', 'themax_disable_cache_for_zalo');
function themax_disable_cache_for_zalo() {
    $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    if (stripos($user_agent, 'Zalo') !== false) {
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
    }
}
