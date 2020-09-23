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
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mail-bulk" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-mail-bulk fa-w-18"><path fill="currentColor" d="M160 448c-25.6 0-51.2-22.4-64-32-64-44.8-83.2-60.8-96-70.4V480c0 17.67 14.33 32 32 32h256c17.67 0 32-14.33 32-32V345.6c-12.8 9.6-32 25.6-96 70.4-12.8 9.6-38.4 32-64 32zm128-192H32c-17.67 0-32 14.33-32 32v16c25.6 19.2 22.4 19.2 115.2 86.4 9.6 6.4 28.8 25.6 44.8 25.6s35.2-19.2 44.8-22.4c92.8-67.2 89.6-67.2 115.2-86.4V288c0-17.67-14.33-32-32-32zm256-96H224c-17.67 0-32 14.33-32 32v32h96c33.21 0 60.59 25.42 63.71 57.82l.29-.22V416h192c17.67 0 32-14.33 32-32V192c0-17.67-14.33-32-32-32zm-32 128h-64v-64h64v64zm-352-96c0-35.29 28.71-64 64-64h224V32c0-17.67-14.33-32-32-32H96C78.33 0 64 14.33 64 32v192h96v-32z" class=""></path></svg>
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
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="laptop-house" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-laptop-house fa-w-20"><path fill="currentColor" d="M272,288H208a16,16,0,0,1-16-16V208a16,16,0,0,1,16-16h64a16,16,0,0,1,16,16v37.12C299.11,232.24,315,224,332.8,224H469.74l6.65-7.53A16.51,16.51,0,0,0,480,207a16.31,16.31,0,0,0-4.75-10.61L416,144V48a16,16,0,0,0-16-16H368a16,16,0,0,0-16,16V87.3L263.5,8.92C258,4,247.45,0,240.05,0s-17.93,4-23.47,8.92L4.78,196.42A16.15,16.15,0,0,0,0,207a16.4,16.4,0,0,0,3.55,9.39L22.34,237.7A16.22,16.22,0,0,0,33,242.48,16.51,16.51,0,0,0,42.34,239L64,219.88V384a32,32,0,0,0,32,32H272ZM629.33,448H592V288c0-17.67-12.89-32-28.8-32H332.8c-15.91,0-28.8,14.33-28.8,32V448H266.67A10.67,10.67,0,0,0,256,458.67v10.66A42.82,42.82,0,0,0,298.6,512H597.4A42.82,42.82,0,0,0,640,469.33V458.67A10.67,10.67,0,0,0,629.33,448ZM544,448H352V304H544Z" class=""></path></svg>
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
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mobile-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-mobile-alt fa-w-10"><path fill="currentColor" d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z" class=""></path></svg>
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
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="building" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-building fa-w-14"><path fill="currentColor" d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z" class=""></path></svg>
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
                    <h2> <?php echo $general_title ?> </h2>
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