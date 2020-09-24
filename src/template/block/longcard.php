<!-- longCard -->
<?php
$media = get_field('media');
$icon = get_field('icon');
$title = get_field('title');
$caption = get_field('caption');
$button_title = get_field('button_title');
$button_link = get_field('button_link');



?>
<!-- START section-longcard -->
<div class='section-longcard'>
    <!-- START uk-container -->
    <div class=''>
        <!-- START uk-grid uk-grid-match uk-grid-collapse -->
        <div class='uk-grid uk-grid-match uk-grid-collapse' uk-grid='uk-margin'>
            <!-- START uk-width-1-2@m uk-width-1-1 -->
            <div class='uk-width-1-2@m uk-width-1-1 '>
                <!-- START leftblock -->
                <div class='leftblock' style="background: url('<?php echo $media['url'] ?>');background-size: cover;">
                    <!-- <img src="<?php echo $media['url'] ?>" alt="<?php echo $media['alt'] ?>"> -->
                </div>
                <!-- END leftblock -->

            </div>
            <!-- END uk-width-1-2@m uk-width-1-1 -->
            <!-- START uk-width-1-2@m uk-width-1-1 -->
            <div class='uk-width-1-2@m uk-width-1-1 uk-margin-bottom'>
                <!-- START rightblock -->
                <div class='rightblock uk-text-center'>
                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>">
                    <h2> <?php echo $title ?> </h2>
                    <span>
                        <?php echo $caption ?>
                    </span>
                    <br>
                    <br>
                    <br>
                    <?php if ($button_title) : ?>
                        <a href="<?php $button_link ?>"> <?php echo $button_title; ?> </a>
                    <?php endif ?>
                </div>
                <!-- END rightblock -->
            </div>
            <!-- END uk-width-1-2@m uk-width-1-1 -->
        </div>
        <!-- END uk-grid uk-grid-match uk-grid-collapse -->
    </div>
    <!-- END uk-container -->
</div>
<!-- END section-longcard -->