<?php

/*

  type: layout
  content_type: static
  name: Error 404
  position: 13
  description: Error 404

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="main-content edit" field="404" rel="global">
    <div class="container-fluid">
        <div class="row">
            <div class="not_found_text col-4 align-self-center">
                <h1><?php _lang("Oops", "templates/shopmag"); ?>!</h1>
                <p class="my-3"><?php _lang("A 404 error is a standard HTTP error
                 message code that means the website you
                  were trying to reach couldn't be found on the server", "templates/shopmag"); ?>.
                </p>
                <module type="btn" button_size="px-6" button_text="Go back"/>
            </div>

            <div class="col-8 text-center not_found_img">
                <img src="<?php print template_url(); ?>assets/images/404_graphic.png"/>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>
