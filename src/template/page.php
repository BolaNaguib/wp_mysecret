<?php get_header(); ?>


<!-- START uk-container -->
<div class='uk-container'>
    <?php if (have_posts()) : ?>
        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>
<!-- END uk-container -->


<?php get_footer(); ?>