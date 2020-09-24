<?php
//  ACF FIELDS 
$location_block_title = get_field('location_block_title');
$working_hours_title = get_field('working_hours_title');
?>
<!-- START section -->
<section class=' '>
    <!-- START uk-container -->
    <div class=''>

        <div class='uk-grid'>
            <!-- START uk-width-1-3@m -->
            <div class='uk-width-1-3@m'>
                <!-- START contact-info -->
                <div class='contact-info'>
                    <h3> <?php echo $location_block_title ?> </h3>
                    <?php if (have_rows('locations')) : ?>
                        <?php while (have_rows('locations')) : the_row();
                            //ACF Fields
                            $area = get_sub_field('area');
                            $address = get_sub_field('address');
                            $phone = get_sub_field('phone');
                            $phone_display = get_sub_field('phone_display');
                            $bottom_line = get_sub_field('bottom_line');
                        ?>
                            <!-- START contactInfoContainer -->
                            <div class='contactInfoContainer'>
                                <span class="title"><?php echo $area ?></span>
                                <span class="caption">
                                    <span class="uk-margin-small-right"> <svg width="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12">
                                            <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path>
                                        </svg>
                                        <span class=""> <small> <?php echo $address ?> </small> </span>
                                    </span>
                                </span>
                                <span> <svg width="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                                        <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                                    </svg>
                                    <span class=""> <small> <a style="color:#000;" href="tel:<?php echo $phone ?>"> <?php echo $phone_display ?> </a> </small> </span>
                                </span>

                            </div>
                            <!-- END contactInfoContainer -->
                            <?php if ($bottom_line) : ?>
                                <hr>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>


                    <h3><?php echo $working_hours_title ?></h3>
                    <?php if (have_rows('working_hours')) : ?>
                        <?php while (have_rows('working_hours')) : the_row();
                            //ACF Fields
                            $time = get_sub_field('time');
                            $bottom_line = get_sub_field('bottom_line');
                        ?>
                            <span><?php echo $time ?></span>
                            <br>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <!-- END contact-info -->
            </div>
            <!-- END uk-width-1-3@m -->
            <!-- START uk-width-2-3@m -->
            <div class='uk-width-2-3@m'>
                <h3>Find Us On Map</h3>
                <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d110583.88881926204!2d31.21843592029102!3d29.986713764445273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMy%20Secret!5e0!3m2!1sen!2seg!4v1595776708594!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <!-- END uk-width-2-3@m -->
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</section>