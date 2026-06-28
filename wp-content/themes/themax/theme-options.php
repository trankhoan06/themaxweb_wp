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

    // Save
    $save = $form->submit( 'Save Options' );

    // Layout
    tr_tabs()->setSidebar( $save )
        ->addTab( 'Single Case Study', $cta_single )
        ->render( 'box' );
        
    echo $form->close();
    ?>
</div>
