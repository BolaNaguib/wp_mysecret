<?php

/**
 * The template for displaying product price filter widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-price-filter.php
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.1
 */

defined('ABSPATH') || exit;

?>
<?php do_action('woocommerce_widget_price_filter_start', $args); ?>
<aside class="widget woocommerce widget_price_filter">
	<form method="get" action="<?php echo esc_url($form_action); ?>">
		<div class="price_slider_wrapper">
			<div class="price_slider" style="display:none;"></div>
			<div class="price_slider_amount" data-step="<?php echo esc_attr($step); ?>">
				<input type="text" id="min_price" name="min_price" value="<?php echo esc_attr($current_min_price); ?>" data-min="<?php echo esc_attr($min_price); ?>" placeholder="<?php echo esc_attr__('Min price', 'woocommerce'); ?>" />
				<input type="text" id="max_price" name="max_price" value="<?php echo esc_attr($current_max_price); ?>" data-max="<?php echo esc_attr($max_price); ?>" placeholder="<?php echo esc_attr__('Max price', 'woocommerce'); ?>" />
				<?php /* translators: Filter: verb "to filter" */ ?>
				<button type="submit" class="button"><?php echo esc_html__('Filter', 'woocommerce'); ?></button>
				<div class="price_label" style="display:none;">
					<?php echo esc_html__('Price:', 'woocommerce'); ?> <span class="from"></span> &mdash; <span class="to"></span>
				</div>
				<?php echo wc_query_string_form_fields(null, array('min_price', 'max_price', 'paged'), '', true); ?>
				<div class="clear"></div>
			</div>
		</div>
	</form>
</aside>

<aside class="widget woocommerce widget_price_filter">
	<h5 class="widget_title">Price Filter</h5>
	<form method="get" action="<?php echo esc_url($form_action); ?>">
		<div class="price_slider_wrapper">
			<div class="price_slider d_none ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="display: block;">
				<!-- <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 75%; width: 25%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 75%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span> -->
			</div>
			<div class="price_slider_amount" data-step="<?php echo esc_attr($step); ?>">
				<input type="text" id="min_price" name="min_price" style="display: none;" value="<?php echo esc_attr($current_min_price); ?>" data-min="<?php echo esc_attr($min_price); ?>" placeholder="<?php echo esc_attr__('Min price', 'woocommerce'); ?>" />
				<input type="text" id="max_price" name="max_price" style="display: none;" value="<?php echo esc_attr($current_max_price); ?>" data-max="<?php echo esc_attr($max_price); ?>" placeholder="<?php echo esc_attr__('Max price', 'woocommerce'); ?>" />

				<!-- <input type="text" id="min_price" name="min_price" value="" data-min="13" placeholder="Min price" style="display: none;"> -->
				<!-- <input type="text" id="max_price" name="max_price" value="" data-max="85" placeholder="Max price" style="display: none;"> -->
				<button type="submit" class="button sc_button_hover_slide_left">Filter</button>
				<div class="price_label d_none" style="display: block;"> Price: <span class="from">$67</span> — <span class="to">$85</span> </div>
				<div class="clear"></div>
			</div>
		</div>
	</form>
</aside>

<?php do_action('woocommerce_widget_price_filter_end', $args); ?>