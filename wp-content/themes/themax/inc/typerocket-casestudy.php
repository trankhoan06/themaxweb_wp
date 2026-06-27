<?php
add_action('edit_form_after_title', function($post) {
    if ($post->post_type == 'page' && basename(get_page_template()) == "case-study.php") {
        remove_post_type_support( 'page', 'editor' );
        $form = tr_form();
        echo '<div class="typerocket-container">';

        echo beginBox("Hero Section", true);
        echo $form->textarea('cs_hero_title')->setLabel("Hero Title");
        echo $form->textarea('cs_hero_desc')->setLabel("Hero Description");
        echo endBox();

        echo beginBox("Case Studies", true);
        echo $form->repeater('cs_items')->setLabel("Items")->setFields([
            $form->text('client_name')->setLabel("Client Name (e.g. DAT XANH GROUP)"),
            $form->text('type')->setLabel("Project Type (e.g. WEBSITE)"),
            $form->image('image')->setLabel("Thumbnail Image"),
            $form->text('title')->setLabel("Project Title (e.g. Opal Garden)"),
            $form->text('link')->setLabel("Project Link")
        ]);
        echo $form->text('cs_see_more_text')->setLabel("See More Button Text");
        echo $form->text('cs_see_more_link')->setLabel("See More Button Link");
        echo endBox();

        echo beginBox("Call to Action (CTA)", true);
        echo $form->text('cs_cta_text1')->setLabel("CTA Text Line 1");
        echo $form->text('cs_cta_text2')->setLabel("CTA Text Highlight (white)");
        echo $form->text('cs_cta_text3')->setLabel("CTA Text Highlight (red)");
        echo $form->text('cs_cta_link')->setLabel("CTA Link");
        echo endBox();

        echo '</div>';
    }
});
