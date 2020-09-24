<?php

/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

do_action('woocommerce_before_account_navigation');
?>
<section class="section section_type-normal sizeTable" style="background-image: url('https://gl-images.condecdn.net/image/o7eLjdokLWq/crop/2040/0.46875/f/gettyimages-471453081_sf.jpg');">
	<!-- START uk-container -->
	<div class="uk-container uk-position-relative uk-text-center">
		<h1> User Dashboard </h1>
	</div><!-- END uk-container -->
</section>
<br>
<style>
	li.woocommerce-MyAccount-navigation-link.woocommerce-MyAccount-navigation-link--orders.is-active a {
		background-color: #000;
	}
</style>
<nav class="woocommerce-MyAccount-navigation">
	<ul class="uk-list dashlist">
		<?php foreach (wc_get_account_menu_items() as $endpoint => $label) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes($endpoint); ?>">
				<a href="<?php echo esc_url(wc_get_account_endpoint_url($endpoint)); ?>"><?php echo esc_html($label); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>
<style>
	.dashlist a {
		display: block;
		padding: 10px;
		background-color: #000;
		color: #fff;
		margin-bottom: 10px !important;
	}
</style>
<?php do_action('woocommerce_after_account_navigation'); ?>