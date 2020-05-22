<!-- START section_type-quote -->
<div class='section_type-quote'>
    <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: fade;max-height: 400">

        <ul class="uk-slideshow-items">
            <?php if (have_rows('slider')) : ?>
                <?php while (have_rows('slider')) : the_row();
                    //ACF Fields
                    $quote = get_sub_field('quote');
                    $quote_author = get_sub_field('quote_author');
                    $bg = get_sub_field('bg');
                ?>

                    <li class="card_type-quote">
                        <img src="<?php echo $bg['url'] ?>" alt="<?php echo $bg['alt'] ?>" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center ">
                            <!-- START uk-container -->
                            <div class='uk-container'>
                                <br>
                                <p class="uk-margin-remove">
                                    <?php echo $quote ?>
                                </p>
                                <br>
                                <small> - <?php echo $quote_author ?></small>
                            </div>
                            <!-- END uk-container -->

                        </div>
                    </li>

                <?php endwhile; ?>
            <?php endif; ?>


        </ul>

        <div class="uk-dark">
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>

        <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>
</div>
<!-- END section_type-quote -->