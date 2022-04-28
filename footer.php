<?php if ($footer == 'true'): ?>

<footer class="site-footer default" data-section-id="footer">
    <div class="middle-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="custom-columns col-6 type-vertical-link-list gp-footer-block position-1">

                    <div class="vertical-link-list-wrapper align-left show-toggle-tablet show-toggle-mb">

                        <div class="title-content">
                            <h3>Company</h3>
                        </div>
                        <module type="menu" template="simple" id="footer_menu_1" name="footer_menu_1"/>
                    </div>
                </div>

                <div class="custom-columns col-6 type-vertical-link-list gp-footer-block position-2">
                    <div class="vertical-link-list-wrapper align-left show-toggle-tablet show-toggle-mb">
                        <div class="title-content">
                            <h3>Help</h3>
                        </div>
                        <module type="menu" template="simple" id="footer_menu_2" name="footer_menu_2"/>
                    </div>
                </div>

                <div class="custom-columns col-12 type-socials gp-footer-block position-3">
                    <div class="socials-wrapper justify-content-sm-start justify-content-center position-3"  >
                        <div class="content">
                            <h3 class="footer-titles">Follow Us</h3>
                            <p class="description">And get Free Shipping on all your orders!</p>
                        </div>

                        <module type="social_links" id="footer_socials" template="shopmag"/>
                    </div>
                </div>

                <div class="custom-columns col-md-12 col-12 type-newsletter gp-footer-block position-4">
                    <div class="newsletter-wrapper align-left newsletter-style-5" data-block-id="1553568282856">
                        <div class="content">
                            <h3 class="footer-titles">Sign up now &amp; get 10% off</h3>
                            <p class="description">Be the first to know about our new arrivals and exclusive offers.</p>
                        </div>

                        <module type="contact_form" template="shopmag" id="footer_newsletter"/>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col type-horizontal-link-list gp-footer-block position-5">
                    <div class="horizontal-link-list-wrapper align-left">
                        <module type="menu" template="simple" id="footer_menu" name="footer_menu_bottom"/>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col type-text gp-footer-block position-6">
                    <div class="text-wrapper align-right">
                        <div class="content">
                            ©<?php date('Y'); ?> <?php print powered_by_link(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


    <div class="bg-pines d-block d-lg-none bg-default" style="height: 50px;"></div>
<?php endif; ?>

</div>

<button id="to-top" class="btn" style="display: block;">
    <i class="mw-micon-Arrow-Up"></i>
</button>

<?php include('footer_cart.php'); ?>


<div class="modal js-shopmang2-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header p-0">
                <h6 class="modal-title"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<!--
<script>
    mw.lib.require('slick');
</script>-->

<script src="<?php print template_url(); ?>dist/main.min.js"></script>
</body>
</html>
