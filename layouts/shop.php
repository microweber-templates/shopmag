<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 2
*/
?>

<?php include template_dir() . "header.php"; ?>

<?php
if (!isset($shop_sidebar)) {
    $shop_sidebar = false;
}
?>


<div class="edit" rel="content" field="shop-before-content">
    <module type="layouts" template="skin-16"/>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="row justify-content-between">

                <module type="shop" />

            </div>
        </div>
    </div>
</div>
<div class="edit" rel="content" field="shop-after-content">
    <p class="element"></p>
</div>


<?php include template_dir() . "footer.php"; ?>
