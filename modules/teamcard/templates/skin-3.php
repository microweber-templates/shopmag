<?php

/*

type: layout

name: Skin - 3

description: Skin - 3

*/
?>

<div class="content-avatars row">

    <?php
    $count = 0;
    $default_img = template_url() . 'assets/img/card-active.png';

    if (isset($data) AND !empty($data)): ?>
        <?php foreach ($data as $key => $slide):
            $count++;
            ?>

            <?php if ($slide['file']) {
            $member_img = thumbnail($slide['file'], 500, 790, true);
        } else {
            $member_img = $default_img;
        }

            ?>
            <div class="item-avatars col-lg-3 col-md-6 col-sm-4 col-6">
                <div class="avatars-bg">
                    <div class="avatars-image">
                        <img src="<?php print $member_img; ?>"/>
                    </div>

                    <div class="avatars-content-inner">
                        <div class="info-client">
                            <div class="avatars-name"><?php print array_get($slide, 'name'); ?></div>
                            <div class="avatars-job"><?php print array_get($slide, 'role'); ?></div>
                        </div>
                        <div class="content-socials">
                            <div class="icon-show-social"><i class="mdi mdi-plus"></i></div>
                           <module type="social_links">
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php else: ?>
        <div class="item-avatars col-lg-3 col-md-6 col-sm-4 col-6">
            <div class="avatars-bg">
                <div class="avatars-image">
                    <img src="<?php print $default_img; ?>">
                </div>

                <div class="avatars-content-inner">
                    <div class="info-client">
                        <div class="avatars-name">Adelaide</div>
                        <div class="avatars-job">Head of design</div>
                    </div>
                    <div class="content-socials">
                        <div class="icon-show-social"><i class="mdi mdi-plus"></i></div>
                        <ul class="socials">
                            <li><a href="#"><i class="mdi mdi-facebook"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                            <li><a href="#"><i class="mdi mdi-pinterest"></i></a></li>
                            <!-- <li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
