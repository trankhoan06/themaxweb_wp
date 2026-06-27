<?php
add_action('edit_form_after_title', function($post) {
    if ($post->post_type == 'page' && basename(get_page_template()) == "our-client.php") {
        remove_post_type_support( 'page', 'editor' );
        $form = tr_form();
        echo '<div class="typerocket-container">';

        echo beginBox("Hero Section", true);
        echo $form->textarea('client_hero_title')->setLabel("Hero Title");
        echo $form->textarea('client_hero_desc')->setLabel("Hero Description");
        echo endBox();

        echo beginBox("Tabs & Logos", true);
        echo $form->text('tab1_name')->setLabel("Tab 1 Name (e.g. Real Estate Clients)");
        echo $form->gallery('tab1_gallery')->setLabel("Tab 1 Logos");

        echo $form->text('tab2_name')->setLabel("Tab 2 Name (e.g. Real Estate Projects)");
        echo $form->gallery('tab2_gallery')->setLabel("Tab 2 Logos");

        echo $form->text('tab3_name')->setLabel("Tab 3 Name (e.g. Web & Mobile App)");
        echo $form->gallery('tab3_gallery')->setLabel("Tab 3 Logos");
        echo endBox();

        echo beginBox("Call to Action (CTA)", true);
        echo $form->text('client_cta_text1')->setLabel("CTA Text Line 1");
        echo $form->text('client_cta_text2')->setLabel("CTA Text Highlight (white)");
        echo $form->text('client_cta_text3')->setLabel("CTA Text Highlight (red)");
        echo $form->text('client_cta_link')->setLabel("CTA Link");
        echo endBox();

        echo '</div>';
    }
});
