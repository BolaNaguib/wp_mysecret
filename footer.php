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
    left: 10px;" controls><source src="<?php echo $music['url'] ?>" type="audio/mpeg">Your browser does not support the audio element.</audio><!-- This is the modal --><style>.couponcontainer {
        background-color: #000;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        letter-spacing: 5px;
    }</style><div id="couponmodal" uk-modal class="uk-modal uk-open" style="display:block"><div class="uk-modal-dialog uk-modal-body uk-text-center"><h2 class="uk-modal-title">Coupons</h2><span>Save 10%</span><p>Copy the following Coupon Code and use it .</p><span class="couponcontainer">JH10PERCENT</span><br><br><p class="uk-text-center"><a id="hideCoupon" style="padding: 10px 20px;
    display: inline-block;
    cursor: pointer;" class="button" type="button">Copied Thanks</a></p></div></div><script>const modalGift = sessionStorage.getItem("modalGift");
    const hideCoupon = document.getElementById('hideCoupon');
    const couponContainer = document.getElementById('couponmodal');

    hideCoupon.addEventListener('click', function() {
        sessionStorage.setItem("modalGift", true);
        couponContainer.style.display = "none"

        console.log('clicked');
    })
    if (modalGift == "true") {
        console.log('hey there');
        couponContainer.style.display = "none"
    }</script><!-- START --><footer class="section_type-footer"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid" uk-grid="uk-margin"><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footercaption --><div class="card_type-footer-links"><h5><?php the_field('col1_title', 'options'); ?></h5> <?php

                    $posts = get_field('col1list', 'options');

                    if ($posts) : ?> <ul class="uk-list"> <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?> <?php setup_postdata($post); ?> <li><a href="<?php the_permalink(); ?>"><small> <?php the_title(); ?> </small></a></li> <?php endforeach; ?> </ul> <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?> <?php endif; ?> </div><!-- END card_type-footercaption --></div><!-- END uk-width-1-4@m --><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footercaption --><div class="card_type-footer-links"><h5><?php the_field('col2_title', 'options'); ?></h5> <?php

                    $posts = get_field('col2list', 'options');

                    if ($posts) : ?> <ul class="uk-list"> <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?> <?php setup_postdata($post); ?> <li><a href="<?php the_permalink(); ?>"><small> <?php the_title(); ?> </small></a></li> <?php endforeach; ?> </ul> <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?> <?php endif; ?> </div><!-- END card_type-footercaption --></div><!-- END uk-width-1-4@m --><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footercaption --><div class="card_type-footer-links"><h5><?php the_field('col3_title', 'options'); ?></h5> <?php

                    $posts = get_field('col3list', 'options');

                    if ($posts) : ?> <ul class="uk-list"> <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?> <?php setup_postdata($post); ?> <li><a href="<?php the_permalink(); ?>"><small> <?php the_title(); ?> </small></a></li> <?php endforeach; ?> </ul> <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?> <?php endif; ?> </div><!-- END card_type-footercaption --></div><!-- END uk-width-1-4@m --><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-footer-ig --><div class="card_type-footer-ig card_type-footer-links"><h5>Instagram Feed</h5> <?php
                    echo do_shortcode('[instagram-feed]');
                    ?> </div><!-- END card_type-footer-ig --></div><!-- END uk-width-1-4@m --></div><!-- END uk-grid --><br><br><!-- START uk-text-center --><div class="uk-text-center"><small>© 2020 MySecret | Developed by <a style="color: #fff;" href="https://inetwork-me.com/">Inetwork-me.com</a></small></div><!-- END uk-text-center --></div><!-- END uk-container --></footer><!-- END  --><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- <a class="uk-button uk-button-default" href="#contactform" uk-toggle>Open</a> --><div id="contactform" class="uk-flex-top" uk-modal><div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-text-center"><button class="uk-modal-close-default" type="button" uk-close></button><h2>EMAIL US</h2><hr> <?php echo do_shortcode('[contact-form-7 id="18" title="Contact form 1"]'); ?> </div></div><script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script><style>.cloudimage-360 canvas {
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
    input#user_login,
    input#reg_billing_phone,
    input#reg_billing_first_name,
    input#reg_billing_last_name,
    input#reg_email 
 {
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
        background-color: #000;
        padding: 20px 30px;
        color: #fff;
        display: inline-block;
        border: 0px;
        margin: 10px 0px;
        font-size: 21px;
    }</style><div class="uk-grid-collapse section-longcard uk-text-center uk-margin-top outofstock sale woocommerce-input-wrapper uk-hidden uk-scrollspy wp-block uk-open uk-animation-fade uk-animation-enter uk-margin-bottom uk-transition-active mainbutton woocommerce-loop-product__link" style="display: none !important"></div><!-- START uk-hidden card_type-product --><div class="uk-hidden card_type-product rightblock"><span class="outofstock"></span> <span class="sale"></span></div><!-- END uk-hidden card_type-product --><!-- uk-active uk-grid-collapse --> <?php wp_footer(); ?> <style>.nav__link {
    background: linear-gradient(180deg,transparent 50%,#eee 0) 50%/0 100% no-repeat;
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
        box-shadow: 0 0 0 1px #000 !important;
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
        color: #000 !important;
        border-color: #000 !important;
    }

    li.variable-item.button-variable-item.selected {
        color: #000 !important;
        border-color: #000 !important;
    }

    .variable-items-wrapper .wvs-has-image-tooltip:hover:after,
    .variable-items-wrapper .wvs-has-image-tooltip:hover:before,
    .variable-items-wrapper [data-wvstooltip]:hover:after,
    .variable-items-wrapper [data-wvstooltip]:hover:before {
        background-color: #000 !important;
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
        color: #000 !important;
    }

    span.woocommerce-Price-currencySymbol {
        position: relative;
        top: -5px;
        font-size: 13px;
    }

    .woocommerce-variation-price {
        border: 1px solid #000;
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
        background-color: #000;
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
        background-color: 000;

        color: #fff !important;
    }

    .cartItemName a {
        font-size: 13px;
        color: #21212191 !important;
        font-weight: 600;
        transition: 300ms;
    }

    .cartItemName a:hover {
        color: #000 !important;
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
        color: #000 !important;
    }

    .button {
        background-color: #000 !important;
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
        background-color: #000;
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
        border: 1px solid #000;
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
        background-color: #000;
    }

    .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
        background-color: #000;
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
        color: #000 !important;
    }

    li.woocommerce-widget-layered-nav-list__item.wc-layered-nav-term.woocommerce-widget-layered-nav-list__item--chosen.chosen {
        background-color: #000;
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