<!-- START mainmenu_desktop -->
<div class='mainmenu_desktop uk-visible@m'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START mainmenua_navbar -->
        <div class='mainmenua_navbar  '>
            <nav uk-navbar>
                <div class="uk-navbar-left">
                    <a href="/">

                        <a class="nav__link" href="<?php the_permalink($post); ?>">
                            My Secret</a>
                        <!-- <img loading="lazy" style="max-height:110px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>"> -->
                    </a>
                </div>
                <div class="uk-navbar-center">

                    <ul class="uk-navbar-nav">
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
                                                                        <a class="nav__link-submenu" href="<?php echo esc_url(get_term_link($term)); ?>"> <?php echo esc_html($term->name); ?>

                                                                        </a>
                                                                    <?php endif; ?>
                                                                    <!-- START card_type-submenulink -->
                                                                    <div class="dropdown-controller" style="display:none;     margin-left: 0px;" uk-dropdown="pos: right-top; animation: uk-animation-slide-bottom-medium; duration:500;delay-hide: 0">
                                                                        <!-- START card_type-submenulink -->
                                                                        <div class='card_type-submenulink'>

                                                                            <ul class="uk-list">
                                                                                <?php if (have_rows('sub_sub_menu', 'options')) : ?>

                                                                                    <?php while (have_rows('sub_sub_menu', 'options')) : the_row(); ?>

                                                                                        <?php
                                                                                        $subcat = get_sub_field('sub_category');
                                                                                        if ($subcat) : ?>

                                                                                            <li>
                                                                                                <small>
                                                                                                    <a class="nav__link-submenu" href="<?php echo esc_url(get_term_link($subcat)); ?>"> <?php echo esc_html($subcat->name); ?>

                                                                                                </small></li>
                                                                                        <?php endif; ?>

                                                                                    <?php endwhile; ?>

                                                                                <?php endif; ?>

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