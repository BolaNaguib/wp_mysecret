<?php
// ACF FIELDS
$bio_area = get_field('bio_area', 'options');
$fb = get_field('facebook', 'options');
$tw = get_field('twitter', 'options');
$pi = get_field('pinterest', 'options');
$ig = get_field('instagram', 'options');
$music = get_field('music', 'options');
?> <audio style="position: fixed;
    bottom: 24px;
    left: 10px;" controls><source src="<?php echo $music['url'] ?>" type="audio/mpeg">Your browser does not support the audio element.</audio><!-- START --><footer class="section_type-footer"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid" uk-grid="uk-margin"><!-- START uk-width-1-2@m --><div class="uk-width-1-2@m"><!-- START card_type-footercaption --><div class="card_type-footercaption"><h5>My-Secret</h5><p><small> <?php echo $bio_area; ?> </small></p><!-- START topnavmenu --><div class="bottomnavmenu"> <?php if ($tw) : ?> <a href="<?php echo $tw; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path></svg> </a> <?php endif; ?> <?php if ($fb) : ?> <a href="<?php echo $fb; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path></svg></a> <?php endif; ?> <?php if ($pi) : ?> <a href="<?php echo $pi; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-pinterest-p fa-w-12"><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z" class=""></path></svg></a> <?php endif; ?> <?php if ($ig) : ?> <a href="<?php echo $ig; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path></svg></a> <?php endif; ?> </div><!-- END topnavmenu --></div><!-- END card_type-footercaption --></div><!-- END uk-width-1-2@m --><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footercaption --><div class="card_type-footer-links"><h5><?php the_field('col1_title', 'options'); ?></h5> <?php

                    $posts = get_field('col1list', 'options');

                    if ($posts) : ?> <ul class="uk-list"> <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?> <?php setup_postdata($post); ?> <li><a href="<?php the_permalink(); ?>"><small> <?php the_title(); ?> </small></a></li> <?php endforeach; ?> </ul> <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?> <?php endif; ?> </div><!-- END card_type-footercaption --></div><!-- END uk-width-1-4@m --><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footer-ig --><div class="card_type-footer-ig"> <?php
                    // echo do_shortcode('[instagram-feed]'); 
                    ?> </div><!-- END card_type-footer-ig --></div><!-- END uk-width-1-4@m --></div><!-- END uk-grid --><br><br><!-- START uk-text-center --><div class="uk-text-center"><small>© 2020 MySecret | Developed by Inetwork-me.com</small></div><!-- END uk-text-center --></div><!-- END uk-container --></footer><!-- END  --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- <a class="uk-button uk-button-default" href="#contactform" uk-toggle>Open</a> --><div id="contactform" class="uk-flex-top" uk-modal><div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center"><button class="uk-modal-close-default" type="button" uk-close></button><h2>EMAIL US</h2><hr> <?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?> </div></div><script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script><style>.cloudimage-360 canvas {
        width: unset !important;
        max-height: 400px;
    }

    .uk-first-column {
        margin-bottom: 20px;
    }

    span.woocommerce-input-wrapper input {
        background-color: #fff;
        border-bottom: 2px solid #eee;
        padding: 10px;
    }

    span.woocommerce-input-wrapper textarea {
        background-color: #fff;
        border-bottom: 2px solid #eee;
        padding: 10px;
    }

    html {
        word-wrap: break-word;
    }

    input#user_pass,
    input#user_login {
        background-color: #fff;
        border-bottom: 2px solid #eee;
        padding: 10px;
        display: block;
        width: 100%;
        margin-top: 10px;
    }

    span.wpcf7-form-control-wrap {
        width: 100%;
        display: block;
        overflow: hidden;
    }


    input.wpcf7-form-control.wpcf7-text,
    input.wpcf7-form-control.wpcf7-number,
    textarea.wpcf7-form-control.wpcf7-textarea {
        background-color: #fff;
        border: none;
        border-bottom: 2px solid #eee;
        padding: 10px;
        width: 100%;
        display: block;
        outline: none;
    }

    input.wpcf7-form-control.wpcf7-submit {
        background-color: #fe8c99;
        padding: 20px 30px;
        color: #fff;
        display: inline-block;
        border: 0px;
        margin: 10px 0px;
        font-size: 21px;
    }</style><div class="uk-grid-collapse section-longcard uk-text-center uk-margin-top outofstock sale woocommerce-input-wrapper uk-hidden uk-scrollspy wp-block uk-open uk-animation-fade uk-animation-enter uk-margin-bottom uk-transition-active mainbutton woocommerce-loop-product__link" style="display: none !important"></div><!-- START uk-hidden card_type-product --><div class="uk-hidden card_type-product rightblock"><span class="outofstock"></span> <span class="sale"></span></div><!-- END uk-hidden card_type-product --><!-- uk-active uk-grid-collapse --> <?php wp_footer(); ?> <style>.woocs-style-1-dropdown .woocs-style-1-select>i {
        display: none !importnat;
    }

    .woocs-style-1-dropdown .woocs-style-1-dropdown-menu {
        background-color: #000;
        color: #fff;
        min-width: 100px;
        margin-top: 10px;

    }

    .woocs-style-1-dropdown .woocs-style-1-dropdown-menu li:hover {
        background-color: #000 !important;
    }

    .woocs-style-1-active {
        border: none !important;
        border: 0px !important;
    }

    .woocs-style-1-dropdown.woocs-style-1-active:hover,
    .woocs-style-1-dropdown.woocs-style-1-active {
        box-shadow: none !important;
        border-radius: 0px;
        background-color: #f8f8f8;
        border: 0px solid #fff !important;
        border-color: #f00 !important;
        outline: none;
    }


    /* instagram feed override Styling */
    .card_type-footer-ig .sb_instagram_header {
        display: none !important;
    }

    .card_type-footer-ig #sbi_load {
        display: none !important;

    }

    .wooSingle-title {
        font-family: "Poppins", sans-serif !important;
        font-size: 36px;
        color: #212121;
        font-weight: 600;
    }

    span.variable-item-span.variable-item-span-color {
        border-radius: 100%;
    }

    li.variable-item.color-variable-item.selected {
        border-radius: 100% !important;
        box-shadow: 0 0 0 1px #fe7799 !important;
    }

    li.variable-item.color-variable-item {
        box-shadow: none !important;
        width: 50px;
        height: 50px;
    }

    .woo-variation-swatches-stylesheet-enabled .variable-items-wrapper .variable-item:not(.radio-variable-item).color-variable-item .variable-item-span-color:after {
        box-shadow: none !important;
    }

    li.variable-item.button-variable-item {
        background-color: #ffffff;
        border: 2px solid #141414;
        color: #141414;
        font-weight: 700;
        margin-right: 15px;
        padding: 3px;
        vertical-align: top;
        box-shadow: none !important;
        min-width: 44px;
        padding: 15px 4px !important;
    }

    .woo-variation-swatches-stylesheet-enabled .variable-items-wrapper .variable-item:not(.radio-variable-item):hover {
        color: #fe7799 !important;
        border-color: #fe7799 !important;
    }

    li.variable-item.button-variable-item.selected {
        color: #fe7799 !important;
        border-color: #fe7799 !important;
    }

    .variable-items-wrapper .wvs-has-image-tooltip:hover:after,
    .variable-items-wrapper .wvs-has-image-tooltip:hover:before,
    .variable-items-wrapper [data-wvstooltip]:hover:after,
    .variable-items-wrapper [data-wvstooltip]:hover:before {
        background-color: #fe7799 !important;
    }

    table.variations .label,
    table.variations .value {
        width: 100%;
        display: block;
        color: #141414;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .woocommerce div.product form.cart .variations label {
        font-weight: 400;
    }

    .variations tr {
        margin-bottom: 25px !important;
        display: block;
    }

    span.woocs_price_code {
        color: #fe7799 !important;
    }

    span.woocommerce-Price-currencySymbol {
        position: relative;
        top: -5px;
        font-size: 13px;
    }

    .woocommerce-variation-price {
        border: 1px solid #fe7799;
        display: inline-block;
        padding: 5px 10px;
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .wooSingle .images {
        width: 50% !important;
    }

    .yith_magnifier_zoom_magnifier {
        border: 0px !important;
    }

    .thumbnails.noslider {
        display: none !important;
    }



    .woocommerce div.product .woocommerce-tabs ul.tabs li a {
        color: #fff;
        display: inline-block;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 0;
        line-height: 24px;
        padding: 0.7em 1.6em;
        text-transform: lowercase;
        background-color: #000;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active a {
        color: #fff;
        background-color: #fe7799;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
        border: none;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs {
        padding: 0px;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs::before {
        display: none;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li {
        padding-left: 0px;
        border: none;
        background-color: transparent;
        border-radius: 0px !important;
    }

    .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover {
        background-color: fe7799;

        color: #fff !important;
    }

    .cartItemName a {
        font-size: 13px;
        color: #21212191 !important;
        font-weight: 600;
        transition: 300ms;
    }

    .cartItemName a:hover {
        color: #fe7799 !important;
        transition: 300ms;

    }</style><style>.woocommerce ul.cart_list li dl,
    .woocommerce ul.product_list_widget li dl {
        border-left: none;
        margin: 0;
        padding-left: 0;
    }


    .sc_layouts_cart_widget .widget_shopping_cart {
        display: block !important;
    }

    .sc_layouts_currency .chosen-container {
        margin-top: 2px;
    }

    .sc_layouts_cart {
        z-index: 99;
    }

    .sc_layouts_cart_widget {
        color: #777777;
        top: 2.8em;
        background: #ffffff;
        border: 3px solid #141414;
        padding: 2.2em 2.3em;
        right: -0.4em;
        width: 20em;
    }

    .sc_layouts_cart_widget .cart_list {
        max-height: 350px;
    }

    .sc_layouts_cart_widget:after {
        display: none;
    }

    .sc_layouts_cart_widget a,
    .sc_layouts_cart_widget {
        color: #777777 !important;
    }

    .sc_layouts_cart_widget dt,
    .sc_layouts_cart_widget b,
    .sc_layouts_cart_widget strong,
    .sc_layouts_cart_widget i,
    .sc_layouts_cart_widget em,
    .sc_layouts_cart_widget mark,
    .sc_layouts_cart_widget ins {
        color: #777777;
    }


    .sc_layouts_cart .product_list_widget .mini_cart_item .remove {
        display: none;
    }

    .sc_layouts_cart .sc_layouts_cart_widget_close {}

    .sc_layouts_cart .widget_shopping_cart .cart_list li {
        padding: 0;
    }



    .sc_layouts_cart .widget_shopping_cart .total {
        border-top: 1px dotted #777777;
        font-size: 12px;
        margin: 0.8em 0 0;
        padding: 1.6em 0 0;
        text-transform: uppercase;
    }

    .sc_layouts_cart .widget_shopping_cart .total strong,
    .sc_layouts_cart .widget_shopping_cart .total .amount {
        color: #141414;
        font-weight: 600;
        font-size: 11px;
    }

    .sc_layouts_cart .widget_shopping_cart .buttons {
        margin-top: 1.6em;
    }

    .sc_layouts_cart .widget_shopping_cart .buttons .button {
        width: 100%;
        float: none;
        margin: 0;
    }

    .sc_layouts_cart .widget_shopping_cart_content .buttons a.button.checkout:hover,
    .top_panel .sc_layouts_cart .widget_shopping_cart .buttons .wc-forward {
        background: #141414 !important;
    }

    .top_panel .sc_layouts_cart .widget_shopping_cart .buttons a {
        color: #ffffff !important;
    }

    .sc_layouts_cart .widget_shopping_cart_content .buttons a.button.checkout {
        margin-bottom: 3px;
        margin-top: 5px;
    }


    .trx_addons_attrib_item.trx_addons_attrib_button {
        background-color: #ffffff;
        border: 2px solid #141414;
        color: #141414;
        display: inline-block;
        font-weight: 700;
        margin-right: 15px;
        padding: 3px;
        vertical-align: top;
    }

    .trx_addons_attrib_item.trx_addons_attrib_button span {
        min-width: 22px;
        padding: 4px;
        text-align: center;
    }

    #pa_color_attrib_extended .trx_addons_attrib_item:first-child,
    #pa_size_attrib_extended .trx_addons_attrib_item:first-child {
        /*display: none;*/
    }

    .value .trx_addons_tooltip:hover:before,
    .value .trx_addons_tooltip:hover:after {
        bottom: 44px;
    }

    .value .trx_addons_tooltip:after {
        display: none;
    }

    #pa_color_attrib_extended .trx_addons_attrib_item.trx_addons_attrib_button:hover,
    #pa_color_attrib_extended .trx_addons_attrib_item.trx_addons_attrib_selected {
        border-color: #141414;
    }

    .trx_addons_attrib_item.trx_addons_attrib_color span {
        height: 36px;
        width: 36px;
    }

    #pa_color_attrib_extended {
        margin-top: 1em;
    }

    .trx_addons_attrib_item.trx_addons_attrib_color {
        background-color: #fafafa;
        border: 2px solid transparent;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        border-radius: 50%;
        overflow: hidden;
        display: inline-block;
        height: 36px;
        margin-right: 11px;
        padding: 0;
        width: 36px;
    }

    .span.woocommerce-Price-amount.amount {
        color: #fe7799 !important;
    }

    .button {
        background-color: #fe7799 !important;
        color: #fff !important;
        font-weight: 400 !important;
        letter-spacing: 1px;
        border-radius: 0px !important;
    }

    .button:hover {
        background-color: #000 !important;
        color: #fff !important;
        font-weight: 400 !important;
        letter-spacing: 1px;
        border-radius: 0px !important;
    }

    .woocommerce input[type=number]::-webkit-inner-spin-button,
    .woocommerce input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        appearance: none;
        margin: 0;
    }

    .woocommerce input[type=number].qty {
        -moz-appearance: textfield;
    }

    .woocommerce-page div.product form.cart div.quantity {
        border-radius: 0px !important;
    }

    .woocommerce .quantity {
        /* border: 2px solid #eee !important; */
        width: 128px !important;
        display: inline-block;
    }

    .woocommerce .quantity input.qty,
    .woocommerce .quantity .minus,
    .woocommerce .quantity .plus {
        line-height: 16px;
        height: 40px !important;
        color: inherit !important;
        padding: 0 !important;
        float: left;
        border-radius: 0px !important;
    }

    .woocommerce .quantity .minus,
    .woocommerce .quantity .plus {
        background-color: #fe7799;
        color: #fff !important;
        border: none !important;
        cursor: pointer;
        width: 40px !important;
        transition: 300ms;

    }

    .woocommerce .quantity .minus:hover,
    .woocommerce .quantity .plus:hover {
        background-color: #000 !important;
        transition: 300ms;
    }

    .woocommerce .quantity input.qty {
        /* border-left: 2px solid #eee !important;
        border-right: 2px solid #eee !important; */
        width: 44px !important;
        border: 1px solid #fe7799;
        height: 38px !important;
    }

    div.quantity.hidden {
        border: none !important;
    }</style><style>.widgetcontainer {
        margin-bottom: 40px;
    }

    .widgettitle {
        font-size: 24px;
        margin-bottom: 24px;
        display: block;
    }

    .woocommerce .widget_price_filter .ui-slider-horizontal {
        height: 5px;
    }

    .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
        background-color: #fe7799;
    }

    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
        background-color: #fe7799;
        top: -6px;
    }

    li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term {
        display: inline-block;
        background-color: #eee;
        margin-right: 10px;
        padding: 5px 10px !important;
        font-size: 13px;
    }

    .li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term a {
        color: #fe7799 !important;
    }

    li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term.woocommerce-widget-layered-nav-list__item--chosen.chosen {
        background-color: #fe7799;
    }

    li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term.woocommerce-widget-layered-nav-list__item--chosen.chosen a {
        color: #fff !important;
    }

    .full-width .uk-container {
        padding: 0px 22px;
    }

    .full-width {
        width: 100vw;
        position: relative;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
    }

    .mainmenua_navbar {
        padding: 25px 0px 25px 0px;
    }

    .imageContainer .imageHover {
        position: absolute;
        top: 0px;
        height: auto;
        max-width: 100%;
        opacity: 0;
        left: 0px;
        transition: 300ms;

    }

    .imageContainer:hover .imageHover {
        transition: 300ms;
        opacity: 1;
    }

    .wishlist_products_counter_number {
        color: #fff !important;
    }</style><script>$(document).ready(function() {

        setTimeout(function() {
            $('body').show();
            $('.loadercontainerx').addClass('loaded');
        }, 1000);

    });</script><script>const contactBlock = document.getElementById('contactBlock');
    const careersBlock = document.getElementById('careersBlock');
    const supportBlock = document.getElementById('supportBlock');
    const franchiseBlock = document.getElementById('franchiseBlock');
    const contactForm = document.getElementById('contactForm');
    const careersForm = document.getElementById('careersForm');
    const supportForm = document.getElementById('supportForm');
    const franchiseForm = document.getElementById('franchiseForm');
    if (contactBlock) {
        contactBlock.addEventListener('click', function() {
            contactForm.style.display = "block";
            careersForm.style.display = "none";
            supportForm.style.display = "none";
            franchiseForm.style.display = "none";
        });
        careersBlock.addEventListener('click', function() {
            contactForm.style.display = "none";
            careersForm.style.display = "block";
            supportForm.style.display = "none";
            franchiseForm.style.display = "none";
        });
        supportBlock.addEventListener('click', function() {
            contactForm.style.display = "none";
            careersForm.style.display = "none";
            supportForm.style.display = "block";
            franchiseForm.style.display = "none";
        });
        franchiseBlock.addEventListener('click', function() {
            contactForm.style.display = "none";
            careersForm.style.display = "none";
            supportForm.style.display = "none";
            franchiseForm.style.display = "block";
        });
    }</script>