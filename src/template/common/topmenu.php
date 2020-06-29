   <!-- START top-menu -->
   <div class='top-menu'>
       <!-- START uk-container -->
       <div class='uk-container'>
           <!-- START uk-grid -->
           <div class='uk-grid' uk-grid="uk-margin">
               <!-- START uk-width-1-3@m -->
               <div class='uk-width-1-3@m  ses uk-text-center uk-text-left@m'>
                   <span class="uk-margin-right"> <svg width="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-map-marker-alt fa-w-12">
                           <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z" class=""></path>
                       </svg>
                       <span class="uk-margin-small-left"> <small> <?php echo $address ?> </small> </span>
                   </span>
                   <span> <svg width="10px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                           <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                       </svg>
                       <span class="uk-margin-small-left"> <small> <?php echo $phone_display ?> </small> </span>
                   </span>

               </div>
               <!-- END uk-width-1-3@m -->


               <!-- START UK-WIDTH-1-3@m uk-flex uk-flex -->
               <div class='uk-width-1-3@m  uk-visible@m uk-flex uk-flex-center'>
                   <!-- START topnavmenu -->
                   <div class='topnavmenu'>
                       <?php $postx = get_field('topmenu_navbar', 'options');
                        if ($postx) : ?>
                           <?php foreach ($postx as $post) : // variable must be called $post (IMPORTANT) 
                            ?>
                               <?php setup_postdata($post); ?>
                               <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                               <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  
                                ?>
                           <?php endforeach; ?>
                       <?php endif; ?>
                       <?php if ($tw) : ?>
                           <a href="<?php echo $tw; ?>"> <svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-twitter fa-w-16">
                                   <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" class=""></path>
                               </svg> </a>
                       <?php endif; ?>

                       <?php if ($fb) : ?>
                           <a href="<?php echo $fb; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                   <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                               </svg></a>
                       <?php endif; ?>

                       <?php if ($pi) : ?>

                           <a href="<?php echo $pi; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-pinterest-p fa-w-12">
                                   <path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z" class=""></path>
                               </svg></a>
                       <?php endif; ?>

                       <?php if ($ig) : ?>
                           <a href="<?php echo $ig; ?>"><svg height="15px" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                   <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                               </svg></a>
                       <?php endif; ?>

                   </div>
                   <!-- END topnavmenu -->
               </div>
               <!-- END UK-WIDTH-1-3@m uk-flex uk-flex-right -->

               <!-- START uk-width-1-3@m -->
               <div class='uk-width-1-3@m uk-width-1-1 uk-flex uk-flex-right@m uk-flex-center'>
                   <!-- START uk-grid uk-child-width-auto -->
                   <div class='uk-grid uk-child-width-auto'>
                       <!-- START div -->
                       <div class='div'>
                           <!-- START logincontainer -->
                           <div class='logincontainer topnavmenu'>
                               <a class=" " href="#loginmodal" uk-toggle>

                                   Login </a>
                           </div>
                           <!-- END logincontainer -->
                       </div>
                       <!-- END div -->
                       <!-- START div -->
                       <div class='div'>

                           <!-- START currencyswitchercontainer -->
                           <div class='currencyswitchercontainer'>
                               <?php echo do_shortcode('[woocs style="1" show_flags="0" head_bg="#000" ]'); ?>
                           </div>
                           <!-- END currencyswitchercontainer -->
                       </div>
                       <!-- END div -->
                       <!-- START div -->
                       <div class='div'>
                           <!-- START cardiconcontainer -->
                           <div class='cardiconcontainer'>
                               <?php global $woocommerce; ?>


                               <img src="<?php echo get_template_directory_uri() ?>/images/cart.png" alt=""> <span style=" padding: 1px 9px;" class="badgex"><?php echo $woocommerce->cart->cart_contents_count ?></span>
                               <?php include get_template_directory() . '/common/cartcontainer.php'; ?>


                           </div>
                           <!-- END cardiconcontainer -->
                       </div>
                       <!-- END div -->
                   </div>
                   <!-- END uk-grid uk-child-width-auto -->

               </div>
               <!-- END uk-width-1-3@m -->

           </div>
           <!-- END uk-grid -->
       </div>
       <!-- END uk-container -->
   </div>
   <!-- END top-menu -->