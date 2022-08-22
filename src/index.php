<?php get_header(); ?>

<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'pagination' => true,
        'paged' => (get_query_var('paged') ? get_query_var('paged') : 1),
        'posts_per_page' => 12
    );
?>
<?php $posts = new WP_Query($args); ?>

<section class="section flex items-center bg-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38"><?php single_post_title(); ?></h1>
                <?php if(get_field('blog_subheader')): ?>
                    <p class="font-size-24"><?php echo get_field('blog_subheader') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <?php if ($posts->have_posts()): ?>
                <?php while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="col-lg-3 col-xxl-2 mb-12">
                    <article class="font-size-16 flex flex-col h-[100%]">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="flex"><?php the_post_thumbnail(); ?></div>
                        <?php endif; ?>
                        <time class="block text-greyDark mt-2"><?php echo apply_filters('the_date', get_the_date()); ?></time>
                        <h4 class="mt-2 mb-1"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="font-bold text-black"><?php the_title(); ?></a></h4>
                        <div class="text-black flex-1">
                            <?php echo wp_trim_words(wp_strip_all_tags(apply_filters('the_content', $posts->post->post_content)), 30, '...'); ?>
                        </div>
                        <a class="inline-flex items-center text-black italic mt-2" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Czytaj <div class="circle circle--black circle--34 ml-3"></div></a>
                    </article>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

            <?php
                // manage pagination based on custom query
                $GLOBALS['wp_query']->max_num_pages = $posts->max_num_pages;
                the_posts_pagination(array(
                    'mid_size' => 1,
                    'prev_text' => __( '‹', 'textdomain' ),
                    'next_text' => __( '›', 'textdomain' )
                ));
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
