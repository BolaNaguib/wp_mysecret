<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

?>

<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'Know Your Size';
$block_background = get_field('block_background');
$modal_image = get_field('modal_image');

?>
<style>
	.sizeTable {
		margin-bottom: 25px;
	}

	.sizeTable h1 {
		transition: 300ms;
	}

	.sizeTable:hover h1 {
		color: #fe7799 !important;
		transition: 300ms;
	}
</style>
<!-- START section -->
<div class='section' style="padding-top: 0px;">
	<!-- START uk-container -->
	<div class='uk-container'>

		<span class="catbreadcrumbs"> <?php woocommerce_breadcrumb(); ?></span>

		<hr>
		<div id="product-<?php the_ID(); ?>" <?php wc_product_class('wooSingle', $product); ?>>

			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action('woocommerce_before_single_product_summary');
			?>

			<div class="summary entry-summary">
				<!-- <span class="wooSingle-title"><?php the_title(); ?></span> -->
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action('woocommerce_single_product_summary');
				?>
						<?php if ($modal_image) : ?>
			<a href="#modal-media-image" class="" style='background-color:#000; color:#fff;    padding: 5px 10px;
    display: inline-block;
    margin-bottom: 10px;' uk-toggle>
			<span> <?php echo $block_title ?> </span>
			</a>
			<div id="modal-media-image" class="uk-flex-top" uk-modal>
				<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
					<button class="uk-modal-close-outside" type="button" uk-close></button>
					<img src="<?php echo $modal_image['url'] ?>" alt="">
				</div>
			</div>
		<?php endif; ?>

			</div>

			<?php
			/**
			 * Hook: woocommerce_after_single_product_summary.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			do_action('woocommerce_after_single_product_summary');
			?>
		</div>

	</div>
	<!-- END uk-container -->
</div>
<!-- END section -->
<?php do_action('woocommerce_after_single_product'); ?>



<style>
	.catbreadcrumbs a {
		color: #fe7799 !important;
	}
</style>