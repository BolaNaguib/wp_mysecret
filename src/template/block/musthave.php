<?php $term = get_field('productcategory');
if ($term) :
    $query = new WP_Query(array(
        'post_type' => 'product',
        'product_cat' => $term->slug,
    ));
else :
    $query = new WP_Query(array(
        'post_type' => 'product',
    ));
endif;
?>
<!-- START section-musthave -->
<section class='section-musthave'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-text-center -->
        <div class='uk-text-center'>
            <!-- START section-header -->
            <div class='section-header'>
                <h2 class="title uk-margin-remove">Must Have</h2>
                <small class="caption">A TOUCH OF COVERAGE NEVER FELT SO SEXY</small>
            </div>
            <!-- END section-header -->
        </div>
        <!-- END uk-text-center -->
        <!-- START uk-grid -->
        <div class='uk-grid uk-grid-match'>
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    global $product;
                    $id = $product->get_id();
                    $attachment_ids = $product->get_gallery_image_ids($id);
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'single-post-thumbnail');

            ?>

                    <div <?php wc_product_class('uk-width-1-5@m uk-width-1-2 uk-margin-bottom uk-text-center', $product); ?>>
                        <?php
                        /**
                         * Hook: woocommerce_before_shop_loop_item.
                         *
                         * @hooked woocommerce_template_loop_product_link_open - 10
                         */
                        // do_action('woocommerce_before_shop_loop_item');

                        ?>
                        <!-- START card_type-product -->
                        <div class='card_type-product uk-text-center'>


                            <!-- START uk-position-relative -->
                            <div class='uk-position-relative'>
                                <!-- START imageContainer -->
                                <div class='imageContainer'>
                                    <a href="<?php echo get_permalink($id) ?>">

                                        <img src="<?php echo $image[0]; ?>" alt="">
                                        <img class="imageHover" style="  " src="<?php echo wp_get_attachment_url($attachment_ids[0]) ?>" alt="">

                                    </a>
                                    <!-- START imageOverlay -->
                                    <div class='imageOverlay'>
                                        <!-- START uk-grid uk-grid-match uk-grid-collapse -->
                                        <div class='uk-grid uk-grid-match uk-grid-collapse'>
                                            <!-- START uk-width-1-2 -->
                                            <div class='uk-width-1-2'>
                                                <!-- START Wishlist -->
                                                <div class='Wishlist'>
                                                    <?php echo do_shortcode('[ti_wishlists_addtowishlist]') ?>
                                                </div>
                                                <!-- END Wishlist -->
                                            </div>
                                            <!-- END uk-width-1-2 -->
                                            <!-- START uk-width-1-2 -->
                                            <div class='uk-width-1-2'>
                                                <!-- START detailes -->
                                                <div class='detailes'>
                                                    <a href="<?php echo get_permalink($id) ?>"> detailes </a>
                                                </div>
                                                <!-- END Wishlist -->
                                            </div>
                                            <!-- END uk-width-1-2 -->
                                        </div>
                                        <!-- END uk-grid uk-grid-match uk-grid-collapse -->
                                    </div>
                                    <!-- END imageOverlay -->
                                </div>
                                <!-- END imageContainer -->


                            </div>
                            <!-- END uk-position-relative -->


                            <!-- START uk-text-center -->
                            <div class='uk-text-center uk-margin-top'>
                                <span class="title"><?php echo the_title(); ?></span>
                                <?php if ($price_html = $product->get_price_html()) : ?>
                                    <span class="price"><?php echo $price_html; ?></span>
                                <?php endif; ?>
                            </div>
                            <!-- END uk-text-center -->


                        </div>
                        <!-- END card_type-product -->

                        <?php
                        // do_action('woocommerce_after_shop_loop_item');
                        ?>
                    </div>
            <?php endwhile;
            else : echo wpautop('Sorry, no posts were found');
            endif;
            wp_reset_postdata(); ?>
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</section>
<!-- END section-musthave -->