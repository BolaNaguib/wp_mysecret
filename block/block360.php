<?php
// ACF FIELDS 
$data_folder = get_field('data_folder');
$data_filename = get_field('data_filename');
$block_label = get_field('block_label');
$title = get_field('title');
$button_title = get_field('button_title');
$button_link = get_field('button_link');
?> <!-- START section_type-360 --><div class="section section_type-360"><!-- START uk-container --><div class="uk-container"><!-- START uk-text-center --><div class="uk-text-center"><div class="cloudimage-360" data-folder="<?php echo $data_folder ?>" data-filename="<?php echo $data_filename ?>_{index}.jpg" data-amount="36"></div></div><!-- END uk-text-center --><!-- START card_type-360 --><div class="card_type-360 uk-text-center"><span><?php echo $block_label ?></span><h2 class="uk-margin-remove"><?php echo $title ?></h2><br> <?php if ($button_title) : ?> <a href="<?php echo $button_link ?>"><?php echo $button_title ?></a> <?php endif; ?> </div><!-- END card_type-360 --></div><!-- END uk-container --></div><!-- END section_type-360 -->