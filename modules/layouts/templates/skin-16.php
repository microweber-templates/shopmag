<?php

/*

type: layout

name: Page Title - Left Breadcrumb

position: 11

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<?php
$title = 'Your Title Here';
if (page_title()) {
    $title = page_title();
}
?>

<section class="section edit safe-mode nodrop" field="layout-skin-11-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 ">
                <div class="col-1 float-lg-start">
                    <h1 class="page-title"><?php echo $title; ?><span class="text-primary"></span></h1>
                </div>
                <div class="col-3 d-flex float-start justify-content-start align-content-center mt-1">
                    <module type="breadcrumb"/>
                </div>
            </div>
        </div>
    </div>
</section>
