<?php

/*
  type: layout
  content_type: static
  name: Home
  position: 1
  description: Home layout
*/

?>

<?php include template_dir() . "header.php"; ?>

<div class="edit main-content" rel="content" field="new-world_content">
    <module type="layouts" template="home-sliders/skin-1"/>
    <module type="layouts" template="home/skin-1"/>
    <module type="layouts" template="home/skin-2"/>
</div>

<?php include template_dir() . "footer.php"; ?>




