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
?> <!-- START section-testimonials --><section class="section-testimonials full-width"><!-- START uk-container --><div class="uk-container"><!-- START uk-text-center --><div class="uk-text-center"><!-- START section-header --><div class="section-header"><h2 class="title uk-margin-remove">What Our Clients Say</h2><small class="caption">A TOUCH OF COVERAGE NEVER FELT SO SEXY</small></div><!-- END section-header --></div><!-- END uk-text-center --><div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider><ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@s uk-child-width-1-3@m"> <?php for ($i = 0; $i < 8; $i++) : ?> <li><!-- START testimonials-card --><div class="testimonials-card"><span><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-quote-left fa-w-16"><path fill="#fe7799" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" class=""></path></svg></span><p>After shopping at this store, there is no way you go to a different one. Here you will find everything and anything.</p><h4>-- Amy Sullivan</h4></div><!-- END testimonials-card --></li> <?php endfor; ?> </ul><!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a> --></div></div><!-- END uk-container --></section><!-- END section-testimonials -->