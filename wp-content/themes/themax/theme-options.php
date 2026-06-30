<?php
if ( ! function_exists( 'add_action' )) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

// Setup Form
$form = tr_form()->useJson()->setGroup( $this->getName() );
?>

<h1>Theme Options</h1>
<div class="typerocket-container">
    <?php
    echo $form->open();

    // CTA Single Case Study
    $cta_single = function() use ($form) {
        echo "<h3>CTA Section (Global for Single Case Studies)</h3>";
        echo "<p>Set the global CTA content here. This will appear at the bottom of all Case Study single pages.</p>";
        echo $form->image('about_cta_img')->setLabel('CTA Image');
        echo $form->text('about_cta_link')->setLabel('CTA Link URL');
        echo $form->textarea('about_cta_text1')->setLabel('CTA Text Line 1');
        echo $form->text('about_cta_text2')->setLabel('CTA Text Line 2 (White)');
        echo $form->text('about_cta_text3')->setLabel('CTA Text Line 3 (Red)');
    };

    // CTA Single Career
    $cta_career = function() use ($form) {
        echo "<h3>CTA Section (Global for Single Careers)</h3>";
        echo "<p>Set the global CTA content here. This will appear at the bottom of all Career single pages.</p>";
        echo $form->image('career_cta_img')->setLabel('CTA Image');
        echo $form->text('career_cta_link')->setLabel('CTA Button Link URL');
        echo $form->text('career_cta_btn_text')->setLabel('CTA Button Text');
        echo $form->textarea('career_cta_title')->setLabel('CTA Title');
        echo $form->textarea('career_cta_des')->setLabel('CTA Description');
    };

    // Footer Settings
    $footer_settings = function() use ($form) {
        echo "<h3>Footer Settings</h3>";
        
        echo "<h4>Footer Video Button</h4>";
        echo $form->text('footer_video_button')->setLabel('Video Button Link (.mp4)');
        
        echo "<h4>Email</h4>";
        echo $form->text('footer_email')->setLabel('Email Address');
        
        echo "<h4>VN Office</h4>";
        echo $form->text('footer_vn_title')->setLabel('Title')->setDefault('VN OFFICE');
        echo $form->text('footer_vn_address1')->setLabel('Address Line 1');
        echo $form->text('footer_vn_address2')->setLabel('Address Line 2');
        echo $form->text('footer_vn_tel')->setLabel('Telephone');
        
        echo "<h4>US Office</h4>";
        echo $form->text('footer_us_title')->setLabel('Title')->setDefault('US OFFICE');
        echo $form->text('footer_us_address1')->setLabel('Address Line 1');
        echo $form->text('footer_us_address2')->setLabel('Address Line 2');
        echo $form->text('footer_us_tel')->setLabel('Telephone');
        
        echo "<h4>Social Links</h4>";
        echo $form->text('footer_social_fb')->setLabel('Facebook Link');
        echo $form->text('footer_social_zl')->setLabel('Zalo Link');
        echo $form->text('footer_social_li')->setLabel('LinkedIn Link');
        echo $form->text('footer_social_pi')->setLabel('Pinterest Link');
        
        echo "<h4>Copyright</h4>";
        echo $form->text('footer_text_policy')->setLabel('text policy')->setDefault('Privacy Policy');
        echo $form->text('footer_link_policy')->setLabel('Link policy')->setDefault('#');
        echo $form->text('footer_copyright')->setLabel('Copyright Text')->setDefault('© 2018-2026 TheMax. All Right Reserved.');

        echo "<hr><h3>Footer Settings (Tiếng Việt)</h3>";
        
        echo "<h4>VN Office (Tiếng Việt)</h4>";
        echo $form->text('footer_vn_title_vi')->setLabel('Title (Tiếng Việt)');
        echo $form->text('footer_vn_address1_vi')->setLabel('Address Line 1 (Tiếng Việt)');
        echo $form->text('footer_vn_address2_vi')->setLabel('Address Line 2 (Tiếng Việt)');
        
        echo "<h4>US Office (Tiếng Việt)</h4>";
        echo $form->text('footer_us_title_vi')->setLabel('Title (Tiếng Việt)');
        echo $form->text('footer_us_address1_vi')->setLabel('Address Line 1 (Tiếng Việt)');
        echo $form->text('footer_us_address2_vi')->setLabel('Address Line 2 (Tiếng Việt)');
        
        echo "<h4>Copyright (Tiếng Việt)</h4>";
        echo $form->text('footer_text_policy_vi')->setLabel('text policy (Tiếng Việt)');
        echo $form->text('footer_link_policy_vi')->setLabel('Link policy (Tiếng Việt)')->setDefault('#');
        echo $form->text('footer_copyright_vi')->setLabel('Copyright Text (Tiếng Việt)');
    };

    // SMTP Settings
    $smtp_settings = function() use ($form) {
        echo "<h3>SMTP Settings</h3>";
        echo "<p>Cấu hình SMTP để website có thể gửi email.</p>";
        echo $form->text('smtp_host')->setLabel('SMTP Host (vd: smtp.gmail.com)');
        echo $form->text('smtp_port')->setLabel('SMTP Port (vd: 465 hoặc 587)');
        echo $form->text('username')->setLabel('Username (Tài khoản Email SMTP)');
        echo $form->password('password')->setLabel('Password (Mật khẩu ứng dụng SMTP)');
        echo $form->checkbox('authentication')->setLabel('SMTP Authentication')->setText('Bật xác thực SMTP');
        echo $form->select('encryption')->setLabel('Encryption (Mã hoá)')->setOptions(['SSL' => 'ssl', 'TLS' => 'tls', 'Không có' => '']);
        echo $form->text('from_email')->setLabel('Gửi từ Email (From Email - vd: no-reply@themax.com)');
        
        echo "<hr><h4>Email Nhận Thông Báo</h4>";
        echo $form->text('receive_email')->setLabel('Nhận thông báo ứng tuyển/liên hệ tại Email');
    };

    // Save
    $save = $form->submit( 'Save Options' );

    // Layout
    tr_tabs()->setSidebar( $save )
        ->addTab( 'Single Case Study', $cta_single )
        ->addTab( 'Single Career', $cta_career )
        ->addTab( 'Footer', $footer_settings )
        ->addTab( 'SMTP', $smtp_settings )
        ->render( 'box' );
        
    echo $form->close();
    ?>
</div>
