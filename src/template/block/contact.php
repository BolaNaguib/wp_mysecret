<?php
//  ACF FIELDS 
$fb = get_field('facebook', 'options');
$tw = get_field('twitter', 'options');
$pi = get_field('pinterest', 'options');
$ig = get_field('instagram', 'options');

$tab_one_title = get_field('tab_one_title');
$form_title_one = get_field('form_title_one');
$form_one = get_field('form_one');
$tab_two_title = get_field('tab_two_title');
$form_title_two = get_field('form_title_two');
$form_two = get_field('form_two');
$tab_three_title = get_field('tab_three_title');
$form_title_three = get_field('form_title_three');
$form_three = get_field('form_three');
$tab_four_title = get_field('tab_four_title');
$form_title_four = get_field('form_title_four');
$form_four = get_field('form_four');
$general_title = get_field('general_title');

?>
<!-- START section -->
<section class=' '>
    <!-- START uk-container -->
    <div class='uk-container'>
        <div class="uk-grid uk-grid-small uk-grid-match uk-grid-stack" uk-grid="uk-margin">
            <!-- START uk-width-1-4@m -->
            <div class="uk-width-1-4@m uk-first-column">
                <!-- START card_type-icon -->
                <div id="contactBlock" class="card_type-icon uk-text-center">
                    <!-- START iconcontainer -->
                    <div class="iconcontainer">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope-open-text" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope-open-text fa-w-16">
                            <path fill="currentColor" d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z" class=""></path>
                        </svg>
                    </div><!-- END iconcontainer -->
                    <h4 class="uk-margin-remove"><?php echo $tab_one_title; ?></h4>

                </div><!-- END card_type-icon -->
            </div><!-- END uk-width-1-4@m -->
            <!-- START uk-width-1-4@m -->
            <div class="uk-width-1-4@m uk-first-column">
                <!-- START card_type-icon -->
                <div id="careersBlock" class="card_type-icon uk-text-center">
                    <!-- START iconcontainer -->
                    <div class="iconcontainer">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="users" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-users fa-w-20">
                            <path fill="currentColor" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z" class=""></path>
                        </svg>
                    </div><!-- END iconcontainer -->
                    <h4 class="uk-margin-remove"><?php echo $tab_two_title; ?></h4>

                </div><!-- END card_type-icon -->
            </div><!-- END uk-width-1-4@m -->

            <!-- START uk-width-1-4@m -->
            <div class="uk-width-1-4@m uk-first-column">
                <!-- START card_type-icon -->
                <div id="supportBlock" class="card_type-icon uk-text-center">
                    <!-- START iconcontainer -->
                    <div class="iconcontainer">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headset" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-headset fa-w-16">
                            <path fill="currentColor" d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z" class=""></path>
                        </svg>
                    </div><!-- END iconcontainer -->
                    <h4 class="uk-margin-remove"><?php echo $tab_three_title; ?></h4>

                </div><!-- END card_type-icon -->
            </div><!-- END uk-width-1-4@m -->
            <!-- START uk-width-1-4@m -->
            <div class="uk-width-1-4@m uk-first-column">
                <!-- START card_type-icon -->
                <div id="franchiseBlock" class="card_type-icon uk-text-center">
                    <!-- START iconcontainer -->
                    <div class="iconcontainer">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="store" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 616 512" class="svg-inline--fa fa-store fa-w-20">
                            <path fill="currentColor" d="M602 118.6L537.1 15C531.3 5.7 521 0 510 0H106C95 0 84.7 5.7 78.9 15L14 118.6c-33.5 53.5-3.8 127.9 58.8 136.4 4.5.6 9.1.9 13.7.9 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18 20.1 44.3 33.1 73.8 33.1 29.6 0 55.8-13 73.8-33.1 18.1 20.1 44.3 33.1 73.8 33.1 4.7 0 9.2-.3 13.7-.9 62.8-8.4 92.6-82.8 59-136.4zM529.5 288c-10 0-19.9-1.5-29.5-3.8V384H116v-99.8c-9.6 2.2-19.5 3.8-29.5 3.8-6 0-12.1-.4-18-1.2-5.6-.8-11.1-2.1-16.4-3.6V480c0 17.7 14.3 32 32 32h448c17.7 0 32-14.3 32-32V283.2c-5.4 1.6-10.8 2.9-16.4 3.6-6.1.8-12.1 1.2-18.2 1.2z" class=""></path>
                        </svg>
                    </div><!-- END iconcontainer -->
                    <h4 class="uk-margin-remove"><?php echo $tab_four_title; ?></h4>

                </div><!-- END card_type-icon -->
            </div><!-- END uk-width-1-4@m -->
        </div>
        <!-- START uk-grid -->
        <div class='uk-grid'>
            <!-- START uk-width-1-3@m -->
            <div class='uk-width-1-3@m'>
                <!-- START contact-info -->
                <div class='contact-info'>
                    <h3> <?php echo $general_title ?> </h3>
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


                    <!-- START contactInfoSocial -->
                    <div class='contactInfoSocial'>


                        <?php if ($fb) : ?>
                            <a href="<?php echo $fb; ?>"><svg height="21px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                    <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                                </svg></a>
                        <?php endif; ?>
                        <?php if ($ig) : ?>
                            <a href="<?php echo $ig; ?>"><svg height="21px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                    <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                </svg></a>
                        <?php endif; ?>
                    </div>
                    <!-- END contactInfoSocial -->
                </div>
                <!-- END contact-info -->
            </div>
            <!-- END uk-width-1-3@m -->
            <!-- START uk-width-2-3@m -->
            <div class='uk-width-2-3@m'>
                <!-- START contactform -->




                <div id="contactForm" class='contactform'>
                    <h2><?php echo $form_title_one ?></h2>
                    <?php echo do_shortcode(' ' . $form_one . ' '); ?>
                </div>
                <div id="careersForm" class='contactform' style="display: none;">
                    <h2><?php echo $form_title_two ?></h2>
                    <?php echo do_shortcode(' ' . $form_two . ' '); ?>
                </div>
                <div id="supportForm" class='contactform' style="display: none;">
                    <h2><?php echo $form_title_three ?></h2>
                    <?php echo do_shortcode(' ' . $form_three . ' '); ?>
                </div>
                <div id="franchiseForm" class='contactform' style="display: none;">
                    <h2><?php echo $form_title_four ?></h2>
                    <?php echo do_shortcode(' ' . $form_four . ' '); ?>
                </div>
                <!-- END contactform -->
            </div>
            <!-- END uk-width-2-3@m -->
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</section>
<section class="full-width">
    <!-- START uk-container -->

    <img src="http://alices-html.themerex.net/images/contacts.jpg" alt="">
    <!-- END section -->
    <iframe style="width:100%" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d110583.88881926204!2d31.21843592029102!3d29.986713764445273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMy%20Secret!5e0!3m2!1sen!2seg!4v1595776708594!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- END uk-container -->
</section>