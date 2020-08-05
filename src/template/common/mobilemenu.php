<!-- START mobilemenu -->
<div class='mobilemenu uk-hidden@m '>
    <!-- START uk-container -->
    <div class='uk-container boundary-align'>
        <nav uk-navbar style="    padding: 20px 0px;">

            <div class="uk-navbar-left">
                <a href="/">
                    <a class="nav__link" href="<?php the_permalink($post); ?>">
                        My Secret</a>
                    <!-- <img loading="lazy" style="max-height:50px" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>"> -->
                </a>

            </div>

            <div class="uk-navbar-right">
                <ul class="uk-margin-remove">
                    <button class="mobilemenu">
                        <svg width="20px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-bars fa-w-14">
                            <path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z" class=""></path>
                        </svg>
                        <div style="display:none; box-shadow:none;" uk-dropdown="mode:click;pos: bottom-justify; boundary: .boundary-align; boundary-align: true; delay-hide: 0">
                            <!-- START mobilecontainer -->
                            <div class='mobilecontainer uk-text-left'>
                                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                                    <?php if (have_rows('main_menu', 'options')) : ?>
                                        <?php while (have_rows('main_menu', 'options')) : the_row();
                                            //ACF Fields  
                                            $postz = get_sub_field('main_menu_page');
                                            $main_menu_title = get_sub_field('main_menu_title');
                                            if ($postz) : ?>

                                                <?php setup_postdata($postz); ?>


                                                <li <?php if (have_rows('sub_menu', 'options')) : ?> class="uk-parent" <?php endif; ?>>
                                                    <a class="nav__link_type-mobile" href="<?php the_permalink($postz); ?>">
                                                        <?php echo $main_menu_title  ?>
                                                    </a>
                                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly  
                                                    ?>

                                                    <?php if (have_rows('sub_menu', 'options')) : ?>
                                                        <ul class="uk-nav-sub">
                                                            <li>
                                                                <a class="nav__link_type-mobile" href="<?php the_permalink($postz); ?>">
                                                                    <?php echo $main_menu_title  ?>
                                                                </a>
                                                            </li>
                                                            <?php while (have_rows('sub_menu', 'options')) : the_row();
                                                                //ACF Fields
                                                                $block_title = get_sub_field('block_title');
                                                                //ACF Fields
                                                                $term = get_sub_field('category');
                                                            ?>
                                                                <?php if ($block_title) : ?>
                                                                    <h5><?php echo $block_title ?></h5>
                                                                <?php endif; ?>

                                                                <li>
                                                                    <a class="nav__link-mobile-sub" href="<?php echo esc_url(get_term_link($term)); ?>"> <?php echo esc_html($term->name); ?>

                                                                        <?php if (have_rows('sub_sub_menu', 'options')) : ?>
                                                                            <ul class="uk-nav-sub">

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
                                                                            </ul>
                                                                        <?php endif; ?>
                                                                    </a>

                                                                </li>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>


                                            <?php endif; ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </ul>
                            </div>
                            <!-- END mobilecontainer -->
                        </div>
                    </button>
                </ul>
            </div>

        </nav>
    </div>
    <!-- END uk-container -->
</div>
<!-- END mobilemenu -->