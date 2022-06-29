<?php
/*
    Template Name: Dolegliwość
    Template Post Type: dolegliwosci
*/
?>

<?php
    $args = array(
        'post_type' => 'dolegliwosci',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
    );

    $diseases = new WP_Query( $args );
?>

<?php get_header(); ?>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <?php if ($diseases->have_posts()): ?>
                        <?php while ($diseases->have_posts()): $diseases->the_post(); ?>
                            <a class="block font-size-20 text-black mb-5" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-xl-9">
                    <?php while (have_posts()) : the_post(); ?>
                        <h1 class="mb-2"><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>