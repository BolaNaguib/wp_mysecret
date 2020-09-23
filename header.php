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
            });</script></head><body <?php body_class(); ?>><!-- Load Facebook SDK for JavaScript --><div id="fb-root"></div><script>window.fbAsyncInit = function() {
  FB.init({
    xfbml            : true,
    version          : 'v7.0'
  });
};

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><!-- Your Chat Plugin code --><div class="fb-customerchat" attribution="install_email" page_id="987161051491898"></div><style>.loadercontainerx {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            background-color: #000;
            color: #fff;
            z-index: 9999999;
            display: block;
            transition: 300ms;

opacity:1;
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
            /* display: none; */
            opacity: 0;
            transition: 300ms;
            z-index: -1;
        }
        .spinner {
  
  text-align: center;
  display: inline-block;
}

.spinner > div {
  width: 5px;
  height: 5px;
  background-color: #fff;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}</style><!-- START loadercontainerx --><div class="loadercontainerx uk-text-center"><!-- START loader --><div class="" style="height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;"><span style="margin-right:4px;">My Secret</span><div class="spinner"><div class="bounce1"></div><div class="bounce2"></div><div class="bounce3"></div></div></div><!-- END loader --></div><!-- END loadercontainerx --> <?php include get_template_directory() . '/common/topmenu.php'; ?> <?php include get_template_directory() . '/common/mainmenudesktop.php'; ?> <?php include get_template_directory() . '/common/mobilemenu.php'; ?> <?php include get_template_directory() . '/common/loginmodal.php'; ?> <?php global $wpdb;

    ?> <!-- </div> --></body></html>