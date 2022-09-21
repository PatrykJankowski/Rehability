<?php get_header(); ?>

<section class="section flex items-center bg-page" style="background-color: <?php echo get_field('settings_banner_color', 2) ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38"><?php the_title() ?></h1>
                <?php if(get_field('blog_subheader')): ?>
                    <p class="font-size-24 font-light"><?php echo get_field('blog_subheader') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php while (have_posts()) : the_post(); ?>
                <div class="font-light"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


