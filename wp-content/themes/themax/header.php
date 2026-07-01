<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/GoogleSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/fonts/GoogleSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
    <?php 
    if (is_front_page() || is_home() || is_page_template('page-templates/homepage.php')) {
        $home_banner_video = tr_posts_field('home_banner_video');
        $video_url = $home_banner_video ? wp_get_attachment_url($home_banner_video) : '';
        if ($video_url) {
            echo '<link rel="preload" href="' . esc_url($video_url) . '" as="video" type="video/mp4">';
        }
    }
    ?>

        <?php wp_head(); ?>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="header">
            <div class="grid container" data-init>
                <a href="<?php echo function_exists('pll_home_url') ? esc_url(pll_home_url()) : esc_url(home_url('/')); ?>" class="header_logo svg_full">
                    <svg width="128" height="36" viewBox="0 0 128 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M86.8352 6.37714L78.4384 25.4057V6.37714H71.2704L64 17.1771L56.7296 6.37714H49.5616V29.6228H56.7296V17.4857L61.2352 24.48H64H66.7648L71.2704 17.4857V29.6228H76.5952H78.4384H84.6848L85.6064 27.2571L90.7264 14.0914L96.8704 29.6228H104.858L94.72 6.37714H86.8352Z"
                            fill="currentColor" />
                        <path d="M119.808 18.9257L115.405 24.9943L118.784 29.6228H127.488L119.808 18.9257Z"
                            fill="currentColor" />
                        <path d="M127.386 6.37714H118.682L115.405 10.9029L119.706 16.9714L127.386 6.37714Z"
                            fill="currentColor" />
                        <path
                            d="M32.256 6.37714V9.35999V16.56H20.7872V6.37714H17.8176H10.6496H7.7824H0.512V9.35999H7.7824V29.6228H10.6496V9.35999H17.8176V16.56V19.44V29.6228H20.7872V19.44H32.256V26.64V29.6228H35.2256H46.7968V26.64H35.2256V19.44H46.7968V16.56H35.2256V9.35999H46.7968V6.37714H35.2256H32.256Z"
                            fill="currentColor" />
                        <path
                            d="M110.694 6.37714H101.888L110.285 17.8971L101.786 29.6228H110.592L119.091 17.8971L110.694 6.37714Z"
                            fill="#E62636" />
                    </svg>
                </a>
                <div class="header_title block_arrow txt_medium txt_16 middle" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 45vw;">
                    <?php 
                        if (is_front_page() || is_home()) {
                            echo 'Digital Marketing Agency';
                        } elseif (is_singular('work')) {
                            $lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
                            $works_label = ($lang === 'vi') ? 'Tác phẩm' : 'Works';
                            $works_link = ($lang === 'vi') ? '/vi/works' : '/works';
                            echo '<a href="' . esc_url($works_link) . '" class="header_works_link">' . esc_html($works_label) . '</a> &nbsp;/&nbsp; ' . esc_html(get_the_title());
                        } elseif (is_singular('career')) {
                            $lang = function_exists('pll_current_language') ? pll_current_language() : 'en';
                            $career_label = ($lang === 'vi') ? 'Tuyển dụng' : 'Careers';
                            $career_link = ($lang === 'vi') ? '/vi/career' : '/career';
                            echo '<a href="' . esc_url($career_link) . '" class="header_works_link">' . esc_html($career_label) . '</a> &nbsp;/&nbsp; ' . esc_html(get_the_title());
                        } else {
                            echo esc_html(get_the_title());
                        }
                    ?>
                </div>
                <div class="header_menu">
                    <div class="header_menu_inner">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="header_menu_nav">
                        <div class="header_menu_nav_lang">
                            <?php 
                            if ( function_exists('pll_the_languages') ) {
                                $languages = pll_the_languages( array( 'raw' => 1 ) );
                                $current_lang = null;
                                $other_langs = array();
                                
                                foreach ( $languages as $lang ) {
                                    if ( $lang['current_lang'] ) {
                                        $current_lang = $lang;
                                    } else {
                                        $other_langs[] = $lang;
                                    }
                                }
                                
                                // Hiển thị ngôn ngữ hiện tại đầu tiên
                                if ( $current_lang ) {
                                    $lang_slug = strtoupper( $current_lang['slug'] );
                                    ?>
                                    <a href="<?php echo esc_url( $current_lang['url'] ); ?>" class="header_menu_nav_lang_item active txt_16 hover_txt txt_uppercase" style="text-decoration: none;">
                                        <div class="hover_txt_grid">
                                            <span class="init"><?php echo esc_html( $lang_slug ); ?></span>
                                            <span class="active"><?php echo esc_html( $lang_slug ); ?></span>
                                        </div>
                                    </a>
                                    <?php
                                }
                                
                                // Hiển thị các ngôn ngữ khác
                                foreach ( $other_langs as $lang ) {
                                    $lang_slug = strtoupper( $lang['slug'] );
                                    ?>
                                    <a href="<?php echo esc_url( $lang['url'] ); ?>" class="header_menu_nav_lang_item txt_16 hover_txt txt_uppercase" style="text-decoration: none;">
                                        <div class="hover_txt_grid">
                                            <span class="init"><?php echo esc_html( $lang_slug ); ?></span>
                                            <span class="active"><?php echo esc_html( $lang_slug ); ?></span>
                                        </div>
                                    </a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                        <div class="header_menu_nav_content">
                            <?php
                            $locations = get_nav_menu_locations();
                            $has_menu = false;
                            if ( isset( $locations['header_menu'] ) ) {
                                $menu = get_term( $locations['header_menu'], 'nav_menu' );
                                if ( $menu && ! is_wp_error( $menu ) ) {
                                    $menu_items = wp_get_nav_menu_items( $menu->term_id );
                                    if ( $menu_items ) {
                                        $has_menu = true;
                                        foreach ( $menu_items as $menu_item ) {
                                            $title = esc_html( $menu_item->title );
                                            $url = esc_url( $menu_item->url );
                                            $target = ! empty( $menu_item->target ) ? ' target="' . esc_attr( $menu_item->target ) . '"' : '';
                                            echo '<a href="' . $url . '"' . $target . ' class="header_menu_nav_content_item txt_48 cl_black hover_txt txt_medium">';
                                            echo '<div class="hover_txt_grid">';
                                            echo '<span class="init">' . $title . '</span>';
                                            echo '<span class="active">' . $title . '</span>';
                                            echo '</div>';
                                            echo '</a>';
                                        }
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="header_menu_nav_footer">
                            <div class="header_menu_nav_footer_hotline cl_black txt_18 txt_medium">HOTLINE</div>
                            <div class="header_menu_nav_footer_tel txt_24 txt_medium cl_main">0929 100 990</div>
                        </div>
                    </div>
                    <div class="header_menu_overlay"></div>
                </div>

            </div>
        </div>
    </header>