<!-- START mainmenu_desktop -->
<div class='mainmenu_desktop'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-text-center -->
        <div class='uk-text-center' style="padding:30px 0px">
            <a href="/">
                <img loading="lazy" style="max-height:110px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
            </a>
        </div>
        <!-- END uk-text-center -->
        <!-- START mainmenua_navbar -->
        <div class='mainmenua_navbar'>
            <nav uk-navbar>
                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav uk-visible@m">
                        <?php if (have_rows('main_menu', 'options')) : ?>
                            <?php while (have_rows('main_menu', 'options')) : the_row(); ?>
                                <?php $post = get_sub_field('main_menu_page');
                                $main_menu_title = get_sub_field('main_menu_title');
                                if ($post) : ?>
                                    <?php setup_postdata($post); ?>
                                    <li style="uk-position-relative">
                                        <a class="nav__link" href="<?php the_permalink($post); ?>">
                                            <?php echo $main_menu_title  ?></a>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  
                                        ?>

                                        <?php if (have_rows('sub_menu', 'options')) : ?>

                                            <div class="dropdown-controller" style="display:none;" uk-dropdown="pos: bottom-left; animation: uk-animation-slide-bottom-medium; duration:500;delay-hide: 0">

                                                <!-- START card_type-submenulink -->
                                                <div class='card_type-submenulink'>

                                                    <ul class="uk-list">
                                                        <?php while (have_rows('sub_menu', 'options')) : the_row();
                                                            //ACF Fields
                                                            $term = get_sub_field('category');

                                                        ?>
                                                            <li>
                                                                <small>
                                                                    <?php if ($term) : ?>
                                                                        <a class="nav__link-submenu" href="<?php echo esc_url(get_term_link($term)); ?>"> <?php echo esc_html($term->name); ?> <?php the_title(); ?>

                                                                        </a>
                                                                    <?php endif; ?>
                                                                    <!-- START card_type-submenulink -->
                                                                    <div class="dropdown-controller" style="display:none;     margin-left: 0px;" uk-dropdown="pos: right; animation: uk-animation-slide-bottom-medium; duration:500;delay-hide: 0">
                                                                        <!-- START card_type-submenulink -->
                                                                        <div class='card_type-submenulink'>

                                                                            <ul class="uk-list">

                                                                                <li>
                                                                                    <small>
                                                                                        <a class="nav__link-submenu" href="<?php the_permalink(); ?>"> test <?php the_title(); ?> </a>
                                                                                    </small></li>
                                                                            </ul>
                                                                        </div>
                                                                        <!-- END card_type-submenulink -->
                                                                    </div> <!-- END dropdown-controller -->

                                                                </small>

                                                            </li>

                                                        <?php endwhile; ?>

                                                    </ul>
                                                </div>
                                                <!-- END card_type-submenulink -->



                                            </div>
                                        <?php endif; ?>
                                    </li>


                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <!-- <form class="search uk-search uk-search-navbar uk-width-1-1" method="get" action="<?php echo home_url('/'); ?>" role="search">
            <input
             placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" 
             value="<?php echo get_search_query() ?>" 
             name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" 
             />
            <button style="    display: none;" type="submit" role="button" class="btn btn-default right" /><span class="glyphicon glyphicon-search white"></span></button>
        </form> -->
                    <form class="uk-search searchBotton" method="get" action="<?php echo home_url('/'); ?>" role="search">
                        <button class="uk-search-icon-flip" uk-search-icon type="submit" role="button" class="btn btn-default right">
                        </button>
                        <input class="uk-search-input" placeholder="<?php echo esc_attr_x('Search …', 'placeholder') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>">
                    </form>
                </div>

            </nav>
        </div>
        <!-- END mainmenua_navbar -->
    </div>
    <!-- END uk-container -->
</div>
<!-- END mainmenu_desktop -->