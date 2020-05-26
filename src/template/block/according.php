<section class="section">
<div class="uk-container">
<ul uk-accordion="multiple: true">
<?php

// check if the repeater field has rows of data
if( have_rows('according') ):

 	// loop through the rows of data
    while ( have_rows('according') ) : the_row(); 
    // ACF FIELDS 
    $title = get_sub_field('title');
    ?>

    <li class=" card_type-according">
        <a class="uk-accordion-title accordingtitle" href="#"><?php echo $title; ?></a>
<?php

// check if the repeater field has rows of data
if( have_rows('block') ):

 	// loop through the rows of data
    while ( have_rows('block') ) : the_row(); 
    // ACF FIELDS 
    $title = get_sub_field('title');
    $caption = get_sub_field('caption');
    $button_title = get_sub_field('button_title');
    $button_link = get_sub_field('button_link');

?>
        <div class="uk-accordion-content accordingcontent" hidden>
            <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-2-3@m uk-margin-bottom">
            <b><?php echo $title ?></b>
            <p>
            <?php echo $caption ?>
            </p>
            </div>

            <div class="uk-width-1-3@m uk-text-center uk-margin-bottom">
            <a class="actionbutton" href="<?php echo $button_link ?>" uk-toggle><?php echo $button_title ?></a>
            </div>
            </div>

        
        </div>
     <?php  endwhile;

else :

    // no rows found

endif;

?>
    </li>
    <?php  endwhile;

else :

    // no rows found

endif;

?>
</ul>
</div>
</section>