<!-- START section_type-gallery --><div class="section_type-gallery"><div uk-slider style="overflow: hidden;"><ul class="uk-slider-items"> <?php if (have_rows('block')) : ?> <?php while (have_rows('block')) : the_row();
                    //ACF Fields
                    $label = get_sub_field('label');
                    $title = get_sub_field('title');
                    $image = get_sub_field('image');
                    $url = get_sub_field('url');
                ?> <li class="uk-transition-toggle uk-width-1-2 uk-width-1-5@s card_type-gallery" tabindex="0" style="overflow: hidden"><a href="<?php echo $url ?>"><img loading="lazy" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"><div class="uk-position-center uk-panel" style="z-index:99999"><span class="top"><?php echo $label ?></span><b class="bottom"> <?php echo $title ?></b></div></a></li> <?php endwhile; ?> <?php endif; ?> </ul></div></div><!-- END section_type-gallery -->