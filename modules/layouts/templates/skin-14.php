<?php

/*

type: layout

name: Delivery and returns
position: 14

*/

?>

<?php

if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<?php
$title = '';
if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-14-<?php print $params['id'] ?>" rel="module">

    <div class="container-fluid">

        <p>Your order of $500.00 or more gets free standard delivery.</p>

        <div class="delivery-page-li py-3">
            <?php element_display('unordered-list.php'); ?>
        </div>

        <p>Orders are processed and delivered Monday - Friday (excluding public holidays) Nike Members enjoy free returns.</p>

    </div>
</section>



