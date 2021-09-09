<?php

/*

type: layout

name: Terms of use

position: 13

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

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-13-<?php print $params['id'] ?>" rel="module">

    <div class="container-fluid">

        <p class="mb-5">Yours Clothing Limited supplies products listed on the Yours Clothing, and BadRhino websites, and in our stores under the following Terms and Conditions. Please read these Terms and Conditions, and our Privacy and Cookie Policies carefully before using any of our websites, or ordering from us.</p>

        <p class="mb-5">The Terms and Conditions apply to your use of any Yours Clothing website and to any products you purchase from them; regardless of how you access the website, including any technologies or devices where our website is available to you at home, on the move or in store</p>


        <p class="mb-5">We reserve the right to update these Terms and Conditions at any time, and any updates affecting you or your purchases will be notified to you, by us in writing (via email), and on this page.</p>


        <p class="mb-5">The headings in these Conditions are for convenience only and shall not affect their interpretation.</p>


        <p class="mb-5">We recommend that you print and keep a copy of these Terms and Conditions for your future reference…</p>

    </div>
</section>
