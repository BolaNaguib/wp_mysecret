<?php /* Template Name: Normal Template */ ?> <?php get_header(); ?> <?php $hero_wallpaper = get_field('hero_wallpaper'); ?> <section class="section section_type-normal" style="background-image: url('<?php echo $hero_wallpaper; ?>');"><!-- START uk-container --><div class="uk-container uk-position-relative"><h1><?php the_title() ?></h1></div><!-- END uk-container --></section><!-- START uk-container --><div class="uk-container"> <?php if (have_posts()) : ?> <?php /* Start the Loop */ ?> <?php while (have_posts()) : the_post(); ?> <?php the_content(); ?> <?php endwhile; ?> <?php else : ?> <?php endif; ?> </div><!-- END uk-container --> <?php get_footer(); ?>