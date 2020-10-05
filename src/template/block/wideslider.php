<!-- WIDESLIDER -->
<!-- START section_type-slider -->
<div class='' style='margin-bottom: 10px;'>
    <!-- START uk-container -->
    <div class=''>
        <div uk-slideshow="animation: fade">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" style="  max-height: 75vh;">
                <?php if (have_rows('slider')) : ?>
                    <ul class="uk-slideshow-items">
                        <?php while (have_rows('slider')) : the_row();
                            //ACF Fields
                            $image = get_sub_field('image');
                            $page = get_sub_field('page');
                        ?>
                            <li>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" style="width: 100%; max-height:700px;">
                            </li>
                        <?php endwhile; ?>

                    </ul>
                <?php endif; ?>

                <!-- <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a> -->

                <!-- START slidenavContainer -->
                <div class='slidenavContainer'>
                    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                </div>
                <!-- END slidenavContainer -->

            </div>

        </div>
    </div>
    <!-- END uk-container -->

</div>
<!-- END section_type-slider -->