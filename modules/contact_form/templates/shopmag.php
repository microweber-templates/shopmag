<?php

/*

type: layout

name: Shopmag

description: Shopmag

*/
?>

<form method="post" id="newsletters-form-<?php print $params['id'] ?>" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form(); ?>

    <div class="row" style="display: none;">
        <div class="col-12">
            <module type="custom_fields"/>
        </div>
    </div>
    <div class="input-group password__input-group">
        <input type="hidden" name="contact[tags]" value="newsletter">
        <input type="email" name="contact[email]" id="Email2" class="input-group__field newsletter__input input-large email-input" value="" placeholder="Your email address" autocapitalize="off" required="">

        <span class="input-group__btn">
            <button type="submit" class="btn newsletter__submit" name="commit"><span>Subscribe</span></button>
        </span>
    </div>
</form>
