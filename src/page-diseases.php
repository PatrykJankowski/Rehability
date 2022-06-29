<?php /* Template Name: Dolegliwości */ ?>

<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'dolegliwosci',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
    );
?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <?php $diseases = new WP_Query($args); ?>
                <?php if ($diseases->have_posts()): ?>
                    <?php while ($diseases->have_posts()): $diseases->the_post(); ?>
                        <a class="block font-size-20 text-black mb-5" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>

            <div class="col-xl-9">
                <?php $disease = new WP_Query($args + array('posts_per_page' => 1)); ?>
                <?php if ($disease->have_posts()): ?>
                    <?php while ($disease->have_posts()): $disease->the_post(); ?>
                        <h1 class="mb-2"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
