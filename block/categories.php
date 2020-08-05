<?php 
$first_title = get_field('first_title');
$second_title = get_field('second_title');
$caption = get_field('caption');
$terms = get_field('categories');


?> <!-- START section --><section class="section"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid"><!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START categoriesblock-info --><div class="categoriesblock-info"><h2 class="firsttitle">browse</h2><h2 class="secondtitle">Lingerie</h2><h5>SELECT A CATEGORY</h5></div><!-- END categoriesblock-info --></div><!-- END uk-width-1-4@m --><!-- START uk-width-3-4 --><div class="uk-width-3-4"> <?php if( $terms ): ?> <ul class="uk-grid uk-child-width-1-3@m categorieslist"> <?php foreach( $terms as $term ): ?> <li><a href="<?php echo esc_url( get_term_link( $term ) ); ?>"> <?php echo esc_html( $term->name ); ?> </a></li> <?php endforeach; endif; ?> </ul></div><!-- END uk-width-3-4 --></div><!-- END uk-grid --></div><!-- END uk-container --></section><!-- END section -->