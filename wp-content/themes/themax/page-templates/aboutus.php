<?php
/**
 * Template Name: aboutus
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
<main class="main" data-namespace="aboutus">

    <section class="about_hero" data-init>
        <div class="container">
            <div class="about_hero_img svg_full">
                <svg width="641" height="117" viewBox="0 0 641 117" fill="none" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">

                    <defs>
                        <!-- Tạo mặt nạ bằng các nét chữ màu trắng -->
                        <mask id="video-mask">
                            <path
                                d="M435.777 0L393.388 95.7474V0H357.202L320.5 54.3431L283.798 0H247.612V116.967H283.798V55.8958L306.543 91.0894H320.5H334.457L357.202 55.8958V116.967H384.083H393.388H424.921L429.573 105.063L455.42 38.8165L486.436 116.967H526.757L475.581 0H435.777Z"
                                fill="white" />
                            <path d="M602.23 63.1416L580.002 93.6773L597.06 116.967H641L602.23 63.1416Z" fill="white" />
                            <path d="M640.483 0H596.544L580.002 22.7724L601.713 53.308L640.483 0Z" fill="white" />
                            <path
                                d="M160.25 0V15.0091V51.2378H102.353V0H87.3621H51.1766H36.7024H0V15.0091H36.7024V116.967H51.1766V15.0091H87.3621V51.2378V65.7293V116.967H102.353V65.7293H160.25V101.958V116.967H175.241H233.655V101.958H175.241V65.7293H233.655V51.2378H175.241V15.0091H233.655V0H175.241H160.25Z"
                                fill="white" />
                        </mask>
                    </defs>

                    <!-- Lồng video vào trong SVG, chỉ hiển thị qua mặt nạ chữ trắng -->
                    <foreignObject width="100%" height="100%" mask="url(#video-mask)">
                        <!-- Thêm thẻ video với đường dẫn của bạn, style để video phủ vừa với SVG -->
                        <video src="<?php echo get_template_directory_uri(); ?>/images/video_button.mp4" autoplay loop
                            muted playsinline style="width: 100%; height: 100%; object-fit: cover;"></video>
                    </foreignObject>

                    <!-- Vẽ phần màu đỏ lên trên cùng (video sẽ không đè lên phần này) -->
                    <path d="M556.223 0H511.766L554.155 57.966L511.249 116.967H555.706L598.612 57.966L556.223 0Z"
                        fill="#EB4250" />
                </svg>
            </div>
            <div class="about_hero_content grid">
                <div class="about_hero_content_left">
                    <div class="about_hero_content_txt txt_18">
                        <?php echo wp_kses_post((tr_posts_field('about_hero_desc') ?? '') ); ?>
                    </div>
                </div>
                <div class="about_hero_content_right">
                    <div class="about_hero_content_right_name txt_40 cl_white">
                        <?php echo nl2br(esc_html(tr_posts_field('about_hero_title1') ?? '')); ?>
                    </div>
                    <div class="about_hero_content_right_name txt_40 cl_red txt_uppercase">
                        <?php echo esc_html(tr_posts_field('about_hero_title2') ?? ''); ?>
                    </div>
                    <div class="about_hero_content_right_name txt_24 cl_white">
                        <?php echo nl2br(esc_html(tr_posts_field('about_hero_title3') ?? '')); ?>
                    </div>
                </div>
            </div>
            <div class="about_hero_bg svg_full">
                <svg width="883" height="806" viewBox="0 0 883 806" fill="none" xmlns="hyttp://www.w3.org/2000/svg">
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
    <section class="about_impressive">
        <div class="container grid">
            <div class="about_impressive_left">
                <div class="about_impressive_left_subtitle block_arrow txt_16 txt_uppercase">
                    <?php echo esc_html((tr_posts_field('about_impr_subtitle') ?? '') ); ?>
                </div>
                <div class="about_impressive_left_img img_full left_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bg_pattern.webp" alt="">
                </div>
            </div>
            <div class="about_impressive_right">
                <div class="about_impressive_right_title heading h2 h4_mb cl_white">
                    <?php echo esc_html((tr_posts_field('about_impr_title') ?? '') ); ?>
                </div>
                <div class="about_impressive_right_des txt_16">
                    <?php echo nl2br(esc_html((tr_posts_field('about_impr_desc') ?? '') )); ?>
                </div>
                <div class="about_impressive_right_list">
                    <?php
                    $impr_list = (tr_posts_field('about_impr_list') ?? '');
                    if (is_array($impr_list) && !empty($impr_list)):
                        foreach ($impr_list as $impr_item):
                            ?>
                            <div class="about_impressive_right_list_item">
                                <div class="about_impressive_right_list_item_num cl_red heading h1 h1_mb">
                                    <?php echo esc_html($impr_item['number'] ?? ''); ?>
                                </div>
                                <div class="about_impressive_right_list_item_des txt_18 txt_medium">
                                    <?php echo esc_html($impr_item['label'] ?? ''); ?>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    endif; ?>
                </div>
            </div>

        </div>
    </section>
    <section class="about_company">
        <?php
        $comp_desk = wp_get_attachment_image_url((tr_posts_field('about_company_img_desktop') ?? ''), 'full') ?: get_template_directory_uri() . '/images/company.webp';
        $comp_mob = wp_get_attachment_image_url((tr_posts_field('about_company_img_mobile') ?? ''), 'full') ?: get_template_directory_uri() . '/images/company_mb.webp';
        ?>
        <div class="about_company_inner middle" style="background-image: url('<?php echo esc_url($comp_desk); ?>');">
        </div>
        <div class="about_company_inner mobile">
            <img src="<?php echo esc_url($comp_mob); ?>" alt="">
        </div>
    </section>
    <section class="about_best">
        <div class="container">
            <div class="about_best_subtitle block_arrow txt_16">
                <?php echo esc_html((tr_posts_field('about_best_subtitle') ?? '') ); ?>
            </div>
            <div class="about_best_title h2 h4_mb heading cl_linear">
                <?php echo wp_kses_post((tr_posts_field('about_best_title') ?? '') ); ?>
            </div>
            <div class="about_best_inner grid">
                <div class="about_best_left svg_full">
                    <svg width="536" height="478" viewBox="0 0 536 478" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M527.025 477.025H349.453L280.399 382.44L370.231 258.633L527.025 477.025Z"
                            stroke="#262626" fill="transparent" />
                        <path d="M525.136 0.5L368.354 216.774L280.614 92.9727L347.569 0.5H525.136Z" stroke="#262626"
                            fill="transparent" />
                        <path d="M183.009 0H2.10352L174.594 236.649L0 477.524H180.905L355.5 236.649L183.009 0Z"
                            fill="#E62636" />
                        <path
                            d="M10.76 239.32C10 239.32 9.27333 239.173 8.58 238.88C7.88667 238.573 7.27333 238.127 6.74 237.54C6.22 236.953 5.83333 236.227 5.58 235.36L7.66 234.52C7.87333 235.293 8.24667 235.94 8.78 236.46C9.31333 236.98 9.98 237.24 10.78 237.24C11.2333 237.24 11.6533 237.16 12.04 237C12.44 236.84 12.76 236.607 13 236.3C13.24 235.98 13.36 235.593 13.36 235.14C13.36 234.713 13.26 234.353 13.06 234.06C12.86 233.753 12.54 233.48 12.1 233.24C11.66 232.987 11.1 232.74 10.42 232.5L9.52 232.18C9.13333 232.033 8.74 231.853 8.34 231.64C7.94 231.427 7.56667 231.167 7.22 230.86C6.88667 230.54 6.62 230.167 6.42 229.74C6.22 229.313 6.12 228.82 6.12 228.26C6.12 227.54 6.30667 226.887 6.68 226.3C7.06667 225.713 7.59333 225.247 8.26 224.9C8.94 224.54 9.72667 224.36 10.62 224.36C11.54 224.36 12.3067 224.527 12.92 224.86C13.5467 225.18 14.0333 225.567 14.38 226.02C14.74 226.473 14.9867 226.907 15.12 227.32L13.14 228.16C13.06 227.88 12.9133 227.607 12.7 227.34C12.5 227.073 12.2267 226.853 11.88 226.68C11.5467 226.493 11.1333 226.4 10.64 226.4C10.2133 226.4 9.82 226.48 9.46 226.64C9.11333 226.8 8.83333 227.02 8.62 227.3C8.40667 227.567 8.3 227.88 8.3 228.24C8.3 228.76 8.51333 229.187 8.94 229.52C9.36667 229.84 9.98667 230.133 10.8 230.4L11.72 230.72C12.1867 230.88 12.6467 231.073 13.1 231.3C13.5533 231.513 13.9667 231.793 14.34 232.14C14.7133 232.473 15.0067 232.887 15.22 233.38C15.4467 233.86 15.56 234.433 15.56 235.1C15.56 235.833 15.4133 236.473 15.12 237.02C14.84 237.553 14.46 237.993 13.98 238.34C13.5133 238.673 12.9933 238.92 12.42 239.08C11.86 239.24 11.3067 239.32 10.76 239.32ZM20.0756 239V225.86H22.2556V239H20.0756ZM16.0556 226.76V224.68H26.2556V226.76H16.0556ZM27.8898 239V224.68H32.9098C33.7898 224.68 34.5765 224.867 35.2698 225.24C35.9632 225.613 36.5098 226.127 36.9098 226.78C37.3232 227.433 37.5298 228.193 37.5298 229.06C37.5298 229.633 37.4098 230.18 37.1698 230.7C36.9432 231.22 36.6098 231.687 36.1698 232.1C35.7432 232.5 35.2165 232.813 34.5898 233.04C33.9765 233.267 33.2832 233.38 32.5098 233.38H29.0898V231.36H32.8498C33.3032 231.36 33.7098 231.26 34.0698 231.06C34.4432 230.86 34.7432 230.587 34.9698 230.24C35.1965 229.88 35.3098 229.48 35.3098 229.04C35.3098 228.653 35.2165 228.287 35.0298 227.94C34.8432 227.58 34.5698 227.293 34.2098 227.08C33.8632 226.853 33.4365 226.74 32.9298 226.74H30.0898V239H27.8898ZM31.2098 232.46L33.7098 232.42L38.1898 238.88V239H35.6498L31.2098 232.46ZM38.8852 239L44.2852 224.68H46.7852L52.2052 239H49.7852L46.1452 228.9L45.6052 227.26H45.4852L44.9452 228.9L41.3052 239H38.8852ZM45.3652 235.32V233.28H48.6852L49.4052 235.32H45.3652ZM41.4652 235.32L42.1852 233.28H45.3652V235.32H41.4652ZM55.3405 239V225.86H57.5205V239H55.3405ZM51.3205 226.76V224.68H61.5205V226.76H51.3205ZM63.1547 239V224.68H71.8347V226.76H65.3547V236.92H71.8347V239H63.1547ZM64.3547 232.88V230.8H71.1947V232.88H64.3547ZM80.3355 239.32C79.3088 239.32 78.3421 239.133 77.4355 238.76C76.5288 238.387 75.7288 237.867 75.0355 237.2C74.3555 236.52 73.8155 235.727 73.4155 234.82C73.0288 233.9 72.8355 232.907 72.8355 231.84C72.8355 230.773 73.0288 229.787 73.4155 228.88C73.8155 227.96 74.3555 227.167 75.0355 226.5C75.7288 225.82 76.5288 225.293 77.4355 224.92C78.3421 224.547 79.3088 224.36 80.3355 224.36C81.4288 224.36 82.4355 224.553 83.3555 224.94C84.2888 225.327 85.0688 225.867 85.6955 226.56L84.1755 228.06C83.8688 227.713 83.5155 227.42 83.1155 227.18C82.7288 226.94 82.3021 226.76 81.8355 226.64C81.3688 226.507 80.8688 226.44 80.3355 226.44C79.6288 226.44 78.9555 226.567 78.3155 226.82C77.6755 227.073 77.1088 227.44 76.6155 227.92C76.1355 228.387 75.7555 228.953 75.4755 229.62C75.1955 230.273 75.0555 231.013 75.0555 231.84C75.0555 232.667 75.1955 233.413 75.4755 234.08C75.7688 234.733 76.1555 235.3 76.6355 235.78C77.1288 236.247 77.6955 236.607 78.3355 236.86C78.9755 237.113 79.6488 237.24 80.3555 237.24C81.0088 237.24 81.6155 237.147 82.1755 236.96C82.7488 236.773 83.2488 236.507 83.6755 236.16C84.1021 235.813 84.4488 235.393 84.7155 234.9C84.9821 234.393 85.1488 233.827 85.2155 233.2H80.3155V231.26H87.2755C87.3021 231.42 87.3288 231.607 87.3555 231.82C87.3821 232.02 87.3955 232.213 87.3955 232.4V232.42C87.3955 233.447 87.2155 234.387 86.8555 235.24C86.5088 236.093 86.0221 236.827 85.3955 237.44C84.7688 238.04 84.0221 238.507 83.1555 238.84C82.3021 239.16 81.3621 239.32 80.3355 239.32ZM91.5173 239V231.36H93.6973V239H91.5173ZM86.6773 224.68H89.2773L92.5373 230.08H92.6573L95.8373 224.68H98.4573L93.6973 232.36H91.5173L86.6773 224.68Z"
                            fill="#E62636" />
                        <path
                            d="M421.809 282.297L433.394 273.88L434.688 275.66L423.102 284.077L421.809 282.297ZM424.743 286.335L436.328 277.918L438.068 280.313L431.706 290.101L431.777 290.198L443.064 287.189L444.804 289.584L433.219 298.001L431.949 296.254L438.502 291.492L440.627 290.097L440.557 289.999L429.492 292.872L428.469 291.464L434.62 281.828L434.55 281.731L432.565 283.321L426.012 288.082L424.743 286.335ZM434.863 300.264L446.448 291.847L449.34 295.827C449.849 296.528 450.161 297.275 450.274 298.066C450.398 298.849 450.312 299.604 450.015 300.33C449.738 301.059 449.248 301.679 448.547 302.188C447.857 302.69 447.116 302.964 446.326 303.01C445.544 303.068 444.794 302.92 444.077 302.568C443.37 302.208 442.762 301.677 442.253 300.976L440.066 297.967L441.749 296.744L443.971 299.802C444.276 300.223 444.621 300.516 445.006 300.682C445.401 300.84 445.793 300.893 446.183 300.84C446.592 300.79 446.953 300.652 447.266 300.424C447.579 300.197 447.816 299.901 447.979 299.535C448.15 299.18 448.221 298.791 448.193 298.366C448.165 297.942 447.998 297.519 447.692 297.098L446.058 294.849L436.156 302.044L434.863 300.264ZM441.573 309.5L453.158 301.083L454.451 302.863L444.549 310.057L448.17 315.041L446.487 316.263L441.573 309.5ZM447.526 317.693L459.111 309.276L464.213 316.298L462.53 317.521L458.721 312.279L450.502 318.25L454.311 323.493L452.628 324.716L447.526 317.693ZM453.182 315.067L454.865 313.844L458.886 319.378L457.203 320.6L453.182 315.067ZM453.938 326.518L465.523 318.101L467.263 320.496L460.901 330.285L460.972 330.382L472.259 327.373L473.999 329.767L462.414 338.185L461.144 336.437L467.697 331.676L469.822 330.28L469.752 330.183L458.687 333.055L457.664 331.648L463.815 322.012L463.745 321.915L461.76 323.505L455.207 328.266L453.938 326.518ZM464.058 340.447L475.643 332.03L480.745 339.053L479.062 340.275L475.253 335.033L467.034 341.005L470.842 346.247L469.16 347.47L464.058 340.447ZM469.714 337.821L471.397 336.598L475.417 342.132L473.735 343.355L469.714 337.821ZM470.47 349.273L482.055 340.856L483.583 342.959L478.881 354.385L478.952 354.482L481.114 352.763L487.392 348.201L488.673 349.965L477.088 358.382L475.748 356.538L480.699 344.535L480.628 344.438L478.466 346.158L471.751 351.036L470.47 349.273ZM480.411 362.956L491.041 355.232L492.323 356.996L481.692 364.719L480.411 362.956ZM487.95 352.509L489.633 351.286L495.629 359.538L493.946 360.761L487.95 352.509ZM483.517 367.23L498.276 363.182L499.745 365.205L491.346 378.006L489.924 376.049L495.955 367.167L496.964 365.766L496.894 365.669L495.25 366.196L484.939 369.188L483.517 367.23ZM490.303 370.31L491.953 369.111L493.905 371.797L492.677 373.578L490.303 370.31ZM488.01 367.155L490.084 366.538L491.953 369.111L490.303 370.31L488.01 367.155ZM493.189 380.543L503.819 372.819L505.101 374.583L494.47 382.307L493.189 380.543ZM500.728 370.096L502.411 368.874L508.406 377.126L506.724 378.348L500.728 370.096ZM497.782 386.865L509.367 378.448L510.66 380.228L499.075 388.645L497.782 386.865ZM504.395 396.511C503.768 395.648 503.344 394.736 503.124 393.775C502.912 392.825 502.885 391.881 503.043 390.942C503.212 389.995 503.548 389.108 504.052 388.281C504.566 387.446 505.243 386.723 506.085 386.111C506.926 385.5 507.818 385.083 508.76 384.86C509.713 384.629 510.66 384.583 511.602 384.723C512.555 384.855 513.451 385.168 514.288 385.664C515.134 386.17 515.871 386.855 516.498 387.718C517.124 388.581 517.544 389.487 517.756 390.437C517.969 391.387 517.99 392.335 517.821 393.282C517.671 394.232 517.335 395.119 516.813 395.943C516.309 396.77 515.637 397.49 514.796 398.101C513.954 398.712 513.057 399.133 512.104 399.364C511.17 399.598 510.222 399.644 509.262 399.501C508.32 399.361 507.43 399.044 506.592 398.548C505.754 398.053 505.022 397.374 504.395 396.511ZM506.077 395.288C506.649 396.076 507.346 396.649 508.167 397.008C508.997 397.378 509.877 397.513 510.81 397.412C511.742 397.312 512.64 396.948 513.503 396.321C514.376 395.686 515 394.945 515.373 394.097C515.756 393.242 515.9 392.362 515.805 391.459C515.717 390.567 515.387 389.728 514.815 388.94C514.25 388.163 513.554 387.59 512.725 387.22C511.895 386.85 511.015 386.716 510.082 386.816C509.161 386.909 508.263 387.272 507.39 387.907C506.527 388.534 505.903 389.276 505.52 390.131C505.136 390.987 504.992 391.866 505.087 392.769C505.183 393.672 505.513 394.512 506.077 395.288ZM510.238 404.01L521.823 395.593L523.352 397.696L518.65 409.122L518.72 409.219L520.883 407.5L527.161 402.938L528.442 404.702L516.857 413.119L515.517 411.275L520.467 399.272L520.397 399.175L518.235 400.895L511.52 405.773L510.238 404.01Z"
                            fill="#7D7D7D" />
                        <path
                            d="M458.953 165.919C458.334 166.771 457.607 167.454 456.772 167.968C455.926 168.474 455.033 168.806 454.094 168.965C453.152 169.104 452.201 169.064 451.24 168.844C450.277 168.605 449.369 168.176 448.516 167.557C447.653 166.93 446.965 166.199 446.451 165.364C445.945 164.519 445.618 163.63 445.47 162.699C445.32 161.749 445.36 160.798 445.591 159.845C445.811 158.884 446.231 157.978 446.85 157.125C447.289 156.521 447.772 156.015 448.299 155.607C448.826 155.199 449.387 154.881 449.981 154.654C450.575 154.426 451.2 154.279 451.858 154.213L452.167 156.341C451.666 156.372 451.203 156.465 450.779 156.618C450.343 156.763 449.939 156.98 449.564 157.268C449.198 157.546 448.858 157.9 448.544 158.332C447.98 159.108 447.646 159.954 447.543 160.867C447.428 161.773 447.554 162.655 447.919 163.514C448.292 164.362 448.926 165.111 449.821 165.761C450.706 166.404 451.614 166.776 452.547 166.876C453.476 166.958 454.359 166.809 455.196 166.428C456.022 166.039 456.717 165.457 457.282 164.68C457.791 163.979 458.096 163.253 458.197 162.502C458.305 161.74 458.259 160.965 458.057 160.176L460.216 159.791C460.378 160.452 460.443 161.134 460.411 161.836C460.379 162.538 460.245 163.232 460.01 163.918C459.776 164.605 459.423 165.271 458.953 165.919ZM463.199 159.53L451.614 151.113L454.565 147.051C455.082 146.339 455.695 145.813 456.405 145.471C457.114 145.13 457.851 144.989 458.615 145.05C459.386 145.099 460.122 145.379 460.824 145.888C461.287 146.225 461.659 146.644 461.939 147.143C462.226 147.632 462.408 148.176 462.484 148.775C462.556 149.356 462.5 149.966 462.315 150.606C462.138 151.236 461.822 151.863 461.368 152.489L459.358 155.256L457.723 154.068L459.934 151.026C460.2 150.66 460.358 150.272 460.408 149.863C460.466 149.443 460.421 149.04 460.274 148.653C460.116 148.258 459.859 147.931 459.503 147.672C459.19 147.445 458.838 147.305 458.448 147.252C458.047 147.192 457.655 147.244 457.27 147.41C456.883 147.558 456.541 147.836 456.243 148.246L454.574 150.544L464.492 157.75L463.199 159.53ZM459.859 153L461.297 150.954L469.156 151.126L469.253 151.197L467.76 153.252L459.859 153ZM470.196 149.899L458.611 141.482L463.713 134.459L465.396 135.682L461.587 140.924L469.807 146.896L473.616 141.654L475.298 142.876L470.196 149.899ZM465.951 145.331L464.268 144.108L468.288 138.574L469.971 139.797L465.951 145.331ZM475.844 142.125L467.433 129.339L468.903 127.317L483.674 131.349L482.251 133.307L471.94 130.315L470.296 129.788L470.226 129.885L471.235 131.286L477.267 140.167L475.844 142.125ZM476.676 134.72L475.025 133.521L476.977 130.835L479.051 131.451L476.676 134.72ZM474.384 137.875L473.156 136.093L475.025 133.521L476.676 134.72L474.384 137.875ZM485.516 128.812L474.886 121.089L476.167 119.325L486.798 127.049L485.516 128.812ZM473.251 124.87L471.568 123.648L477.564 115.396L479.247 116.618L473.251 124.87ZM490.109 122.491L478.524 114.074L479.817 112.294L491.403 120.711L490.109 122.491ZM495.265 115.395L480.694 111.088L482.104 109.146L491.711 112.121L493.315 112.668L493.386 112.571L492.392 111.182L486.677 102.852L488.088 100.91L496.605 113.55L495.265 115.395ZM500.557 108.111L488.972 99.6939L494.074 92.6716L495.757 93.8942L491.948 99.1367L500.167 105.109L503.976 99.8661L505.659 101.089L500.557 108.111ZM496.311 103.543L494.628 102.32L498.649 96.7867L500.332 98.0092L496.311 103.543Z"
                            fill="#7D7D7D" />
                    </svg>


                </div>
                <div class="about_best_right txt_18">
                    <div class="about_best_right_des">
                        <?php echo esc_html((tr_posts_field('about_best_desc') ?? '') ); ?>
                    </div>
                    <div class="about_best_right_cap cl_red txt_medium">
                        <?php echo esc_html((tr_posts_field('about_best_cap') ?? '') ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about_team_wrap">
        <section class="about_team">
            <div class="container">
                <div class="about_team_inner">
                    <div class="about_team_bg svg_full">
                        <svg width="883" height="806" viewBox="0 0 883 806" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
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
                                    <feBlend mode="normal" in2="BackgroundImageFix"
                                        result="effect1_dropShadow_368_2651" />
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
                    <div class="about_team_title_wrap">
                        <div class="about_team_subtitle txt_uppercase txt_16 block_arrow txt_medium">
                            <?php echo esc_html((tr_posts_field('about_team_subtitle') ?? '') ); ?>
                        </div>
                        <div class="about_team_title txt_center h2 h4_mb heading cl_linear">
                            <?php echo nl2br(esc_html((tr_posts_field('about_team_title') ?? '') )); ?>
                        </div>
                        <div class="about_team_des txt_center txt_16">
                            <?php echo nl2br(esc_html((tr_posts_field('about_team_desc') ?? '') )); ?>
                        </div>
                    </div>

                    <div class="about_team_main grid">
                        <div class="about_team_content ">
                            <div class="about_team_content_mask"></div>
                            <div class="about_team_content_bgleft middle img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/pattern_left.webp" alt="">
                            </div>
                            <div class="about_team_content_main">
                                <div class="about_team_content_inner grid">
                                    <?php
                                    $team_list = (tr_posts_field('about_team_list') ?? '');
                                    if (is_array($team_list) && !empty($team_list)):
                                        foreach ($team_list as $team_item):
                                            ?>
                                            <div class="about_team_content_item_wrap ">
                                                <div class="about_team_content_item item_line">
                                                    <div class="about_team_content_item_icon img_full">
                                                        <?php $icon_url = wp_get_attachment_image_url($team_item['icon'] ?? 0, 'full') ?: get_template_directory_uri() . '/images/icon-careers.svg'; ?>
                                                        <img src="<?php echo esc_url($icon_url); ?>" alt="">
                                                    </div>
                                                    <div
                                                        class="about_team_content_item_title item_line_title cl_linear h5 heading txt_uppercase ">
                                                        <?php echo esc_html($team_item['title'] ?? ''); ?>
                                                    </div>
                                                    <?php if (!empty($team_item['sub'])): ?>
                                                    <div class="about_team_content_item_sub h6 heading cl_white ">
                                                        <?php echo esc_html($team_item['sub']); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                    <div class="about_team_content_item_des txt_14">
                                                        <?php echo nl2br(esc_html($team_item['desc'] ?? '')); ?>
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
                    </div>
                    <div class="about_team_block"></div>

                </div>
                <div class="about_team_card">
                    <div class="about_team_card_item">
                        <!-- Image wrap -->
                        <div class="about_team_card_img_wrap">
                            <?php
                            $team_cards = (tr_posts_field('about_team_cards') ?? '');
                            if (empty($team_cards)) {
                                // Fallback to single fields if exists, or defaults
                                $single_img = (tr_posts_field('about_team_card_img') ?? '');
                                $single_title = (tr_posts_field('about_team_card_title') ?? '') ;
                                $single_desc = (tr_posts_field('about_team_card_desc') ?? '') ;
                                $team_cards = [
                                    [
                                        'img' => $single_img,
                                        'title' => $single_title,
                                        'desc' => $single_desc
                                    ],
                                    [
                                        'img' => 0,
                                        'title' => 'Cultivating Excellence',
                                        'desc' => 'We foster a collaborative culture that brings out the best in our team. By empowering creative minds and using data-driven logic, we build brand experiences that resonate.'
                                    ],
                                    [
                                        'img' => 0,
                                        'title' => 'Empowering Growth',
                                        'desc' => 'Our mission is to drive digital transformation. We craft tailor-made strategies that optimize business growth, enhance user engagement, and deliver long-term value.'
                                    ]
                                ];
                            }

                            foreach ($team_cards as $index => $card):
                                $img_id = isset($card['img']) ? $card['img'] : 0;
                                $card_img = wp_get_attachment_image_url($img_id, 'full') ?: get_template_directory_uri() . '/images/' . (($index % 2 === 0) ? 'card.webp' : 'card2.jpg');
                                ?>
                                <div class="about_team_card_img_item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <img src="<?php echo esc_url($card_img); ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Shared content overlay box containing Swiper -->
                        <div class="about_team_card_item_content">
                            <!-- Swiper for text content -->
                            <div class="swiper about_team_card_swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($team_cards as $card):
                                        $card_title = isset($card["title"]) ? $card["title"] : "";
                                        $card_desc = isset($card["desc"]) ? $card["desc"] : "";
                                        ?>
                                        <div class="swiper-slide about_team_card_slide">
                                            <div class="about_team_card_item_content_title heading h5 cl_linear">
                                                <?php echo esc_html($card_title); ?>
                                            </div>
                                            <div class="about_team_card_item_content_des txt_14">
                                                <?php echo nl2br(esc_html($card_desc)); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <!-- Shared Bot navigation -->
                            <div class="about_team_card_item_content_bot">
                                <div class="about_team_card_item_content_bot_buton">
                                    <div
                                        class="about_team_card_item_content_bot_buton_item svg_full about_team_btn_prev">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" fill="#131313" />
                                            <path d="M23 14L17 20L23 26" stroke="#BEBEBE" stroke-width="1.5"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div
                                        class="about_team_card_item_content_bot_buton_item svg_full about_team_btn_next">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="40" height="40" fill="#131313" />
                                            <path d="M17 26L23 20L17 14" stroke="#BEBEBE" stroke-width="1.5"
                                                stroke-linecap="square" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="about_team_card_item_content_bot_page txt_14">
                                    <div class="about_team_card_item_content_bot_page_cur cl_red">01 /</div>
                                    <div class="about_team_card_item_content_bot_page_max">
                                        <?php echo sprintf("%02d", count($team_cards)); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <section class="about_cta">
        <div class="about_cta_img img_full">
            <?php $cta_img = wp_get_attachment_image_url((tr_posts_field('about_cta_img') ?? ''), 'full') ?: get_template_directory_uri() . '/images/img_cta.webp'; ?>
            <img src="<?php echo esc_url($cta_img); ?>" alt="">
        </div>
        <div class="about_cta_inner_bg">
            <svg class="about_cta_bg_red" width="100" height="273" viewBox="0 0 100 273" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1742_4330)">
                    <path
                        d="M-141.577 -191.969H-395.053L-153.367 136.065L-398 469.957H-144.525L100.109 136.065L-141.577 -191.969Z"
                        fill="url(#paint0_radial_1742_4330)" />
                </g>
                <defs>
                    <radialGradient id="paint0_radial_1742_4330" cx="0" cy="0" r="1"
                        gradientTransform="matrix(-249.054 330.963 -249.071 -187.403 100.109 138.994)"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E62636" />
                        <stop offset="0.504728" stop-color="#E62636" stop-opacity="0.05" />
                    </radialGradient>
                    <clipPath id="clip0_1742_4330">
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
        <div class="container grid">
            <div class=" about_cta_inner_content h2 h5_mb heading cl_linear">
                <?php echo nl2br(esc_html((tr_posts_field('about_cta_text1') ?? '') )); ?> 
                <span class=" middle"><?php echo esc_html((tr_posts_field('about_cta_text2') ?? '') ); ?></span> 
                <span class="cl_red middle"><?php echo esc_html((tr_posts_field('about_cta_text3') ?? '') ); ?></span>
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