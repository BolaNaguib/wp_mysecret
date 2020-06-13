<!-- doublecard --> <?php $left_image = get_field('left_image');
$left_page = get_field('left_page');
$right_image = get_field('right_image');
$right_title = get_field('right_title');
$right_caption = get_field('right_caption');
$right_page = get_field('right_page');


?> <!-- START section-doublecard --><div class="section-doublecard"><!-- START uk-container --><div class="uk-container"><!-- START uk-grid uk-grid-match --><div class="uk-grid uk-grid-match uk-grid-small"><!-- START uk-width-2-3@m uk-width-1-1 --><div class="uk-width-2-3@m uk-width-1-1 uk-margin-bottom"><!-- START leftblock --><div class="leftblock"><a href="<?php echo $left_page ?>"><img src="<?php echo $left_image['url'] ?>" alt=" <?php echo $left_image['alt'] ?>"></a></div><!-- END leftblock --></div><!-- END uk-width-2-3@m uk-width-1-1 --><!-- START uk-width-1-3@m uk-width-1-1 --><div class="uk-width-1-3@m uk-width-1-1 uk-margin-bottom"><!-- START right-block --><div class="right-block uk-flex uk-flex-center uk-flex-middle uk-text-center" style="background-image: url('<?php echo $right_image['url'] ?>');"><a href="<?php echo $right_page ?>"><h2><b> <?php echo $right_title ?> </b><br><span> <?php echo $right_caption ?> </span></h2></a></div><!-- END right-block --></div><!-- END uk-width-1-3@m uk-width-1-1 --></div><!-- END uk-grid uk-grid-match --></div><!-- END uk-container --></div><!-- END section-longcard -->