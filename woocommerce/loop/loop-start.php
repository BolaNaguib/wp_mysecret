<?php

/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.3.0
 */

if (!defined('ABSPATH')) {
    exit;
}
?>

<!-- loop-start -->
<!-- START section -->
<div class="section">
    <!-- START uk-container -->
    <div class="uk-container">

        <div class="products uk-grid">
            <!-- START uk-width-1-4 -->
            <div class='uk-width-1-4'>
                <?php dynamic_sidebar('shop'); ?>
            </div>
            <!-- END uk-width-1-4 -->
            <!-- START uk-width-3-4 -->
            <div class='uk-width-3-4'>
                <!-- START uk-grid -->
                <div class='uk-grid'>