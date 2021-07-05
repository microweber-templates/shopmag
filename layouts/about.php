<?php

/*

type: layout
content_type: static
name: About us
position: 5
description: About us

*/


?>
<?php include template_dir() . "header.php"; ?>

    <div class="edit main-content" rel="content" field="shopmag_content">
        <module type="layouts" template="about/skin-1"/>
        <module type="layouts" template="about/skin-2"/>
        <module type="layouts" template="about/skin-3"/>
        <module type="layouts" template="about/skin-4"/>
        <module type="layouts" template="about/skin-5"/>
    </div>

<?php include template_dir() . "footer.php"; ?>
