<?php /* Template Name: Zespół */ ?>

<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'specjalisci',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => 50
    );
?>

<?php $specialists = new WP_Query($args); ?>

<section class="section flex items-center bg-page" style="background-color: <?php echo get_field('settings_banner_color', 2) ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38">
                    <?php if(get_field('team_header')): ?>
                        <?php echo get_field('team_header') ?>
                    <?php else: ?>
                        <?php the_title() ?>
                    <?php endif; ?>
                </h1>
                <?php if(get_field('team_subheader')): ?>
                    <p class="font-size-24 font-light"><?php echo get_field('team_subheader') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <h2 class="mt-6 mb-6">Poznaj nas</h2>
            <?php if ($specialists->have_posts()): ?>
                <?php while ($specialists->have_posts()): $specialists->the_post(); ?>
                    <div class="col-lg-3 mb-12">
                        <article class="font-size-16 flex flex-col h-[100%]">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="flex h-80"><?php the_post_thumbnail(); ?></div>
                            <?php endif; ?>
                            <h4 class="mt-2 mb-1 font-size-24"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="font-bold text-black"><?php the_title(); ?></a></h4>
                            <div class="font-size-18 font-light text-black flex-1">
                                <?php echo wp_trim_words(wp_strip_all_tags(apply_filters('the_content', $specialists->post->post_content)), 30, '...'); ?>
                            </div>
                            <a class="inline-flex items-center text-black font-light italic mt-2" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Czytaj <div class="circle circle--black circle--34 ml-3"></div></a>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
