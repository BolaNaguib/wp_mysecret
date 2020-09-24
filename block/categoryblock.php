<?php //ACF FIELDS 
$section_title = get_field('section_title');
$section_caption = get_field('section_caption');
?> <!-- categoriesBlock --><!-- START section --><section class=""><!-- START uk-container --><div class=""><!-- END uk-text-center --> <?php if (have_rows('categories')) : ?> <!-- START uk-grid --><div class="uk-grid uk-grid-small" uk-grid="uk-margin" uk-scrollspy="cls: uk-animation-slide-bottom; target: .categorycardanimation; delay: 500; "> <?php while (have_rows('categories')) : the_row(); ?> <?php // ACF FIELDS 
                    $term = get_sub_field('productcategory');
                    $image = get_sub_field('image');
                    $wide = get_sub_field('wide');
                    // var_dump($term->name) 
                    ?> <?php if ($term && $image) : ?> <!-- START div --><div class="categorycardanimation <?php if ($wide) : ?> uk-width-2-3@m <?php else : ?>uk-width-1-3@m <?php endif; ?>"><!-- START card_type-categoryblock --><div class="card_type-categoryblock uk-position-relative"><a href="<?php echo get_term_link($term) ?>"><!-- START uk-position-top-left --><div class="uk-position-top-left uk-padding-small"><h4> <?php echo $term->name; ?> </h4><!-- <span>Shop Now</span> --></div><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"><!-- END uk-position-top-left --></a></div><!-- END card_type-categoryblock --></div><!-- END div --> <?php endif; ?> <?php endwhile; ?> </div><!-- END uk-grid --> <?php endif; ?> </div><!-- END uk-container --></section><!-- END section -->