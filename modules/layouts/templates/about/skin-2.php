<?php

/*

type: layout

name: About 2

position: 2

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


<section class="section edit safe-mode nodrop" <?php print $layout_classes; ?> field="layout-about-skin-2-<?php print $params['id'] ?>" rel="module">
    <div class="gp-text-list-icon">
        <div class="gp-text-list-icon gp-section-inner">

            <h3 class="title-text-list-icon text-center text-white">Responsible and sustainable development</h3>

            <div class="row">
                <div class="col-lg-4 col-12 pb-lg-0 pb-4">
                    <div class="content-text-icon">
                        <div class="info">
                            <h3 class="title">Our Vision</h3>
                            <ul>
                                <li>
                                    <span class="list-text">Good Service</span>
                                </li>
                                <li>
                                    <span class="list-text">For Community</span>
                                </li>
                                <li>
                                    <span class="list-text">Long Term Development</span>
                                </li>
                                <li>
                                    <span class="list-text">Save Our Planet</span>
                                </li>
                                <li>
                                    <span class="list-text">Help People</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 pb-lg-0 pb-4">
                    <div class="content-text-icon">
                        <div class="info">
                            <h3 class="title">Our Mision</h3>
                            <ul>
                                <li>
                                    <span class="list-text">Change The Habits</span>
                                </li>
                                <li>
                                    <span class="list-text">Best Quality</span>
                                </li>
                                <li>
                                    <span class="list-text">Think Big Do Bigger</span>
                                </li>
                                <li>
                                    <span class="list-text">Stability &amp; competence</span>
                                </li>
                                <li>
                                    <span class="list-text">Safer &amp; Better Life</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 pb-lg-0 pb-4">
                    <div class="content-text-icon">
                        <div class="info">
                            <h3 class="title">Our Promise</h3>
                            <ul>
                                <li>
                                    <span class="list-text">Sustainable Relationship</span>
                                </li>
                                <li>
                                    <span class="list-text">Renew Commitment</span>
                                </li>
                                <li>
                                    <span class="list-text">Provide The Best Solution</span>
                                </li>
                                <li>
                                    <span class="list-text">Profitable Relationship</span>
                                </li>
                                <li>
                                    <span class="list-text">Adapt With People's Needs</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
