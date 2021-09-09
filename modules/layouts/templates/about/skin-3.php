<?php

/*

type: layout

name: About 3

position: 3

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


<section class="section edit safe-mode nodrop" data-background-position="center bottom" field="layout-blockquotes-skin-3-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">
        <div class="gp-text-with-icon-2">
            <div data-section-id="gp-avatars" data-section-type="gp-avatars-section" class="gp-section-wrapper not-fullwidth-section">
                <div class="gp-avatars gp-section-inner">

                    <h3 class="title-avatars text-center" style="margin-bottom: 30px;color: #2c2c2c;">
                        The Leader Board Of Our Company
                    </h3>

                    <module type="teamcard" template="skin-3">
                </div>
            </div>
        </div>
    </div>
</section>
