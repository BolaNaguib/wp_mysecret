<!-- START section_type-hero -->
<div class='section_type-hero'>
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: fade;max-height: 800; min-height: 600">
        <?php if (have_rows('slideshow')) : ?>

            <ul class="uk-slideshow-items">
                <?php while (have_rows('slideshow')) : the_row();
                    // ACF FIELDS 
                    $image = get_sub_field('image');
                    $hero_label = get_sub_field('hero_label');
                    $hero_title = get_sub_field('hero_title');
                    $hero_caption = get_sub_field('hero_caption');
                    $button_title = get_sub_field('button_title');
                    $button_link = get_sub_field('button_link');

                ?>
                    <li class="card_type-hero">
                        <img loading="lazy" loading="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center ">
                            <!-- START uk-container -->
                            <div class='uk-container'>
                                <!-- START  -->
                                <div class='hero__content'>
                                    <span>
                                        <h3 class="uk-margin-remove" uk-scrollspy="cls: uk-animation-slide-top; repeat: true; delay: 500"> <?php echo $hero_label ?></h3>
                                    </span>
                                    <h1 class="uk-margin-remove" uk-scrollspy="cls: uk-animation-fade; repeat: true; delay: 1000"><?php echo $hero_title ?></h1>
                                    <br>
                                    <p class="uk-margin-remove" uk-scrollspy="cls: uk-animation-slide-bottom; repeat: true; delay: 1500">
                                        <?php echo $hero_caption ?>
                                    </p>
                                    <br>
                                    <?php if ($button_link) : ?>
                                        <a href="<?php echo $button_link ?>" uk-scrollspy="cls: uk-animation-fade; repeat: true; delay: 2000"><?php echo $button_title ?></a>
                                    <?php endif; ?>
                                </div>
                                <!-- END  -->

                            </div>
                            <!-- END uk-container -->

                        </div>
                    </li>
                <?php endwhile; ?>

            </ul>
        <?php endif; ?>

        <div class="uk-dark">
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous">
                <svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-previous">
                    <polyline fill="none" stroke="#fff" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline>
                </svg>
            </a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next">
                <svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg" data-svg="slidenav-next">
                    <polyline fill="none" stroke="#fff" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline>
                </svg>
            </a>
        </div>

        <!-- <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul> -->

    </div>
</div>
<!-- END section_type-hero -->