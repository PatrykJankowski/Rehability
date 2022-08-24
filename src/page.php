<?php get_header(); ?>

<section class="section flex items-center bg-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38"><?php the_title() ?></h1>
                <?php if(get_field('blog_subheader')): ?>
                    <p class="font-size-24"><?php echo get_field('blog_subheader') ?></p>
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
                    <?php the_content(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>


