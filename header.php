<!DOCTYPE html><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><html><head> <?php
    // ACF FIELDS 
    $fb = get_field('facebook', 'options');

    $ig = get_field('instagram', 'options');
    $address = get_field('address', 'options');
    $phone = get_field('phone', 'options');
    $phone_display = get_field('phone_display', 'options');
    $logo = get_field('logo', 'option');
    ?> <meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title> <?php the_field('meta_title'); ?> </title><meta name="title" content=" <?php the_field('meta_title'); ?> "><meta name="keywords" content=" <?php the_field('meta_keywords'); ?> "><meta name="description" content=" <?php the_field('meta_description'); ?> "><link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>"> <?php the_field('header_js_general', 'option');
    the_field('header_js'); ?> <?php wp_head(); ?> <script>function PbStyleQuantite(a) {
            var b, c = !1;
            a || (a = ".qty"),
                b = jQuery("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").find(a),
                b.length && (jQuery.each(b, function(a, b) {
                        "date" !== jQuery(b).prop("type") && "hidden" !== jQuery(b).prop("type") && (jQuery(b).parent().hasClass("buttons_added") || (jQuery(b).parent().addClass("buttons_added").prepend('<input type="button" value="-" class="minus" />'),
                            jQuery(b).addClass("input-text").after('<input type="button" value="+" class="plus" />'),
                            c = !0))
                    }),
                    c && (jQuery("input" + a + ":not(.product-quantity input" + a + ")").each(function() {
                            var a = parseFloat(jQuery(this).attr("min"));
                            a && a > 0 && parseFloat(jQuery(this).val()) < a && jQuery(this).val(a)
                        }),
                        jQuery(".plus, .minus").unbind("click"),
                        jQuery(".plus, .minus").on("click", function() {
                            var b = jQuery(this).parent().find(a),
                                c = parseFloat(b.val()),
                                d = parseFloat(b.attr("max")),
                                e = parseFloat(b.attr("min")),
                                f = b.attr("step");
                            c && "" !== c && "NaN" !== c || (c = 0),
                                "" !== d && "NaN" !== d || (d = ""),
                                "" !== e && "NaN" !== e || (e = 0),
                                "any" !== f && "" !== f && void 0 !== f && "NaN" !== parseFloat(f) || (f = 1),
                                jQuery(this).is(".plus") ? d && (d == c || c > d) ? b.val(d) : b.val(c + parseFloat(f)) : e && (e == c || c < e) ? b.val(e) : c > 0 && b.val(c - parseFloat(f)),
                                b.trigger("change")
                        })))
        }
        jQuery(window).on("load", function() {
                PbStyleQuantite()
            }),
            jQuery(document).ajaxComplete(function() {
                PbStyleQuantite()
            });</script></head><body <?php body_class(); ?>><style>.loadercontainerx {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            background-color: #ffffff;
            z-index: 9999999;
            display: block;
            transition: 300ms;

        }

        .loader {
            width: 100%;
            height: 100%;
            background-color: #ffc6df;

        }

        .loader img {
            border: 2px solid #fff;
        }

        .loaded {
            display: none;
            transition: 300ms;
        }</style><!-- START loadercontainerx --><div class="loadercontainerx"><!-- START loader --><div class=""><img style="width:100%; height:100vh" src="<?php echo get_template_directory_uri() ?>/images/loader.gif" alt=""></div><!-- END loader --></div><!-- END loadercontainerx --> <?php include get_template_directory() . '/common/topmenu.php'; ?> <?php include get_template_directory() . '/common/mainmenudesktop.php'; ?> <?php include get_template_directory() . '/common/mobilemenu.php'; ?> <?php include get_template_directory() . '/common/loginmodal.php'; ?> <!-- </div> --></body></html>