<?php
// ACF FIELDS 

?> <!-- START section --><div class="section"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid --><div class="uk-grid uk-grid-small uk-grid-match" uk-grid="uk-margin"> <?php if (have_rows('block')) : ?> <?php while (have_rows('block')) : the_row();
                    //ACF Fields
                    $svg_icon = get_sub_field('svg_icon');
                    $title = get_sub_field('title');
                    $caption = get_sub_field('caption');
                    $button_link = get_sub_field('button_link');
                    $button_title = get_sub_field('button_title');
                ?> <!-- START uk-width-1-4@m --><div class="uk-width-1-4@m"><!-- START card_type-icon --><div class="card_type-icon uk-text-center"><!-- START iconcontainer --><div class="iconcontainer"> <?php echo $svg_icon ?> </div><!-- END iconcontainer --><h5><h5><?php echo $title ?> </h5><small> <?php echo $caption ?> </small><br> <?php if($button_title): ?> <a href="<?php echo $button_link ?>"><?php echo $button_title ?></a> <?php endif; ?> </h5></div><!-- END card_type-icon --></div><!-- END uk-width-1-4@m --> <?php endwhile; ?> <?php endif; ?> </div><!-- END uk-grid --></div><!-- END uk-container --></div><!-- END section -->