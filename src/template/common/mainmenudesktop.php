<!-- START mainmenu_desktop -->
<div class='mainmenu_desktop uk-visible@m navbarboundary navbarboundaryv2'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START mainmenua_navbar -->
        <div class='mainmenua_navbar  '>
            <nav uk-navbar>
                <div class="uk-navbar-left">

                    <a class="nav__link" href="/">
                        My Secret</a>
                    <!-- <img loading="lazy" style="max-height:110px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>"> -->
                </div>
                <div class="uk-navbar-center">
                    <ul class="uk-navbar-nav">
                        <?php if (have_rows('sub_menu_v2', 'options')) : ?>
                            <?php while (have_rows('sub_menu_v2', 'options')) : the_row();
                                //ACF Fields
                                $term = get_sub_field('category');

                            ?>
                                <li>

                                    <a class="nav__link" href="<?php echo esc_url(get_term_link($term)); ?>">
                                        <?php echo esc_html($term->name); ?></a>
                                    <!-- START card_type-submenulink -->
                                    <div class="dropdown-controller" style="display:none;     margin-left: 0px; margin-top:20px;" uk-dropdown="boundary: .navbarboundaryv2; pos: bottom-justify; boundary-align: true; animation: uk-animation-slide-bottom-medium; duration:500;delay-hide: 0">
                                        <!-- START card_type-submenulink -->
                                        <div class='card_type-submenulink uk-container' style=" padding-top:20px;">

                                            <ul class="uk-grid uk-child-width-1-6">
                                                <?php if (have_rows('sub_sub_menu', 'options')) : ?>

                                                    <?php while (have_rows('sub_sub_menu', 'options')) : the_row(); ?>

                                                        <?php
                                                        $subcat = get_sub_field('sub_category');
                                                        $subcatImage = get_sub_field('image');
                                                        $altImage = get_template_directory_uri() . '/images/bra.PNG';
                                                        $displaysubcat = $subcatImage['url'] ? $subcatImage['url'] : $altImage;
                                                        if ($subcat) : ?>

                                                            <li>
                                                                <small>
                                                                    <a style="color:#000;" class="nav__link-submenuv3 uk-text-center uk-align-center" href="<?php echo esc_url(get_term_link($subcat)); ?>">
                                                                        <img src="<?php echo $displaysubcat ?>" style="    height: 65px;
    width: 65px;
    border-radius: 100%;
    border: 1px solid #000;
    display: inline-block;" alt="">
                                                                        <span style="display: block;"> <?php echo esc_html($subcat->name); ?></span>


                                                                </small></li>
                                                        <?php endif; ?>

                                                    <?php endwhile; ?>

                                                <?php endif; ?>

                                            </ul>
                                        </div>
                                        <!-- END card_type-submenulink -->
                                    </div> <!-- END dropdown-controller -->
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>



                </div>
                <div class="uk-navbar-right">

                    <form class="uk-search searchBotton" method="get" action="<?php echo home_url('/'); ?>" role="search">

                        <button class="uk-search-icon-flip" style="color:#000 !important" uk-search-icon type="submit" role="button" class="btn btn-default right">
                        </button>
                        <input class="uk-search-input" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" type="search" id="search">
                        <input type="hidden" name="post_type" value="product" />

                    </form>

                </div>

            </nav>
        </div>
        <!-- END mainmenua_navbar -->
    </div>
    <!-- END uk-container -->
</div>
<!-- END mainmenu_desktop -->