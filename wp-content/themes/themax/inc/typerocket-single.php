<?php

$box = tr_meta_box('Single Page Details');
$box->addScreen('post');
$box->addScreen('case-study-detail');

$box->setCallback(function() {
    $form = tr_form();

    // Hero Section
    echo "<h3>Hero Section</h3>";
    echo $form->image('hero_bg')->setLabel('Background Image');
    echo $form->image('hero_logo')->setLabel('Logo Image');
    echo $form->text('hero_subtitle')->setLabel('Subtitle Text');

    // Info Section
    echo "<h3>Info Section (Categories, Clients, etc.)</h3>";
    $info = $form->repeater('info_list')->setFields([
        $form->text('title')->setLabel('Title (e.g., CATEGORY)'),
        $form->text('content')->setLabel('Content (e.g., Website, Branding)')
    ])->setLimit(4);
    echo $info;

    // Content Items (The Solution)
    echo "<h3>Content / Blog Items</h3>";
    $blog = $form->repeater('blog_items')->setFields([
        $form->text('title')->setLabel('Title (e.g., The Solution)'),
        $form->textarea('subtitle')->setLabel('Subtitle'),
        $form->textarea('description')->setLabel('Description'),
        $form->image('image')->setLabel('Image')
    ]);
    echo $blog;
    
    // CTA Section
    echo "<h3>CTA Section</h3>";
    echo "<p>Leave blank to use default values.</p>";
    echo $form->text('cta_line1')->setLabel('CTA Line 1');
    echo $form->text('cta_line2')->setLabel('CTA Line 2');
    echo $form->text('cta_highlight1')->setLabel('CTA Highlight (Middle)');
    echo $form->text('cta_highlight2')->setLabel('CTA Highlight (Red)');
});
