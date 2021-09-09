<?php

/*

type: layout

name: Shipping information

position: 15

*/

?>

<?php

if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<?php
$title = '';
if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-15-<?php print $params['id'] ?>" rel="module">

        <div class="container-fluid">


            <h2 class="mb-3">Shop More. Save More.</h2>
                <p class="mb-2">Orders $100 and up are automatically discounted. The more you shop, the more you save.</p>

                <table class="mt-4">
                    <tbody>
                        <tr>
                            <td><strong>Discount</strong></td>
                            <td><strong>Order Value</strong></td>
                        </tr>
                        <tr>
                            <td>5%</td>
                            <td>$100-$174.99</td>
                        </tr>
                        <tr>
                            <td>10%</td>
                            <td>$175-$249.99</td>
                        </tr>
                        <tr>
                            <td>15%</td>
                            <td>$250+</td>
                        </tr>
                        </tbody>
                </table>

            <h2 class="mb-3">Shipping Times</h2>
                <p class="mb-2">
                    Your order will ship via USPS, UPS or UPS Surepost, depending on what shipping option you select at checkout.
                    Same day shipping for orders placed until 12 PM PST.
                    Details of the various shipping options are outlined below:  We ship only within the continental United States.
                    We do not currently ship to PO boxes, APO, or FPO addresses or internationally. All flat rate shipping orders over $49 will ship for free.
                </p>

                <div class="delivery-page-li py-3">
                    <?php element_display('unordered-list.php'); ?>
                </div>

                <p class="mb-2">
                    See below for approximate delivery times based on what zone you’re shipping to.
                    Products from the same order are often shipped from different warehouses.
                    This does not affect your shipping cost, but may require the order to be delivered in multiple packages and the shipping time may vary.
                </p>

                <h2 class="mb-3">Tracking of orders</h2>
                    <p class="mb-2">
                        Once your order has been placed, you’ll first receive an order confirmation email.
                        A shipment notification email with tracking information will follow.
                        You can also check the status of your order by logging into your account.
                        If your order shipped via UPS, you can also enroll in UPS My Choice by going to ups.com/mychoice.
                        This free service will proactively send you delivery alerts updating you on the day and time of your delivery.
                        Plus, you can reroute your orders to another location, leave instructions for the driver or schedule a redelivery, giving you additional control over your deliveries.
                        If your order shipped via USPS, you can also enroll in USPS Informed Delivery by going to tools.usps.com/go/TrackConfirmAction. This free service will proactively send you delivery alerts updating you on the day and time of your delivery.
                        Plus, you can reroute your orders to another location, leave instructions for the driver or schedule a redelivery, giving you additional control over your deliveries.
                        Trying to find your delivered package? Sorry! This happens sometimes.
                        Please check your front porch, side door, back porch, garage area, bushes, and mailbox to make sure it's not hiding or jammed. Also ask your neighbors if they may have received it for you.
                        If your package still hasn't turned up please contact us.
                    </p>
         </div>
</section>



