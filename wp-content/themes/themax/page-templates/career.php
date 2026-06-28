<?php
/**
 * Template Name: Career
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage chloe_pallete
 * @since chloe_pallete 1.0
 */

get_header();

?>
<main class="main" data-namespace="career">
    <section class="service_hero" data-init>
        <div class="container grid">
            <h1 class="service_hero_left heading h1 h4_mb cl_linear"><?php echo tr_posts_field('career_hero_title'); ?>
            </h1>
            <div class="service_hero_right">
                <div class="service_hero_right_txt txt_18"><?php echo tr_posts_field('career_hero_desc'); ?></div>
            </div>
            <a href="<?php echo esc_url(tr_posts_field('career_hero_btn_link')); ?>"
                class="service_hero_right_discover hover_txt txt_16 cl_eb">
                <div class="hover_txt_grid">
                    <?php $hero_btn = esc_html(tr_posts_field('career_hero_btn_text')); ?>
                    <span class="init"><?php echo $hero_btn; ?></span>
                    <span class="active"><?php echo $hero_btn; ?></span>
                </div>
                <div class="service_hero_right_discover_icon_wrap">
                    <div class="service_hero_right_discover_icon svg_full">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1293_1768)">
                                <path d="M6 18.0007H18.0007V5.99998" stroke="#929292" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M6 5.99998L18.0007 18.0007" stroke="#929292" stroke-width="1.5"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1293_1768">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="service_hero_right_discover_icon active svg_full">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1293_1768)">
                                <path d="M6 18.0007H18.0007V5.99998" stroke="#E62636" stroke-width="1.5"
                                    stroke-linejoin="round" />
                                <path d="M6 5.99998L18.0007 18.0007" stroke="#E62636" stroke-width="1.5"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1293_1768">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
            </a>
            <div class="service_hero_bg svg_full">
                <svg width="883" height="806" viewBox="0 0 883 806" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5" filter="url(#filter0_d_368_2651)">
                        <path
                            d="M288.603 0.5L556.76 395.47L285.328 797.5H4.94043L276.185 395.749L276.374 395.469L276.185 395.188L8.21777 0.5H288.603Z"
                            fill="url(#paint0_radial_368_2651)" stroke="black" />
                        <path
                            d="M680.564 588.973L493.875 313.896L682.845 33.9004L877.79 33.9004L689.008 313.617L688.818 313.897L689.009 314.178L875.506 588.973L680.564 588.973Z"
                            fill="url(#paint1_radial_368_2651)" stroke="black" />
                    </g>
                    <defs>
                        <filter id="filter0_d_368_2651" x="0" y="0" width="882.73" height="806"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset dy="4" />
                            <feGaussianBlur stdDeviation="2" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_368_2651" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_368_2651"
                                result="shape" />
                        </filter>
                        <radialGradient id="paint0_radial_368_2651" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(280.682 399) rotate(90) scale(399 276.682)">
                            <stop stop-color="#EB4250" />
                            <stop offset="1" stop-color="#0D0D0D" />
                        </radialGradient>
                        <radialGradient id="paint1_radial_368_2651" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                            gradientTransform="translate(686.001 311.436) rotate(-90) scale(278.036 192.73)">
                            <stop stop-color="#0D0D0D" stop-opacity="0" />
                            <stop offset="1" stop-color="#A9000E" />
                        </radialGradient>
                    </defs>
                </svg>

            </div>
        </div>
    </section>
    <section class="career_img" data-init>
        <?php
        $img_desk = wp_get_attachment_image_url(tr_posts_field('career_img_desktop'), 'full') ?: get_template_directory_uri() . '/images/image_career.webp';
        $img_mob = wp_get_attachment_image_url(tr_posts_field('career_img_mobile'), 'full') ?: get_template_directory_uri() . '/images/image_career.webp';
        ?>
        <div class="career_img_inner middle" style="background-image: url('<?php echo esc_url($img_desk); ?>');">
        </div>
        <div class="career_img_inner mobile img_full">
            <img src="<?php echo esc_url($img_mob); ?>" alt="">
        </div>
    </section>
    <section class="career_why" data-init>
        <div class="container">
            <div class="career_why_info grid">
                <div class="career_why_info_left">
                    <div class="career_why_info_subtitle block_arrow">
                        <?php echo esc_html(tr_posts_field('career_why_subtitle')); ?>
                    </div>
                </div>
                <div class="career_why_info_content">
                    <div class="career_why_info_content_title heading h2 h4_mb cl_linear">
                        <?php echo nl2br(esc_html(tr_posts_field('career_why_title'))); ?>
                    </div>
                    <div class="career_why_info_content_subtitle heading h6 cl_red">
                        <?php echo nl2br(esc_html(tr_posts_field('career_why_subtitle'))); ?>
                    </div>
                    <div class="career_why_info_content_card">
                        <?php
                        $why_list = tr_posts_field('career_why_list');
                        if (is_array($why_list) && !empty($why_list)):
                            foreach ($why_list as $item):
                                $icon = wp_get_attachment_image_url($item['icon'], 'full') ?: get_template_directory_uri() . '/images/icon-careers-why.svg';
                                ?>
                                <div class="career_why_info_content_card_item item_line">
                                    <div class="career_why_info_content_card_item_icon img_full">
                                        <img src="<?php echo esc_url($icon); ?>" alt="">
                                    </div>
                                    <div class="career_why_info_content_card_item_title item_line_title cl_linear heading h5">
                                        <?php echo esc_html($item['title'] ?? ''); ?>
                                    </div>
                                    <div class="career_why_info_content_card_item_des txt_14">
                                        <?php echo esc_html($item['desc'] ?? ''); ?>
                                    </div>
                                </div>
                                <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="career_why_img_bg desktop img_full">
                    <?php $why_bg = wp_get_attachment_image_url(tr_posts_field('career_why_bg'), 'full') ?: get_template_directory_uri() . '/images/bg_why.webp'; ?>
                    <img src="<?php echo esc_url($why_bg); ?>" alt="">
                </div>
            </div>
            <div class="career_why_img">
                <div class="career_why_img_inner img_full">
                    <?php
                    $ch_desk = wp_get_attachment_image_url(tr_posts_field('career_why_choose_desktop'), 'full') ?: get_template_directory_uri() . '/images/career_choose.webp';
                    $ch_mob = wp_get_attachment_image_url(tr_posts_field('career_why_choose_mobile'), 'full') ?: get_template_directory_uri() . '/images/career_choose_mb.webp';
                    ?>
                    <img class="middle" src="<?php echo esc_url($ch_desk); ?>" alt="">
                    <img class="mobile" src="<?php echo esc_url($ch_mob); ?>" alt="">
                </div>
                <div class="career_why_img_overlay"></div>
                <div class="career_why_img_txt heading h4 h5_mb cl_linear">
                    <?php echo esc_html(tr_posts_field('career_why_bottom_text')); ?>
                </div>
            </div>
            <div class="career_why_list left_full right_full">
                <div class="career_why_list_title grid middle">
                    <div class="career_why_list_item_position">POSITION</div>
                    <div class="career_why_list_item_level">LEVEL</div>
                    <div class="career_why_list_item_quality">QUANTITY</div>
                    <div class="career_why_list_item_deadline">DEADLINE</div>
                </div>
                <?php
                $positions = tr_posts_field('career_positions');
                if (is_array($positions) && !empty($positions)):
                    foreach ($positions as $pos):
                        ?>
                        <a href="<?php echo esc_url($pos['link'] ?? '#'); ?>" class="career_why_list_item grid item_line">
                            <div class="career_why_list_item_position item_line_title heaeding h5 cl_linear">
                                <?php echo esc_html($pos['position'] ?? ''); ?>
                            </div>
                            <div class="career_why_list_item_level txt_16"><?php echo esc_html($pos['level'] ?? ''); ?></div>
                            <div class="career_why_list_item_quality txt_16"><?php echo esc_html($pos['quantity'] ?? ''); ?>
                            </div>
                            <div class="career_why_list_item_deadline txt_16"><?php echo esc_html($pos['deadline'] ?? ''); ?>
                            </div>
                            <div class="home_case_content_item_txt_icon middle">
                                <div class="home_case_content_item_txt_icon_wrap svg_full"><svg width="48" height="48"
                                        viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1164_690)">
                                            <path d="M12 12H36.0003V36.0003" stroke="#929292" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <path d="M12 36.0003L36.0003 12" stroke="#929292" stroke-width="2"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1164_690">
                                                <rect width="48" height="48" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg></div>
                                <div class="home_case_content_item_txt_icon_wrap svg_full active"><svg width="48" height="48"
                                        viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1164_690)">
                                            <path d="M12 12H36.0003V36.0003" stroke="#F32B3B" stroke-width="2"
                                                stroke-linejoin="round" />
                                            <path d="M12 36.0003L36.0003 12" stroke="#F32B3B" stroke-width="2"
                                                stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1164_690">
                                                <rect width="48" height="48" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg></div>
                            </div>
                        </a>
                        <?php
                    endforeach;
                else:
                    ?>
                    <!-- No positions found -->
                    <?php
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="about_cta">
        <div class="about_cta_img img_full">
            <?php $cta_img = wp_get_attachment_image_url(tr_posts_field('career_cta_img'), 'full') ?: get_template_directory_uri() . '/images/img_cta.webp'; ?>
            <img src="<?php echo esc_url($cta_img); ?>" alt="">
        </div>
        <div class="about_cta_inner_bg">
            <svg class="about_cta_bg_red" width="100" height="273" viewBox="0 0 100 273" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_cta_red)">
                    <path
                        d="M-141.577 -191.969H-395.053L-153.367 136.065L-398 469.957H-144.525L100.109 136.065L-141.577 -191.969Z"
                        fill="url(#paint0_cta_red)" />
                </g>
                <defs>
                    <radialGradient id="paint0_cta_red" cx="0" cy="0" r="1"
                        gradientTransform="matrix(-249.054 330.963 -249.071 -187.403 100.109 138.994)"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E62636" stop-opacity="0.7" />
                        <stop offset="0.504728" stop-color="#E62636" stop-opacity="0.05" />
                    </radialGradient>
                    <clipPath id="clip0_cta_red">
                        <rect width="100" height="273" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <svg class="about_cta_bg_top" width="243" height="171" viewBox="0 0 243 171" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_cta_top)">
                    <path d="M338.383 -130.719L117.811 170.278L-5.68018 -2.09668L88.4595 -130.719H338.383Z"
                        stroke="url(#paint0_cta_top)" stroke-width="0.5" />
                </g>
                <defs>
                    <linearGradient id="paint0_cta_top" x1="199.4" y1="-130.969" x2="47.985" y2="74.231"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.6" stop-color="white" stop-opacity="0" />
                        <stop offset="1" stop-color="white" stop-opacity="0.5" />
                    </linearGradient>
                    <clipPath id="clip0_cta_top">
                        <rect width="243" height="171" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <svg class="about_cta_bg_bot" width="248" height="174" viewBox="0 0 248 174" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_cta_bot)">
                    <path d="M340.779 304.706H90.8535L-6.23242 173.155L120.201 0.775391L340.779 304.706Z"
                        stroke="url(#paint0_cta_bot)" stroke-width="0.5" />
                </g>
                <defs>
                    <linearGradient id="paint0_cta_bot" x1="50.4634" y1="93.9684" x2="204.36" y2="304.96"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0.5" />
                        <stop offset="0.396285" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    <clipPath id="clip0_cta_bot">
                        <rect width="248" height="175" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="about_cta_inner_overlay"></div>
        <div class="container">
            <div class=" about_cta_inner_content">
                <div class="about_cta_inner_content_title grid">
                    <div class="about_cta_inner_content_title_txt heading h2 cl_linear h5_mb">
                        <?php echo nl2br(esc_html(tr_posts_field('career_cta_title'))); ?>
                    </div>
                    <div class="about_cta_inner_content_des txt_18">
                        <?php echo nl2br(esc_html(tr_posts_field('career_cta_desc'))); ?>
                    </div>
                    <a href="<?php echo esc_url(tr_posts_field('career_cta_btn_link')); ?>"
                        class="about_cta_inner_content_title_button hover_txt button_hover txt_uppercase txt_14 cl_be">
                        <div class="hover_txt_grid">
                            <?php $cta_btn_txt = esc_html(tr_posts_field('career_cta_btn_text')); ?>
                            <span class="init"><?php echo $cta_btn_txt; ?></span>
                            <span class="active"><?php echo $cta_btn_txt; ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>