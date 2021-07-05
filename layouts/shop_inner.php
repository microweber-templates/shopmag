<?php include template_dir() . "header.php"; ?>

<?php
$content_data = content_data(CONTENT_ID);
$in_stock = true;
if (isset($content_data['qty']) and $content_data['qty'] != 'nolimit' and intval($content_data['qty']) == 0) {
    $in_stock = false;
}

if (isset($content_data['qty']) and $content_data['qty'] == 'nolimit') {
    $available_qty = '';
} elseif (isset($content_data['qty']) and $content_data['qty'] != 0) {
    $available_qty = $content_data['qty'];
} else {
    $available_qty = 0;
}

$item = get_content_by_id(CONTENT_ID);
$itemData = content_data($content['id']);
$itemTags = content_tags($content['id']);

if (!isset($itemData['label'])) {
    $itemData['label'] = '';
}
if (!isset($itemData['label-color'])) {
    $itemData['label-color'] = '';
}

$next = next_content();
$prev = prev_content();


?>

<?php $maxLines = 6; ?>


<div class="shop-inner-page pt-5" id="shop-content-<?php print CONTENT_ID; ?>" field="shop-inner-page" rel="page">
    <div class="container-fluid fx-particles">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="row product-holder pb-5">
                    <div class="col-12 col-lg-7">
                        <module type="pictures" rel="content" template="skin-6"/>
                    </div>

                    <div class="col-12 col-lg-5 relative product-info-wrapper mt-5">
                        <div class="product-info">
                            <div class="product-info-content">
                                <module class="d-flex justify-content-start" type="breadcrumb" template="skin-1"/>

                                <div class="next-previous-content float-end mt-3">
                                    <?php if ($prev != false) { ?>
                                        <a href="<?php print content_link($prev['id']); ?>" class="prev-content tip btn btn-outline-default" data-tip="#prev-tip"><i class="fas fa-chevron-left"></i></a>
                                        <div id="prev-tip" style="display: none">
                                            <div class="next-previous-tip-content text-center">
                                                <img src="<?php print get_picture($prev['id']); ?>" alt="" width="90"/>
                                                <h6><?php print $prev['title']; ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <?php if ($next != false) { ?>
                                        <a href="<?php print $next['url']; ?>" class="next-content tip btn btn-outline-default" data-tip="#next-tip"><i class="fas fa-chevron-right"></i></a>

                                        <div id="next-tip" style="display: none">
                                            <div class="next-previous-tip-content text-center">
                                                <img src="<?php print get_picture($next['id']); ?>" alt="" width="90"/>

                                                <h6><?php print $next['title']; ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="heading">
                                    <h2 class="edit product-detail-name" field="title" rel="content"><?php print content_title(); ?></h2>
                                </div>

                                <div class="row main-price">
                                    <div class="col-12 d-flex">
                                        <div class="col-6">
                                            <?php $prices = get_product_prices(content_id(), true); ?>
                                            <?php if (isset($prices[0]) and is_array($prices)) { ?>
                                                <p>
                                                    <?php if (isset($prices[0]['original_value'])): ?><span class="price-old"><?php print currency_format($prices[0]['original_value']); ?></span><?php endif; ?>
                                                    <?php if (isset($prices[0]['value'])): ?><span class="money"><?php print currency_format($prices[0]['value']); ?></span><?php endif; ?>
                                                </p>
                                            <?php } ?>
                                        </div>

                                        <div class="availability col-6 text-end align-self-center">
                                            <?php if ($in_stock == true): ?>
                                                <span class="in-stock"><i class="fas fa-circle" style="font-size: 8px;"></i> <?php _lang("In Stock", 'templates/shopmag') ?></span> <span class="text-muted"><?php if ($available_qty != ''): ?>(<?php echo $available_qty; ?>)<?php endif; ?></span>
                                            <?php else: ?>
                                                <span class="text-danger"><i class="fas fa-circle" style="font-size: 8px;"></i> <?php _lang("Out of Stock", 'templates/shopmag') ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>


                                    <div class="col-12 mt-3">
                                       <div class="mb-2">
                                           <?php if (isset($content_data['sku'])): ?>
                                           - <span class="label-detail ms-2"><?php _lang("SKU", 'templates/shopmag') ?>:</span>
                                                <?php print $content_data['sku']; ?>
                                           <?php endif; ?>
                                       </div>
                                        - <a class="edit ms-2" field="shop-inner-delivery" rel="content" href="">Delivery & Return</a>
                                    </div>


                                <div class="row">
                                    <div class="col-12">
                                        <div class="">
                                            <div class="edit my-5" field="content_body" rel="content">
                                                <p class="comment more"><?php _lang("How to write product descriptions that sell
                                                One of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.
                                                Think like a consumer
                                                Think about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing
                                               features — try to
                                                        limit each one to 5-8 words.", 'templates/shopmag') ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <module type="shop/cart_add"/>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="edit safe-mode nodrop py-5" field="related_products" rel="module">
                    <div class="col-12 text-start mb-4">
                        <h2 class="related-title"><?php _lang('Related products', 'templates/shopmag'); ?></h2>
                    </div>

                    <div class="col-12">
                        <module type="shop/products" template="skin-1" related="true" limit="4" hide_paging="true"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include template_dir() . "footer.php"; ?>


