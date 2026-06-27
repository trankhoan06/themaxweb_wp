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
                    <div class="career_why_img_txt heading h4 h5_mb cl_linear"><?php echo esc_html(tr_posts_field('career_why_bottom_text') ?: 'Are you ready to become a TheMax-Er?'); ?></div>
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
if (is_array($positions) && !empty($positions)) :
    foreach($positions as $pos) :
?>
                    <a href="<?php echo esc_url($pos['link'] ?? '#'); ?>" class="career_why_list_item grid item_line">
                        <div class="career_why_list_item_position item_line_title heaeding h5 cl_linear"><?php echo esc_html($pos['position'] ?? ''); ?></div>
                        <div class="career_why_list_item_level txt_16"><?php echo esc_html($pos['level'] ?? ''); ?></div>
                        <div class="career_why_list_item_quality txt_16"><?php echo esc_html($pos['quantity'] ?? ''); ?></div>
                        <div class="career_why_list_item_deadline txt_16"><?php echo esc_html($pos['deadline'] ?? ''); ?></div>
                        <div class="home_case_content_item_txt_icon middle">
                            <div class="home_case_content_item_txt_icon_wrap svg_full"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#929292" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#929292" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                            <div class="home_case_content_item_txt_icon_wrap svg_full active"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                        </div>
                    </a>
<?php
    endforeach;
else:
?>
                    <a href="#" class="career_why_list_item grid item_line">
                        <div class="career_why_list_item_position item_line_title heaeding h5 cl_linear">ACCOUNT EXECUTIVE</div>
                        <div class="career_why_list_item_level txt_16">Junior/Senior</div>
                        <div class="career_why_list_item_quality txt_16">02</div>
                        <div class="career_why_list_item_deadline txt_16">31.02.2023</div>
                        <div class="home_case_content_item_txt_icon middle">
                            <div class="home_case_content_item_txt_icon_wrap svg_full"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#929292" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#929292" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                            <div class="home_case_content_item_txt_icon_wrap svg_full active"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                        </div>
                    </a>
                    <a href="#" class="career_why_list_item grid item_line">
                        <div class="career_why_list_item_position item_line_title heaeding h5 cl_linear">2D DESIGNER</div>
                        <div class="career_why_list_item_level txt_16">Junior/Senior</div>
                        <div class="career_why_list_item_quality txt_16">01</div>
                        <div class="career_why_list_item_deadline txt_16">31.02.2023</div>
                        <div class="home_case_content_item_txt_icon middle">
                            <div class="home_case_content_item_txt_icon_wrap svg_full"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#929292" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#929292" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                            <div class="home_case_content_item_txt_icon_wrap svg_full active"><svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1164_690)"><path d="M12 12H36.0003V36.0003" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /><path d="M12 36.0003L36.0003 12" stroke="#F32B3B" stroke-width="2" stroke-linejoin="round" /></g><defs><clipPath id="clip0_1164_690"><rect width="48" height="48" fill="white" /></clipPath></defs></svg></div>
                        </div>
                    </a>
<?php endif; ?>
                </div>
            </div>
        </section>
        <section class="about_cta">
            <div class="about_cta_img img_full">
                <?php $cta_img = wp_get_attachment_image_url(tr_posts_field('career_cta_img'), 'full') ?: get_template_directory_uri() . '/images/img_cta.webp'; ?>
                <img src="<?php echo esc_url($cta_img); ?>" alt="">
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
            <div class="container">
                <div class=" about_cta_inner_content">
                    <div class="about_cta_inner_content_title grid">
                        <div class="about_cta_inner_content_title_txt heading h2 cl_linear h5_mb"><?php echo nl2br(esc_html(tr_posts_field('career_cta_title') ?: "Still haven’t found\nthe job you like?")); ?></div>
                        <div class="about_cta_inner_content_des txt_18"><?php echo nl2br(esc_html(tr_posts_field('career_cta_desc') ?: "Don't hesitate to leave your application; we will contact you as\nsoon as a suitable position becomes available.")); ?></div>
                        <a href="<?php echo esc_url(tr_posts_field('career_cta_btn_link') ?: '#'); ?>"
                            class="about_cta_inner_content_title_button hover_txt button_hover txt_uppercase txt_14 cl_be">
                            <div class="hover_txt_grid">
                                <?php $cta_btn_txt = esc_html(tr_posts_field('career_cta_btn_text') ?: 'Apply now'); ?>
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
 