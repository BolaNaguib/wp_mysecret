<?php
// ACF FIELDS
$bio_area = get_field('bio_area', 'options');
$fb = get_field('facebook', 'options');
$tw = get_field('twitter', 'options');
$pi = get_field('pinterest', 'options');
$ig = get_field('instagram', 'options');
?>

<!-- START  -->
<footer class='section_type-footer'>
    <!-- START uk-container -->
    <div class='uk-container'>

        <!-- START uk-grid -->
        <div class='uk-grid' uk-grid="uk-margin">

            <!-- START uk-width-1-2@m -->
            <div class='uk-width-1-2@m'>
                <!-- START card_type-footercaption -->
                <div class='card_type-footercaption'>
                    <h5>DiNouchy</h5>
                    <p>
                        <small>
                            <?php echo $bio_area; ?>
                        </small>
                    </p>
                    <!-- START topnavmenu -->
                    <div class='bottomnavmenu'>

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
                <!-- END card_type-footercaption -->
            </div>
            <!-- END uk-width-1-2@m -->
            <!-- START uk-width-1-4@m -->
            <div class='uk-width-1-4@m'>
                <!-- START card_type-footercaption -->
                <div class='card_type-footer-links'>
                    <h5><?php the_field('col1_title', 'options'); ?></h5>
                    <?php

                    $posts = get_field('col1list', 'options');

                    if ($posts) : ?>
                        <ul class="uk-list">
                            <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?>
                                <?php setup_postdata($post); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"> <small> <?php the_title(); ?> </small> </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?>
                    <?php endif; ?>
                </div>
                <!-- END card_type-footercaption -->
            </div>
            <!-- END uk-width-1-4@m -->
            <!-- START uk-width-1-4@m -->
            <div class='uk-width-1-4@m'>
                <!-- START card_type-footercaption -->
                <div class='card_type-footer-links'>
                    <h5><?php the_field('col2_title', 'options'); ?></h5>
                    <?php

                    $posts = get_field('col2list', 'options');

                    if ($posts) : ?>
                        <ul class="uk-list">
                            <?php foreach ($posts as $post) : // variable must be called $post (IMPORTANT) 
                            ?>
                                <?php setup_postdata($post); ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"> <small> <?php the_title(); ?> </small> </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                        ?>
                    <?php endif; ?>
                </div>
                <!-- END card_type-footercaption -->
            </div>
            <!-- END uk-width-1-4@m -->

        </div>
        <!-- END uk-grid -->
        <br>
        <br>
        <!-- START uk-text-center -->
        <div class='uk-text-center'>
            <small>
                © 2020 DiNouchy | Developed by Inetwork-me.com
            </small>

        </div>
        <!-- END uk-text-center -->
    </div>
    <!-- END uk-container -->
</footer>
<!-- END  -->









<script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>
<style>
    .cloudimage-360 canvas {
        width: unset !important;
        max-height: 400px;
    }

    .uk-first-column {
        margin-bottom: 20px;
    }

    span.woocommerce-input-wrapper input {
        background-color: #eeeeee40;
        border: 1px solid #eee;
        padding: 10px;
    }

    span.woocommerce-input-wrapper textarea {
        background-color: #eeeeee40;
        border: 1px solid #eee;
        padding: 10px;
    }

    html {
        word-wrap: break-word;
    }
</style>
<div class=" uk-text-center uk-margin-top outofstock sale woocommerce-input-wrapper uk-hidden uk-scrollspy wp-block uk-open uk-animation-fade uk-animation-enter uk-margin-bottom  uk-transition-active mainbutton woocommerce-loop-product__link" style="display: none !important"></div>
<!-- START uk-hidden card_type-product -->
<div class='uk-hidden card_type-product'>
    <span class="outofstock"></span>
    <span class="sale"></span>
</div>
<!-- END uk-hidden card_type-product -->
<?php wp_footer(); ?>
</body>

</html>