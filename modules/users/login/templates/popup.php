<?php

/*

type: layout

name: Default

description: Login default

*/

?>
<?php $user = user_id(); ?>
<?php $have_social_login = false; ?>

<?php if ($user != false): ?>
        <module type="users/profile"/>
<?php else: ?>
    <script>
        $('.js-show-register-window', '#<?php print $params['id'] ?>').on('click', function () {
            $('.js-login-window').hide();
            $('.js-register-window').show();
        })
        $('.js-show-login-window', '#<?php print $params['id'] ?>').on('click', function () {
            $('.js-register-window').hide();
            $('.js-login-window').show();
        })
    </script>



    <div id="user_login_holder_<?php print $params['id'] ?>" >

<!--        <p>--><?php //_lang("If you already have an account" , "templates/shopmag"); ?><!-- <br/>--><?php //_lang("you can use it to log in." , "templates/shopmag"); ?><!--<br/><br/></p>-->

        <form method="post" id="user_login_<?php print $params['id'] ?>" action="#" autocomplete="off">

            <div class="alert alert-mini alert-danger margin-bottom-30" style="margin: 0;display: none;"></div>

            <div class="form-group mb-2">
                <input class="form-control mb-2 input-lg" type="text" name="username" placeholder="<?php _lang("Email address" , "templates/shopmag"); ?>*">
            </div>

            <div class="form-group mb-2 m-t-20">
                <input class="form-control mb-2 input-lg" type="password" name="password" placeholder="<?php _lang("Password" , "templates/shopmag"); ?>*">
            </div>

            <?php if (isset($login_captcha_enabled) and $login_captcha_enabled): ?>
                <module type="captcha"/>
            <?php endif; ?>

            <div class="row py-2">
                <div class="col-12 col-lg-6">
                    <div class="form-group">
                        <label class="styled-checkbox"><?php _lang("Remember me" , "templates/shopmag"); ?>
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex justify-content-end">
                    <p><a href="<?php print forgot_password_url(); ?>"><?php _lang("Forgot your password ?" , "templates/shopmag"); ?></a></p>
                </div>
            </div>

            <?php if (isset($_GET['redirect'])): ?>
                <input type="hidden" value="<?php echo mw()->format->clean_xss($_GET['redirect']); ?>" name="redirect">
            <?php endif; ?>

            <button type="submit" class="btn btn-primary d-block w-100 m-t-10 mb-1"><?php _lang("Login" , "templates/shopmag"); ?></button>
        </form>

        <?php
        # Login Providers
        $facebook = get_option('enable_user_fb_registration', 'users') == 'y';
        $twitter = get_option('enable_user_twitter_registration', 'users') == 'y';
        $google = get_option('enable_user_google_registration', 'users') == 'y';
        $windows = get_option('enable_user_windows_live_registration', 'users') == 'y';
        $github = get_option('enable_user_github_registration', 'users') == 'y';
        $mw_login = get_option('enable_user_microweber_registration', 'users') == 'y';

        if ($facebook or $twitter or $google or $windows or $github) {
            $have_social_login = true;
        } else {
            $have_social_login = false;
        }
        ?>

        <?php if ($have_social_login): ?>
            <div class="socials-login">
                <?php if ($facebook): ?>
                    <a href="<?php print api_link('user_social_login?provider=facebook') ?>" class="facebook"><i class="mdi mdi-facebook"></i></a>
                <?php endif; ?>

                <?php if ($twitter): ?>
                    <a href="<?php print api_link('user_social_login?provider=twitter') ?>" class="twitter"><i class="mdi mdi-twitter"></i></a>
                <?php endif; ?>

                <?php if ($google): ?>
                    <a href="<?php print api_link('user_social_login?provider=google') ?>" class="gplus"><i class="mdi mdi-google-plus"></i></a>
                <?php endif; ?>

                <?php if ($github): ?>
                    <a href="<?php print api_link('user_social_login?provider=github') ?>" class="github"><i class="mdi mdi-github"></i></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <br/>

<!--        <p class="or"><span>or</span></p>-->


            <a href="<?php print register_url(); ?>" class="js-show-register-window btn btn-outline-primary w-100"><span><?php _lang("Create New Account" , "templates/shopmag"); ?></span></a>

    </div>
<?php endif; ?>

