<?php
add_action('edit_form_after_title', function ($post) {
    if ($post->post_type == 'page' && basename(get_page_template()) == "our-client.php") {
        remove_post_type_support('page', 'editor');
        $form = tr_form();
        echo '<div class="typerocket-container">';

        echo beginBox("Hero Section", true);
        echo $form->textarea('client_hero_title')->setLabel("Hero Title");
        echo $form->textarea('client_hero_desc')->setLabel("Hero Description");
        echo $form->text('client_hero_subtitle')->setLabel("Hero Subtitle");
        echo endBox();

        echo beginBox("Tabs & Logos", true);
        echo $form->text('tab1_name')->setLabel("Tab 1 Name (e.g. Real Estate Clients)");
        echo $form->repeater('tab1_logos')->setLabel('Tab 1 Logos')->setFields([
            $form->image('logo')->setLabel('Logo Image'),
            $form->text('link')->setLabel('Link (Optional)')
        ]);

        echo $form->text('tab2_name')->setLabel("Tab 2 Name (e.g. Real Estate Projects)");
        echo $form->repeater('tab2_logos')->setLabel('Tab 2 Logos')->setFields([
            $form->image('logo')->setLabel('Logo Image'),
            $form->text('link')->setLabel('Link (Optional)')
        ]);

        echo $form->text('tab3_name')->setLabel("Tab 3 Name (e.g. Web & Mobile App)");
        echo $form->repeater('tab3_logos')->setLabel('Tab 3 Logos')->setFields([
            $form->image('logo')->setLabel('Logo Image'),
            $form->text('link')->setLabel('Link (Optional)')
        ]);
        echo endBox();
        echo beginBox("Call to Action (CTA)", true);
        echo $form->image('about_cta_img')->setLabel("CTA Image");
        echo $form->text('about_cta_link')->setLabel("CTA Link");
        echo $form->textarea('about_cta_text1')->setLabel("CTA Text Line 1");
        echo $form->text('about_cta_text2')->setLabel("CTA Text Line 2 (White)");
        echo $form->text('about_cta_text3')->setLabel("CTA Text Line 3 (Red)");
        echo endBox();
        echo '</div>';
    }
});
