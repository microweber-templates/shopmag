<?php

/*

type: layout

name: About 1

position: 1

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-300';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-300';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>


<section class="section edit safe-mode nodrop" <?php print $layout_classes; ?> field="layout-about-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row gp-image-text-with-icon">
            <div class="item-image col-lg-6 col-md-12 col-12">
                <img src="<?php print template_url(); ?>assets/images/about-skin-1.jpg">
            </div>
            <div class="d-flex align-items-center col-lg-6 col-md-12 col-12">
                <div class="content-text-with-icon">
                    <div class="number-icon">

                        <div class="number">09</div>

                        <div class="icon-select">
                            <i class="theme-iconconfetti"></i>

                            <div class="title-icon">
                                YEARS<br> EXPERIENCE WORKING
                            </div>

                        </div>
                    </div>

                    <h1 class="title-page">Lusion providing rare &amp; beautiful items sourced both locally &amp; globally</h1>


                    <div class="content">
                        <p class="mb-3">We have worked hand-in-hand with a large scale of customers all over the world accomplishing a wide range of industries and services for 10+ years. Each of our work represents our dedication to the quality.</p>
                        <p class="mb-3">Please browse through our case studies to see the difference we can bring to your business.</p>
                        <p class="mb-3">Our comprehensive experience is the key to give our Clients best services.</p>
                    </div>


                    <div class="btn-contact">
                        <a href="#" class="btn btn--secondary">contact us</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
