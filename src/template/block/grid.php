<!-- START section -->
<div class='section'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-grid -->
        <div class='uk-grid' uk-grid="uk-margin">
            <?php if (have_rows('block')) : ?>
                <?php while (have_rows('block')) : the_row();
                    //ACF Fields
                    $label = get_sub_field('label');
                    $title = get_sub_field('title');
                    $caption = get_sub_field('caption');
                ?>

                    <!-- START uk-width-1-3@m -->
                    <div class='uk-width-1-3@m'>
                        <!-- START card_type-text -->
                        <div class='card_type-text'>
                            <small><?php echo $label ?></small>
                            <h4 class="uk-margin-remove"><?php echo $title ?></h4>
                            <p>
                                <small>
                                    <?php echo $caption ?>
                                </small>
                            </p>
                        </div>
                        <!-- END card_type-text -->
                    </div>
                    <!-- END uk-width-1-3@m -->
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</div>
<!-- END section -->