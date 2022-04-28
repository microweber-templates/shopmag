<?php

/*

type: layout

name: Default

description: Default

*/
?>
<?php

if (isset($params['content-id'])) {
    $product = get_content_by_id($params["content-id"]);
    $title = $product['title'];
} else {
    $title = _e("Product", true);
}


?>

<br class="mw-add-to-cart-spacer"/>

<div class="row product-custom-fields-holder">
    <div class="col-lg-3 col">&nbsp;</div>
    <div class="col-lg-9 col">
        <module type="custom_fields" data-content-id="<?php print intval($for_id); ?>" data-skip-type="price" id="cart_fields_<?php print $params['id'] ?>" />
    </div>
</div>

<?php if (is_array($data)): ?>
    <div class="price">
        <div class="mw-price-item text-md-start text-center">
            <?php if (!isset($in_stock) or $in_stock == false) : ?>
                <button class="btn btn-default float-md-end" type="button"
                        onclick="alert('<?php print addslashes(_e("This item is out of stock and cannot be ordered", true)); ?>');">
                    <i class="icon-shopping-cart glyphicon glyphicon-shopping-cart"></i>
                    <?php _lang("Out of stock", "templates/shopmag"); ?>
                </button>
            <?php else: ?>

                <button class="btn btn-primary d-block w-100 float-end mt-5" type="button" onclick="mw.cart.add('.mw-add-to-cart-<?php print $params['id'] ?>', '<?php print $title; ?>');">
                    <i class="fa fa-shopping-cart"></i>
                    <?php _lang($button_text !== false ? $button_text : "Add to cart", "templates/shopmag"); ?>
                </button>
                <div class="clearfix"></div>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>

