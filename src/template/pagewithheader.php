<?php /* Template Name: page with header Template */ ?>

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
            <h1><?php echo the_title() ?> </h1>
        <?php endif; ?>
        <?php if ($hero_caption) : ?>
            <p><?php echo $hero_caption; ?></p>
        <?php endif; ?>
    </div>
    <!-- END uk-container -->

</section>
        <?php if (have_posts()) : ?>
            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

<?php get_footer(); ?>