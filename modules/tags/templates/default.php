<?php

/*

type: layout

name: Default

description: Default

*/
?>

<?php $current_tag = url_param('tags'); ?>

<div class="shopmag-tags d-flex justify-content-center">
    <?php foreach ($content_tags_data as $tag_item): ?>
            <ul>
                <li>
                    <a href="<?php print $tags_url_base ?><?php print $current_tag == $tag_item['tag_slug'] ? '' : '/tags:'. $tag_item['tag_slug'] ?>">
                        <?php print $tag_item['tag_name']; ?>
                    </a>
                </li>
            </ul>
    <?php endforeach; ?>
</div>

