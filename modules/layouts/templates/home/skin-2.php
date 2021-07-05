<?php

/*

type: layout

name: Home 2

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
<div class="container-fluid <?php print $layout_classes; ?> nodrop edit" field="layout-home-skin-2-<?php print $params['id'] ?>" rel="global"">

    <div class="row justify-content-center text-center mb-5">
        <h1>Heading title</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
    </div>

    <module type="shop" />

</div>
