<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>

<!-- content-product -->
<div <?php wc_product_class('uk-width-1-5@m uk-width-1-2 uk-margin-bottom uk-text-center', $product); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action('woocommerce_before_shop_loop_item');

	?>
	<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop->post->ID), 'single-post-thumbnail'); ?>
	<!-- START card_type-product -->
	<div class='card_type-product uk-text-center'>
		<?php $size = array_values(wc_get_product_terms($product->id, 'pa_color', array('fields' => 'ids')));
		?>

		<div class="uk-position-top-right uk-padding-small colors">
			<?php $size = array_values(wc_get_product_terms($product->id, 'pa_color', array('fields' => 'ids')));
			foreach ($size as $xx) {
				echo $xx;
				$term_id = $xx;
				$term_vals = get_term_meta($term_id);
				echo $term_id;

				$val = $term_vals['product_attribute_color'][0];
				echo '<span style="background-color:' . $val . ';"></span>';
			}
			?>
		</div>
		<!-- START uk-position-relative -->
		<div class='uk-position-relative'>
			<!-- START imageContainer -->
			<div class='imageContainer'>
				<img src="<?php echo $image[0]; ?>" alt="">
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
								<a href="<?php echo get_permalink($loop[0]->post->ID) ?>"> detailes </a>

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
			<?php if ($product->stock_status != "instock") : ?>
				<span class="outofstock uk-flex uk-flex-middle uk-flex-center">Out of Stock</span>
			<?php endif; ?>
			<?php if ($product->sale_price != "") : ?>
				<span class="sale">Sale</span>

			<?php endif; ?>

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