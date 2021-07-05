<?php

/*

type: layout

name: Home 1

position: 0

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_bottom'] . ' ';
?>
<div class="container-fluid <?php print $layout_classes; ?> nodrop edit" field="layout-home-skin-1-<?php print $params['id'] ?>" rel="global"">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-12 order-1 pb-lg-0 pb-4">

            <div class="effect-zoom-overlay">
                <div class="shopmag-home-image" style="background-image: url('<?php print template_url(); ?>assets/images/home-1.jpg');">
                    <module type="btn" template="shopmag-home" class="shopmag-home-button-big" button_style="shopmag-home-big" button_text="New Arrivals">
                </div>
            </div>
        </div>

        <div class=" col-lg-3 col-md-6 col-12 order-2 pb-lg-0 pb-4">
            <div class="effect-zoom-overlay">
                <div class="shopmag-home-image" style="background-image: url('<?php print template_url(); ?>assets/images/home-3.jpg');">
                    <module type="btn" template="shopmag-home" class="shopmag-home-button-small" button_style="shopmag-home-small" button_text="Women Collection">
                </div>
            </div>
        </div>

        <div class=" col-lg-3 col-md-6 col-12 order-3 pb-lg-0 pb-4">
            <div class="effect-zoom-overlay">

                <div class="shopmag-home-image" style="background-image: url('<?php print template_url(); ?>assets/images/home-2.jpg');">
                    <module type="btn" template="shopmag-home" class="shopmag-home-button-small" button_style="shopmag-home-small" button_text="Men Collection">
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

