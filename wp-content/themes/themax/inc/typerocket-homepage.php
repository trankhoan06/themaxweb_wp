<?php
add_action('edit_form_after_title', function($post) {
    if ($post->post_type == 'page' && basename(get_page_template()) == "homepage.php") {
        remove_post_type_support( 'page', 'editor' );
        $form = tr_form();
        echo '<div class="typerocket-container">';
        
        echo beginBox("Banner Chính",true);
        echo $form->file('home_banner_video')->setLabel("Banner Video (.mp4)");
        echo endBox();

        echo beginBox("Intro Images (Giới thiệu)",true);
        echo $form->gallery('home_intro_images')->setLabel("Danh sách hình ảnh");
        echo endBox();

        echo beginBox("Specialize (Lĩnh vực chuyên môn)",true);
        echo $form->image('specialize_bg')->setLabel("Hình nền chuyên môn");
        echo $form->row(
            $form->image('specialize_icon_top')->setLabel("Icon Top"),
            $form->image('specialize_icon_center')->setLabel("Icon Center"),
            $form->image('specialize_icon_bottom')->setLabel("Icon Bottom")
        );
        echo $form->text('specialize_title')->setLabel("Tiêu đề lớn");
        echo $form->text('specialize_subtitle')->setLabel("Tiêu đề phụ");
        echo $form->textarea('specialize_description')->setLabel("Mô tả ngắn");
        echo $form->row(
            $form->text('specialize_btn_text')->setLabel("Text nút bấm"),
            $form->text('specialize_btn_link')->setLabel("Link nút bấm")
        );
        echo endBox();

        echo beginBox("Services (Dịch vụ)",true);
        echo $form->repeater('home_services')->setLabel("Danh sách dịch vụ")->setFields([
            $form->text('title')->setLabel("Tên dịch vụ"),
            $form->textarea('description')->setLabel("Mô tả dịch vụ"),
            $form->text('bottom_des')->setLabel("Tiêu đề phụ (MARKETING CAMPAIGN)"),
            $form->image('image')->setLabel("Hình ảnh dịch vụ"),
            $form->repeater('service_list')->setLabel("Các hạng mục con")->setFields([
                $form->text('item')->setLabel("Tên hạng mục")
            ])
        ]);
        echo endBox();

        echo beginBox("Case Studies (Dự án)",true);
        echo $form->repeater('home_cases')->setLabel("Danh sách dự án")->setFields([
            $form->text('title')->setLabel("Tên dự án"),
            $form->text('client')->setLabel("Tên đối tác / Client"),
            $form->text('type')->setLabel("Loại dự án (VD: WEBSITE)"),
            $form->image('image')->setLabel("Hình ảnh dự án")
        ]);
        echo endBox();

        echo beginBox("Our Clients (Khách hàng)",true);
        echo $form->image('clients_pattern')->setLabel("Pattern Background");
        echo $form->repeater('home_clients_tab1')->setLabel("Logo Tab 1 (Real Estate Clients)")->setFields([
            $form->image('logo')->setLabel("Logo đối tác")
        ]);
        echo $form->repeater('home_clients_tab2')->setLabel("Logo Tab 2 (Real Estate Projects)")->setFields([
            $form->image('logo')->setLabel("Logo đối tác")
        ]);
        echo $form->repeater('home_clients_tab3')->setLabel("Logo Tab 3 (Web & Mobile App)")->setFields([
            $form->image('logo')->setLabel("Logo đối tác")
        ]);
        echo endBox();

        echo beginBox("The Team (Đội ngũ)",true);
        echo $form->image('team_image')->setLabel("Hình ảnh đội ngũ");
        echo $form->text('team_title')->setLabel("Tiêu đề");
        echo $form->text('team_subtitle')->setLabel("Tiêu đề phụ");
        echo $form->textarea('team_description')->setLabel("Mô tả");
        echo $form->row(
            $form->text('team_btn_text')->setLabel("Text nút bấm"),
            $form->text('team_btn_link')->setLabel("Link nút bấm")
        );
        echo endBox();

        echo beginBox("Global Network",true);
        echo $form->repeater('home_network')->setLabel("Danh sách Global Network")->setFields([
            $form->text('name')->setLabel("Tên Network"),
            $form->text('link')->setLabel("Link (URL)")
        ]);
        echo endBox();
        echo '</div>';
    }
});
