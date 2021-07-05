<?php

/*

type: layout

name: Default

description: Default register template

*/

?>
<?php if (is_logged() == false): ?>
    <script type="text/javascript">
        mw.moduleCSS("<?php print modules_url(); ?>users/users_modules.css");
        mw.require('forms.js', true);
        mw.require('url.js', true);
        $(document).ready(function () {
            mw.$('#user_registration_form_holder').submit(function () {
                mw.form.post(mw.$('#user_registration_form_holder'), '<?php print site_url('api') ?>/user_register', function () {
                    mw.response('#register_form_holder', this);
                    if (this.success) {
                        mw.reload_module('users/register');
                        window.location.href = window.location.href;
                    }
                });
                return false;
            });
        });
    </script>

    <div id="register_form_holder">
        <form class="p-t-10" action="#" id="user_registration_form_holder" method="post">
            <?php print csrf_form(); ?>
            <?php if ($form_show_first_name): ?>
                <div class="form-group">
                    <input class="form-control input-lg" type="text" name="first_name" placeholder="<?php _e('First Name'); ?>">
                </div>
            <?php endif; ?>

            <?php if ($form_show_last_name): ?>
                <div class="form-group">
                    <input class="form-control input-lg" type="text" name="last_name" placeholder="<?php _e('Last Name'); ?>">
                </div>
            <?php endif; ?>

            <div class="form-group">
                <input class="form-control input-lg" required type="email" name="email" placeholder="<?php _e('E-mail'); ?>*">
            </div>

            <div class="form-group">
                <input class="form-control input-lg" required type="password" name="password" placeholder="<?php _e('Password'); ?>*">
            </div>

            <?php if ($form_show_password_confirmation): ?>
                <div class="form-group">
                    <input class="form-control input-lg" type="password" name="password2" placeholder="<?php _e("Confirm Password"); ?>">
                </div>
            <?php endif; ?>

            <?php if (!$captcha_disabled): ?>
<!--                <label class="control-label">--><?php //_e('Security code'); ?><!--</label>-->
                <module type="captcha"/>
            <?php endif; ?>


<!--            <div class="row">-->
<!--                <div class="col-12">-->
<!--                    <p class="personal-data">--><?php //_e("Your personal data will be used to support your expirience
//                        throughout this website, to manage access to your account
//                        and for other purposes described in our"); ?><!-- <a href="#">--><?php //_e("privacy policy"); ?><!--</a>.</p>-->
<!--                </div>-->
<!--            </div>-->

            <button type="submit" class="btn btn-primary w-100 my-2"><?php print $form_btn_title ?></button>
        </form>
        <a href="<?php print login_url(); ?>" class="js-show-login-window btn btn-outline-primary w-100 mt-2"><span><?php _lang("Login" , "templates/shopmag"); ?></span></a>

    </div>
<?php else: ?>
    <p class="text-center">
        <?php _e("You Are Logged In"); ?>
    </p>
<?php endif; ?>
<br/>
