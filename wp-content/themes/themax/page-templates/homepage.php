<?php
/**
 * Template Name: HomePage
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
<main class="main" data-namespace="home">
        <section class="home_hero">
            <div class="home_hero_inner">
                <?php 
                $home_banner_video = tr_posts_field('home_banner_video') ;
                ?>
                <video src="<?php echo get_template_directory_uri(); ?>/images/video_button.mp4" autoplay loop muted playsinline></video>
            </div>
            <div class="home_hero_overlay" data-init>
                <div class="home_hero_overlay_txt txt_16">Scroll down</div>
                <div class="home_hero_overlay_icon img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Arrows_down.svg" alt="">
                </div>
            </div>
        </section>
        <div class="home_intro_wrap">
            <div class="home_intro_block"></div>
            <div class="home_intro_main">
                <section class="home_intro">
                    <div class="container">
                        <div class="home_intro_inner">
                            <div class="home_intro_line">
                                <div class="home_intro_txt heading h0 h1_mb cl_linear">Digital</div>
                            </div>
                            <div class="home_intro_line">
                                <div class="home_intro_txt heading h0 h1_mb cl_linear item_translate">Marketing</div>
                            </div>
                            <div class="home_intro_line">
                                <div class="home_intro_txt heading h0 h1_mb cl_red">Agency</div>
                            </div>
                            <div class="home_intro_subtxt txt_18 cl_eb">
                                <div class="home_intro_subtxt_inner">With all the professionalism,
                                    We know what to do for you.</div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="home_intro_img_cms ">
<?php
$intro_imgs = tr_posts_field('home_intro_images');
$img_urls = [];

if (!empty($intro_imgs)) {
    $img_ids = is_string($intro_imgs) ? explode(',', $intro_imgs) : (is_array($intro_imgs) ? $intro_imgs : []);
    foreach ($img_ids as $id) {
        if ($id) {
            $url = wp_get_attachment_image_url($id, 'full');
            if ($url) {
                $img_urls[] = $url;
            }
        }
    }
}

$columns = array_fill(0, 4, []);
$total = count($img_urls);

if ($total > 0) {
    $base = floor($total / 4);
    $remainder = $total % 4;
    $offset = 0;
    
    for ($i = 0; $i < 4; $i++) {
        $length = $base + ($i < $remainder ? 1 : 0);
        $columns[$i] = array_slice($img_urls, $offset, $length);
        $offset += $length;
    }
}

foreach($columns as $col_urls) {
    echo '<div class="home_intro_img_list">';
    foreach($col_urls as $url) {
        echo '<div class="home_intro_img_item img_fullfill">';
        echo '<img src="' . esc_url($url) . '" alt="">';
        echo '</div>';
    }
    echo '</div>';
}
?>
                </div>
            </div>
        </div>
        <div class="home_specialize_wrap" data-section="black">
            <section class="home_specialize">
<?php
$specialize_bg = tr_posts_field('specialize_bg');
$specialize_bg_url = $specialize_bg ? wp_get_attachment_image_url($specialize_bg, 'full') : '';
$specialize_icon_top = tr_posts_field('specialize_icon_top');
$specialize_icon_top_url = $specialize_icon_top ? wp_get_attachment_image_url($specialize_icon_top, 'full') : '';
$specialize_icon_center = tr_posts_field('specialize_icon_center');
$specialize_icon_center_url = $specialize_icon_center ? wp_get_attachment_image_url($specialize_icon_center, 'full') : '';
$specialize_icon_bottom = tr_posts_field('specialize_icon_bottom');
$specialize_icon_bottom_url = $specialize_icon_bottom ? wp_get_attachment_image_url($specialize_icon_bottom, 'full') : '';
$specialize_title = tr_posts_field('specialize_title');
$specialize_subtitle = tr_posts_field('specialize_subtitle') ;
?>
                <div class="home_specialize_bg img_full">
                    <img src="<?php echo esc_url($specialize_bg_url); ?>" alt="">
                </div>
                <div class="home_specialize_bg_color">
                    <div class="home_specialize_bg_color_inner"></div>
                    <div class="home_specialize_bg_deco">
                        <div class="home_specialize_bg_deco_item top img_full">
                            <img class="middle" src="<?php echo esc_url($specialize_icon_top_url); ?>" alt="">
                            <img class="mobile" src="<?php echo esc_url($specialize_icon_top_url); ?>" alt="">
                        </div>
                        <div class="home_specialize_bg_deco_item center img_full">
                            <img src="<?php echo esc_url($specialize_icon_center_url); ?>" alt="">
                        </div>
                        <div class="home_specialize_bg_deco_item bottom img_full">
                            <img class="middle" src="<?php echo esc_url($specialize_icon_bottom_url); ?>" alt="">
                            <img class="mobile" src="<?php echo esc_url($specialize_icon_bottom_url); ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="container grid">
                    <div class="home_specialize_inner">
                        <div class="home_specialize_title_wrap">
                            <?php if ($specialize_title): ?>
                                <div class="home_specialize_inner_txt cl_black heading h1 h4_mb"><?php echo wp_kses_post($specialize_title); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="home_specialize_subtxt txt_18 txt_medium cl_7d">
                        <div class="home_specialize_subtxt_txt"><?php echo wp_kses_post($specialize_subtitle); ?></div>
                    </div>
                </div>
            </section>
            <div class="home_specialize_block"></div>
        </div>
        <section class="home_services" data-section="white">
            <div class="home_services_top">
                <div class="home_services_top_bg left middle svg_full">
                    <svg width="253" height="448" viewBox="0 0 253 448" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M45.0781 -59.5L252.379 221.487L42.5449 507.5H-174.013L35.6045 221.782L35.8213 221.486L35.6035 221.189L-171.478 -59.5H45.0781Z"
                            stroke="url(#paint0_linear_1363_5698)" />
                        <defs>
                            <linearGradient id="paint0_linear_1363_5698" x1="253" y1="224" x2="-175" y2="224"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0.5" />
                                <stop offset="0.392803" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>

                </div>
                <div class="home_services_top_bg right svg_full">
                    <svg width="253" height="448" viewBox="0 0 253 448" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M207.922 -59.5L0.621094 221.487L210.455 507.5H427.013L217.396 221.782L217.179 221.486L217.396 221.189L424.478 -59.5H207.922Z"
                            stroke="url(#paint0_linear_1363_5700)" />
                        <defs>
                            <linearGradient id="paint0_linear_1363_5700" x1="0" y1="224" x2="428" y2="224"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" stop-opacity="0.5" />
                                <stop offset="0.392803" stop-color="white" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>


                </div>
                <div class="container">
                    <div class="home_services_sub txt_16 txt_medium block_arrow cl_fb">OUR SERVICES</div>
                    <h2 class="heading h2 h4_mb home_services_title txt_center cl_white">We provide full-service digital
                        marketing
                        solutions.
                    </h2>
                    <div class=" home_services_des cl_fb heading h6 txt_uppercase txt_center">OUR PROCESS: FROM STRATEGY
                        TO
                        PERFORMANCE</div>
                </div>
            </div>
            <div class="home_services_cms_wrap">
                <div class="home_services_cms">
                    <div class="home_services_progress"></div>
                    <div class="home_services_list">
<?php
$services = tr_posts_field('home_services');
if (is_array($services) && !empty($services)) :
    $colors = ['', 'bg_red', '']; // based on current design (empty, bg_red, empty)
    foreach($services as $index => $srv) :
        $color_class = $colors[$index % 3];
?>
                        <div class="home_services_item <?php echo $color_class; ?>">
                            <div class="home_services_item_inner">
                                <div class="container grid">
                                    <div class="home_services_content pa_container">
                                        <div class="home_services_content_top">
                                            <h3 class="home_services_content_title heading h1 h4_mb cl_linear"><?php echo esc_html($srv['title'] ?? ''); ?></h3>
                                            <div class="heading h6 home_services_content_sub"><?php echo esc_html($srv['description'] ?? ''); ?></div>
                                        </div>
                                        <div class="home_services_content_bottom">
                                            <div class="home_services_content_bottom_des heading h4 cl_eb"><?php echo esc_html($srv['bottom_des'] ?? ''); ?></div>
                                            <div class="home_services_content_bottom_list">
                                                <?php 
                                                $service_list = $srv['service_list'] ?? [];
                                                if (is_array($service_list)) :
                                                    foreach($service_list as $sl) : 
                                                ?>
                                                <div class="home_services_content_bottom_list_item h6 heading">
                                                    <svg width="9" height="13" viewBox="0 0 9 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.63313 0H0.0532536L4.42012 6.44248L0 13H4.57988L9 6.44248L4.63313 0Z" fill="#929292" />
                                                    </svg>
                                                    <?php echo esc_html($sl['item'] ?? ''); ?>
                                                </div>
                                                <?php 
                                                    endforeach; 
                                                endif; 
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="home_services_img img_fullfill right_full">
                                        <?php 
                                        $img_id = $srv['image'] ?? 0;
                                        $img_url = wp_get_attachment_image_url($img_id, 'full') ; 
                                        ?>
                                        <img src="<?php echo esc_url($img_url); ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
<?php 
    endforeach;
    endif; 
?>
                    </div>
                </div>
            </div>

        </section>
        <section class="home_case pa_container">
            <div class="container">
                <div class="home_case_subtitle txt_16 txt_medium block_arrow">OUR WORKS</div>
                <div class="home_case_title heading h2 txt_center cl_linear h4_mb">Discover featured “works” projects</div>
                <div class="home_case_content_list right_full left_full">
<?php
$cases = tr_posts_field('home_cases');
if (is_array($cases) && !empty($cases)) :
    foreach($cases as $case_item) :
?>
                    <div class="home_case_content_item">
                        <div class="home_case_content_item_des">
                            <div class="home_case_content_item_des_txt txt_15 txt_medium"><?php echo esc_html($case_item['client'] ?? ''); ?></div>
                            <div class="home_case_content_item_des_txt txt_15 txt_medium"><?php echo esc_html($case_item['type'] ?? ''); ?></div>
                        </div>
                        <div class="home_case_content_item_img_outer">
                            <div class="home_case_content_item_img img_full">
                                <?php $img_url = wp_get_attachment_image_url($case_item['image'] ?? 0, 'full') ; ?>
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                        </div>
                        <div class="home_case_content_item_txt">
                            <div class="home_case_content_item_txt_title heading cl_be h4 h5_mb"><?php echo esc_html($case_item['title'] ?? ''); ?></div>
                            <div class="home_case_content_item_txt_icon">
                                <div class="home_case_content_item_txt_icon_wrap svg_full">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#929292" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#929292" stroke-width="2" stroke-linejoin="round" /></g>
                                        <defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs>
                                    </svg>
                                </div>
                                <div class="home_case_content_item_txt_icon_wrap svg_full active">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /></g>
                                        <defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
<?php 
    endforeach;
    endif; 
?>
                </div>
                <a href="#" class="home_case_seeview button_hover hover_txt cl_be txt_uppercase txt_14 txt_medium">
                    <div class="hover_txt_grid">
                        <span class="init">VIEW ALL PROJECTS</span>
                        <span class="active">VIEW ALL PROJECTS</span>
                    </div>
                </a>
            </div>
        </section>
        <section class="home_clients pa_container">
            <div class="home_clients_pattern img_full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/partent_client.png" alt="">
            </div>
            <div class="container">
                <div class="home_clients_bg img_full">
                    <img src="./images/pattern-blur.svg" alt="">
                </div>
                <div class="home_clients_subtitle block_arrow">TYPICAL CLIENTS</div>
                <div class="home_clients_title heading h2 h4_mb cl_linear txt_center">We are proud to partner
with renowned brands.</div>
                <div class="home_clients_tab">
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium active" data-tabs="tab1">
                        <div class="hover_txt_grid">
                            <span class="init">Real Estate Developers</span>
                            <span class="active">Real Estate Developers</span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab2">
                        <div class="hover_txt_grid">
                            <span class="init">Real Estate Projects</span>
                            <span class="active">Real Estate Projects</span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab3">
                        <div class="hover_txt_grid">
                            <span class="init">Others Industry</span>
                            <span class="active">Others Industry</span>
                        </div>
                    </div>
                </div>
                <div class="home_clients_content">
<?php
$tabs = ['tab1' => 'home_clients_tab1', 'tab2' => 'home_clients_tab2', 'tab3' => 'home_clients_tab3'];
foreach($tabs as $tab_id => $field_name) :
    $clients = tr_posts_field($field_name);
?>
                    <div class="home_clients_content_item" data-tabs="<?php echo $tab_id; ?>">
<?php
    if (is_array($clients) && !empty($clients)) :
        foreach($clients as $c) :
?>
                        <div class="home_clients_content_item_img">
                            <div class="home_clients_content_item_inner img_full">
                                <?php $img_url = wp_get_attachment_image_url($c['logo'] ?? 0, 'full') ; ?>
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                        </div>
<?php
        endforeach;
    endif;
?>
                    </div>
<?php endforeach; ?>
                </div>
                <div class="home_clients_button button_hover txt_uppercase hover_txt txt_14 txt_medium">
                    <div class="hover_txt_grid">
                        <span class="init">VIEW ALL CLIENTS</span>
                        <span class="active">VIEW ALL CLIENTS</span>
                    </div>
                </div>
            </div>
        </section>
</main>


<?php get_footer(); ?>
