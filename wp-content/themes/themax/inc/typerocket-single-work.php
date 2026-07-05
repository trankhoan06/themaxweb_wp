<?php

$box = tr_meta_box('Single Page Details');
$box->addScreen('work');
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
        $form->gallery('image')->setLabel('Images (Multiple allowed)'),
        $form->toggle('is_vertical')->setLabel('Hình dọc')->setText('Có (Dùng cho hình ảnh dọc)'),
        $form->text('spacing')->setLabel('Khoảng cách các ảnh (VD: 32)')
    ]);
    echo $blog;
    
});

add_action('init', function() {
    remove_post_type_support('post', 'editor');
}, 100);
