<?php if (have_rows('faq')) : ?>
    <!-- START section -->
    <div class='section'>
        <!-- START uk-container -->
        <div class='uk-container'>
            <ul uk-accordion>
                <?php while (have_rows('faq')) : the_row();
                    //ACF Fields
                    $faq_title = get_sub_field('faq_title');
                    $faq_content = get_sub_field('faq_content');
                ?>
                    <li>
                        <a class="uk-accordion-title" href="#"><?php echo $faq_title ?></a>
                        <div class="uk-accordion-content">
                            <p>
                                <?php echo $faq_content ?>
                            </p>
                        </div>
                    </li>
                <?php endwhile; ?>


            </ul>
        </div>
        <!-- END uk-container -->
    </div>
    <!-- END section -->
<?php endif; ?>