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
?> <!-- START section-musthave --><section class="section-musthave"><!-- START uk-container --><div class="" style="padding:0 10px;"><!-- START uk-text-center --><div class="uk-text-center"><!-- START section-header --><div class="section-header"><h2 class="title uk-margin-remove">Brands</h2><small class="caption">A TOUCH OF COVERAGE NEVER FELT SO SEXY</small></div><!-- END section-header --></div><!-- END uk-text-center --><!-- START uk-grid --><div class="uk-grid uk-grid-match"> <?php for ($i = 0; $i < 8; $i++) : ?> <!-- START uk-width-1-4@m uk-width-1-2 --><div class="uk-width-1-4@m uk-width-1-2"><!-- START brands-card --><div class="brands-card"><img src="http://alices-html.themerex.net/images/2.png" alt=""></div><!-- END brands-card --></div><!-- END uk-width-1-4@m uk-width-1-2 --> <?php endfor; ?> </div><!-- END uk-grid --></div><!-- END uk-container --></section><!-- END section-musthave -->