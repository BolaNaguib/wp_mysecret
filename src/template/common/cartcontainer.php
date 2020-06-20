<div class="cartDropdown" style="display:none;" uk-dropdown="pos: bottom-right; animation: uk-animation-slide-bottom-medium; duration:500;delay-hide: 0">
    <?php if (!WC()->cart->is_empty()) : ?>
        <?php
        foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
                $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
        ?>

                <!-- START cartItemContainer -->
                <div class='cartItemContainer'>
                    <div class="uk-grid-small uk-flex-top" uk-grid>
                        <div class="uk-width-1-3 uk-margin-remove">
                            <?php
                            $thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

                            if (!$product_permalink) {
                                echo $thumbnail; // PHPCS: XSS ok.
                            } else {
                                printf('<a href="%s">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
                            }
                            ?>
                        </div>
                        <div class="uk-width-2-3">
                            <span class="cartItemName">
                                <?php
                                if (!$product_permalink) {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
                                } else {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
                                }

                                do_action('woocommerce_after_cart_item_name', $cart_item, $cart_item_key);

                                // Meta data.
                                echo wc_get_formatted_cart_item_data($cart_item); // PHPCS: XSS ok.

                                // Backorder notification.
                                if ($_product->backorders_require_notification() && $_product->is_on_backorder($cart_item['quantity'])) {
                                    echo wp_kses_post(apply_filters('woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__('Available on backorder', 'woocommerce') . '</p>', $product_id));
                                }
                                ?>

                            </span>
                            <span>
                                <?php
                                echo $cart_item['quantity'] . '<small class="x"> x </small>' . WC()->cart->get_product_price($_product)
                                ?>
                            </span>
                        </div>
                    </div>

                </div>
                <!-- END cartItemContainer -->

        <?php
            }
        }
        ?>
        <td class="product-subtotal" data-title="<?php esc_attr_e('Subtotal', 'woocommerce'); ?>">
            <?php
            /**
             * Hook: woocommerce_widget_shopping_cart_total.
             *
             * @hooked woocommerce_widget_shopping_cart_subtotal - 10
             */
            do_action('woocommerce_widget_shopping_cart_total');
            ?>
        </td>
        <p class="woocommerce-mini-cart__buttons buttons"><?php do_action('woocommerce_widget_shopping_cart_buttons'); ?></p>

        <?php do_action('woocommerce_cart_contents'); ?>

    <?php else : ?>

        <p class="woocommerce-mini-cart__empty-message"><?php esc_html_e('No products in the cart.', 'woocommerce'); ?></p>

    <?php endif; ?>

</div>

<style>
    .cartDropdown {
        color: #777777;
        background: #ffffff;
        border: 3px solid #141414;
        width: 300px;
        top: 40px !important;
        right: 0px;
    }

    .cartItemContainer {
        border-bottom: 1px solid #eee;
        margin-bottom: 20px;
        padding: 10px 0px;
    }


    .woocommerce-mini-cart__buttons a {
        font-size: 12px !important;
        font-weight: 600 !important;
        letter-spacing: 0;
        text-transform: lowercase !important;
        text-align: center;
        line-height: 16px !important;
        padding: 0.45em 1.4em !important;
        background-color: #fe7799;
        display: block;
        color: #fff !important;
        margin-bottom: 5px;
        transition: 300ms;
    }

    .woocommerce-mini-cart__buttons a:hover {
        background-color: #fe7799;
        transition: 300ms;

    }

    .woocommerce-mini-cart__buttons .checkout {
        background-color: #000;
        transition: 300ms;

    }

    .woocommerce-mini-cart__buttons .checkout:hover {
        background-color: #fe7799;
        transition: 300ms;


    }
</style>