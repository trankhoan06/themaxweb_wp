<?php

$box = tr_meta_box('Career Detail Settings');
$box->addScreen('career');

$box->setCallback(function() {
    $form = tr_form();

    // Job Info
    echo "<h3>Job Information</h3>";
    $info = $form->repeater('job_info')->setFields([
        $form->text('label')->setLabel('Label (e.g., EXPERIENCE)'),
        $form->text('value')->setLabel('Value (e.g., Junior)')
    ])->setLimit(4);
    echo $info;

    // Job Description Sections
    echo "<h3>Job Description Sections</h3>";
    echo "<p>Nhập mỗi ý trên một dòng. Hệ thống sẽ tự động tạo thành các gạch đầu dòng.</p>";
    $desc = $form->repeater('job_description')->setFields([
        $form->text('title')->setLabel('Section Title (e.g., Mục tiêu công việc)'),
        $form->textarea('content')->setLabel('Content (Enter each bullet point on a new line)')
    ]);
    echo $desc;

    // CTA Section
    echo "<h3>CTA Section (Bottom)</h3>";
    echo "<p>Để trống để sử dụng nội dung mặc định.</p>";
    echo $form->text('cta_title')->setLabel('CTA Title');
    echo $form->textarea('cta_desc')->setLabel('CTA Description');
    echo $form->text('cta_btn_text')->setLabel('Button Text');
    echo $form->text('cta_btn_link')->setLabel('Button Link');
});
