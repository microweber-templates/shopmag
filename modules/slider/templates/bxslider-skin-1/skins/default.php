<div class="img-holder center" style="background-image: url('<?php print thumbnail($slide['images'][0], 1920, 760); ?>');">
    <div class="container info-holder">
        <h2 class="shopmag-slider-heading"><?php echo $slide['primaryText']; ?></h2>
        <p class="shopmag-slider-subtitle"><?php echo $slide['secondaryText']; ?></p>

        <?php if ($slide['seemoreText']): ?>

            <div class="button m-t-20">
                <module type="btn" template="shopmag-home" button_style="btn btn-outline-primary shopmag-btn-skin-home-slider" button_text="<?php print $slide['seemoreText'] ?>">
            </div>        <?php endif; ?>
    </div>
</div>
