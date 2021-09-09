<?php

/*

  type: layout
  content_type: static
  name: Forgot password
  position: 9
  description: Forgot password page

*/

?>
<?php include template_dir() . "header.php"; ?>

<?php
if (is_logged() == true) {
    return mw()->url_manager->redirect(profile_url());
}
?>

<div class="edit main-content" rel="module" field="shopmag_content">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="m-auto allow-drop" style="max-width: 400px;">
                    <module type="users/forgot_password" />
                </div>
            </div>
        </div>
    </div>
</div>


<?php include template_dir() . "footer.php"; ?>
