<?php
// template-parts/content-case-study.php

$item_link = get_permalink();
$hero_subtitle = tr_posts_field('hero_subtitle', get_the_ID());
if (empty($hero_subtitle)) {
    $hero_subtitle = get_the_title(); 
}

$info_list = tr_posts_field('info_list', get_the_ID());
$type = 'WEBSITE';
if (!empty($info_list) && is_array($info_list)) {
    foreach ($info_list as $info) {
        if (strtoupper($info['title'] ?? '') === 'CATEGORY') {
            $type = $info['content'];
            break;
        }
    }
    if ($type === 'WEBSITE' && isset($info_list[0]['content'])) {
        $type = $info_list[0]['content'];
    }
}

$hero_bg_id = tr_posts_field('hero_bg', get_the_ID());
if ($hero_bg_id) {
    $item_img = wp_get_attachment_image_url($hero_bg_id, 'full');
} else {
    $item_img = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/images/case.webp';
}
?>
<a href="<?php echo esc_url($item_link); ?>" class="home_case_content_item" style="display:block; text-decoration:none;">
    <div class="home_case_content_item_des cl_be">
        <div class="home_case_content_item_des_txt txt_15 txt_medium"><?php echo esc_html($hero_subtitle); ?></div>
        <div class="home_case_content_item_des_txt txt_15 txt_medium"><?php echo esc_html($type); ?></div>
    </div>
    <div class="home_case_content_item_img_outer">
        <div class="home_case_content_item_img img_full">
            <img src="<?php echo esc_url($item_img); ?>" alt="<?php the_title_attribute(); ?>">
        </div>
    </div>
    <div class="home_case_content_item_txt">
        <div class="home_case_content_item_txt_title heading cl_be h4 h5_mb"><?php the_title(); ?></div>
        <div class="home_case_content_item_txt_icon">
            <div class="home_case_content_item_txt_icon_wrap svg_full">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
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
                </svg>
            </div>
            <div class="home_case_content_item_txt_icon_wrap svg_full active">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
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
                </svg>
            </div>
        </div>
    </div>
</a>
