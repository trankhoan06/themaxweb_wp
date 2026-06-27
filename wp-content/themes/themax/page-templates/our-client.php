<?php
/**
 * Template Name: Our Client
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
<main class="main" data-namespace="ourClient">
        <section class="casestudy_hero">
            <div class="container">
                <div class="casestudy_hero_inner grid">
                    <h1 class="casestudy_hero_title heading h1 cl_linear"><?php echo nl2br(esc_html(tr_posts_field('client_hero_title') ?: "We know what to do\nfor your client.")); ?></h1>
                    <div class="casestudy_hero_des txt_18"><?php echo nl2br(esc_html(tr_posts_field('client_hero_desc') ?: "Our expertise is focused on\nhelping you reach new heights.")); ?></div>
                </div>
                <div class="casestudy_hero_bg svg_full">
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
                            <radialGradient id="paint0_radial_368_2651" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(280.682 399) rotate(90) scale(399 276.682)">
                                <stop stop-color="#EB4250" />
                                <stop offset="1" stop-color="#0D0D0D" />
                            </radialGradient>
                            <radialGradient id="paint1_radial_368_2651" cx="0" cy="0" r="1"
                                gradientUnits="userSpaceOnUse"
                                gradientTransform="translate(686.001 311.436) rotate(-90) scale(278.036 192.73)">
                                <stop stop-color="#0D0D0D" stop-opacity="0" />
                                <stop offset="1" stop-color="#A9000E" />
                            </radialGradient>
                        </defs>
                    </svg>

                </div>
            </div>
        </section>
        <section class="home_clients pa_container">
            <div class="container">
                <!-- <div class="home_clients_bg img_full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/pattern-blur.webp" alt="">
            </div> -->
                <div class="home_clients_tab">
                    <?php 
                        $tab1_name = esc_html(tr_posts_field('tab1_name') ?: 'Real Estate Clients');
                        $tab2_name = esc_html(tr_posts_field('tab2_name') ?: 'Real Estate Projects');
                        $tab3_name = esc_html(tr_posts_field('tab3_name') ?: 'Web & Mobile App');
                    ?>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium active" data-tabs="tab1">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab1_name; ?></span>
                            <span class="active"><?php echo $tab1_name; ?></span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab2">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab2_name; ?></span>
                            <span class="active"><?php echo $tab2_name; ?></span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab3">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab3_name; ?></span>
                            <span class="active"><?php echo $tab3_name; ?></span>
                        </div>
                    </div>
                </div>
                <div class="home_clients_content">
                    <div class="home_clients_content_item" data-tabs="tab1">
<?php
$tab1_gallery = tr_posts_field('tab1_gallery');
if (is_array($tab1_gallery) && !empty($tab1_gallery)) :
    $images = explode(',', $tab1_gallery[0]);
    foreach ($images as $img_id) :
        $img_url = wp_get_attachment_image_url($img_id, 'full');
        if ($img_url) :
?>
                        <div class="home_clients_content_item_img">
                            <div class="home_clients_content_item_inner img_full">
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                        </div>
<?php
        endif;
    endforeach;
else:
?>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab.svg" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab.svg" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab.svg" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab.svg" alt=""></div></div>
<?php endif; ?>
                    </div>
                    
                    <div class="home_clients_content_item" data-tabs="tab2">
<?php
$tab2_gallery = tr_posts_field('tab2_gallery');
if (is_array($tab2_gallery) && !empty($tab2_gallery)) :
    $images = explode(',', $tab2_gallery[0]);
    foreach ($images as $img_id) :
        $img_url = wp_get_attachment_image_url($img_id, 'full');
        if ($img_url) :
?>
                        <div class="home_clients_content_item_img">
                            <div class="home_clients_content_item_inner img_full">
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                        </div>
<?php
        endif;
    endforeach;
else:
?>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
<?php endif; ?>
                    </div>
                    
                    <div class="home_clients_content_item" data-tabs="tab3">
<?php
$tab3_gallery = tr_posts_field('tab3_gallery');
if (is_array($tab3_gallery) && !empty($tab3_gallery)) :
    $images = explode(',', $tab3_gallery[0]);
    foreach ($images as $img_id) :
        $img_url = wp_get_attachment_image_url($img_id, 'full');
        if ($img_url) :
?>
                        <div class="home_clients_content_item_img">
                            <div class="home_clients_content_item_inner img_full">
                                <img src="<?php echo esc_url($img_url); ?>" alt="">
                            </div>
                        </div>
<?php
        endif;
    endforeach;
else:
?>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
                        <div class="home_clients_content_item_img"><div class="home_clients_content_item_inner img_full"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_tab" alt=""></div></div>
<?php endif; ?>
                    </div>
                </div>
                <div class="home_clients_tab bottom middle">
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium active" data-tabs="tab1">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab1_name; ?></span>
                            <span class="active"><?php echo $tab1_name; ?></span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab2">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab2_name; ?></span>
                            <span class="active"><?php echo $tab2_name; ?></span>
                        </div>
                    </div>
                    <div class="home_clients_tab_item hover_txt txt_16 txt_medium" data-tabs="tab3">
                        <div class="hover_txt_grid">
                            <span class="init"><?php echo $tab3_name; ?></span>
                            <span class="active"><?php echo $tab3_name; ?></span>
                        </div>
                    </div>
                </div>
                <!-- <div class="home_clients_button button_hover txt_uppercase hover_txt txt_14 txt_medium">
                <div class="hover_txt_grid">
                    <span class="init">VIEW ALL CLIENTS</span>
                    <span class="active">VIEW ALL CLIENTS</span>
                </div>
            </div> -->
            </div>
        </section>

        <section class="about_cta">
            <div class="about_cta_img img_full">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img_cta.webp" alt="">
            </div>
            <div class="about_cta_inner_bg">
                <svg class="about_cta_bg_red" width="100" height="273" viewBox="0 0 100 273" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_cta_red)">
                        <path d="M-141.577 -191.969H-395.053L-153.367 136.065L-398 469.957H-144.525L100.109 136.065L-141.577 -191.969Z" fill="url(#paint0_cta_red)"/>
                    </g>
                    <defs>
                        <radialGradient id="paint0_cta_red" cx="0" cy="0" r="1" gradientTransform="matrix(-249.054 330.963 -249.071 -187.403 100.109 138.994)" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#E62636" stop-opacity="0.7"/>
                            <stop offset="0.504728" stop-color="#E62636" stop-opacity="0.05"/>
                        </radialGradient>
                        <clipPath id="clip0_cta_red">
                            <rect width="100" height="273" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="about_cta_bg_top" width="243" height="171" viewBox="0 0 243 171" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_cta_top)">
                        <path d="M338.383 -130.719L117.811 170.278L-5.68018 -2.09668L88.4595 -130.719H338.383Z" stroke="url(#paint0_cta_top)" stroke-width="0.5"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_cta_top" x1="199.4" y1="-130.969" x2="47.985" y2="74.231" gradientUnits="userSpaceOnUse">
                            <stop offset="0.6" stop-color="white" stop-opacity="0"/>
                            <stop offset="1" stop-color="white" stop-opacity="0.5"/>
                        </linearGradient>
                        <clipPath id="clip0_cta_top">
                            <rect width="243" height="171" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="about_cta_bg_bot" width="248" height="174" viewBox="0 0 248 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_cta_bot)">
                        <path d="M340.779 304.706H90.8535L-6.23242 173.155L120.201 0.775391L340.779 304.706Z" stroke="url(#paint0_cta_bot)" stroke-width="0.5"/>
                    </g>
                    <defs>
                        <linearGradient id="paint0_cta_bot" x1="50.4634" y1="93.9684" x2="204.36" y2="304.96" gradientUnits="userSpaceOnUse">
                            <stop stop-color="white" stop-opacity="0.5"/>
                            <stop offset="0.396285" stop-color="white" stop-opacity="0"/>
                        </linearGradient>
                        <clipPath id="clip0_cta_bot">
                            <rect width="248" height="175" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="about_cta_inner_overlay"></div>
            <div class="container grid">
                <div class=" about_cta_inner_content h2 h5_mb heading cl_linear">
                    <?php echo nl2br(esc_html(tr_posts_field('client_cta_text1') ?: "Have a Project in Mind,\nStart your project")); ?> 
                    <span class=" middle"><?php echo esc_html(tr_posts_field('client_cta_text2') ?: 'Now'); ?></span> 
                    <span class="cl_red middle"><?php echo esc_html(tr_posts_field('client_cta_text3') ?: 'Tell Us'); ?></span>
                    <div class="about_cta_inner_content_icon svg_full">
                        <svg width="21" height="30" viewBox="0 0 21 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.0342 0.000106148L0.121454 0L10.0872 14.8672L-7.74663e-05 29.9999L10.9127 30L21 14.8673L11.0342 0.000106148Z"
                                fill="#E62636" />
                        </svg>

                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
