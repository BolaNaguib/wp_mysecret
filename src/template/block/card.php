<?php
// ACF FIELDS 
$card_label = get_field('card_label');
$card_title = get_field('card_title');
$card_content = get_field('card_content');
$media = get_field('media');
$card_button_title = get_field('card_button_title');
$card_button_link = get_field('card_button_link');
$media_direction = get_field('media_direction');
?>
<!-- START section section_theme-secondary -->
<div class='section section_theme-gray'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-grid -->
        <div class='uk-grid uk-flex uk-flex-middle' uk-grid="uk-margin">

            <!-- START uk-width-1-2@m -->
            <div class='uk-width-1-2@m <?php if (!$media_direction) : ?> uk-flex-last@m <?php else : ?>  uk-flex-first <?php endif; ?>'>
                <!-- START card_type-img -->
                <div class='card_type-img'>
                    <img loading="lazy" src="<?php echo $media['url'] ?>" alt="<?php echo $media['alt'] ?>">
                </div>
                <!-- END card_type-img -->
            </div>
            <!-- END uk-width-1-2@m -->

            <!-- START uk-width-1-2@m -->
            <div class='uk-width-1-2@m'>
                <!-- START card_type-card -->
                <div class='card_type-card'>
                    <span> <?php echo $card_label ?> </span>
                    <h3 class="uk-margin-remove"><?php echo $card_title ?></h3>
                    <p>
                        <small>
                            <?php echo $card_content ?>
                        </small>
                    </p>
                    <?php if ($card_button_title) : ?>
                        <a href="<?php echo $card_button_link ?>">
                            <?php echo $card_button_title ?>
                        </a>
                    <?php endif; ?>


                </div>
                <!-- END card_type-card -->
            </div>
            <!-- END uk-width-1-2@m -->

        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->

</div>
<!-- END section section_theme-secondary -->