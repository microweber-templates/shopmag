<?php
$style = get_option('button_style', $params['id']);
$size = get_option('button_size', $params['id']);
$action = get_option('button_action', $params['id']);
$url = get_option('url', $params['id']);
$popupcontent = get_option('popupcontent', $params['id']);
$text = get_option('text', $params['id']);
$description = get_option('description', $params['id']);

$url_blank = get_option('url_blank', $params['id']);
?>
<div class="mw-ui-field-holder">
    <div class="mw-ui-row-nodrop">
        <div class="mw-ui-col">
            <div class="mw-ui-col-container">
                <label class="mw-ui-label">
                    <?php _lang("Style", "templates/shopmag"); ?>
                </label>
                <select class="mw-ui-field mw_option_field" name="button_style">
                    <option <?php if ($style == 'shopmag-btn-skin-home-big'): ?>selected<?php endif; ?> value="shopmag-btn-skin-home-big"><?php _lang("Big", "templates/shopmag"); ?></option>
                    <option <?php if ($style == 'shopmag-btn-skin-home-small'): ?>selected<?php endif; ?> value="shopmag-btn-skin-home-small"><?php _lang("Small", "templates/shopmag"); ?></option>
                    <option <?php if ($style == 'shopmag-btn-skin-home-slider'): ?>selected<?php endif; ?> value="shopmag-btn-skin-home-slider"><?php _lang("Slider", "templates/shopmag"); ?></option>
                </select>
            </div>
        </div>
    </div>
</div>
