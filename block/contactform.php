<?php 
// ACF FIELDS 
$form_shortcode = get_field('form_shortcode');

?> <section class="section"><div class="uk-container"> <?php echo do_shortcode(' ' . $form_shortcode . ' '); ?> </div></section>