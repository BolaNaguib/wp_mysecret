<?php /* Template Name: Normal Template */ ?>

<?php get_header(); ?>
<?php $hero_wallpaper = get_field('hero_wallpaper');
$hero_title = get_field('hero_title');
$hero_caption = get_field('hero_caption');
?>

<section class="section section_type-normal" style="background-image: url('<?php echo $hero_wallpaper; ?>');">
    <!-- START uk-container -->
    <div class='uk-container uk-position-relative uk-text-center'>
        <?php if ($hero_title) : ?>
            <h1><?php echo $hero_title; ?></h1>
        <?php else : ?>
            <?php echo the_title() ?>
        <?php endif; ?>
        <?php if ($hero_caption) : ?>
            <p><?php echo $hero_caption; ?></p>
        <?php endif; ?>
    </div>
    <!-- END uk-container -->

</section>
<!-- START section -->
<section class='section'>
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
</section>
<!-- END section -->

<?php get_footer(); ?>