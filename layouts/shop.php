<?php

/*

type: layout
content_type: dynamic
name: Shop
is_shop: y
description: Showcase shop items in a sylish grid arrangement.
position: 4
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="module" field="content">
    <module type="layouts" template="skin-16"/>
</div>



<module type="shop" />


<div class="edit" rel="module" field="shop-after-content">
    <p class="element"></p>
</div>

<?php include template_dir() . "footer.php"; ?>
