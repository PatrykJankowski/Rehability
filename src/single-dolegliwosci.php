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
        'posts_per_page' => '50',
        'orderby' => 'title',
        'order' => 'ASC',
        'rewrite' => array('slug' => 'portfolio', 'with_front' => false),
    );

    $diseases = new WP_Query( $args );
?>

<?php get_header(); ?>

    <section class="section">
        <div class="container">
            <div class="row flex-col-reverse lg:flex-row">
                <div class="col-lg-3">
                    <?php if ($diseases->have_posts()): ?>
                        <?php while ($diseases->have_posts()): $diseases->the_post(); ?>
                            <a class="flex items-center font-size-20 text-black mb-5" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?><div class="circle circle--black circle--34 ml-3"></div></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col">
                        <?php while (have_posts()) : the_post(); ?>
                            <h1 class="mb-2"><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col flex justify-center sm:justify-start">
                            <div class="inline-flex flex-col sm:flex-row items-center sm:border-solid border-[1px] rounded-full border-blueLight2 md: p-6 mt-8">
                                <h4 class="inline-block sm:mr-6 mb-2 sm:mb-0">Potrzebujesz pomocy?</h4>
                                <a href="#" class="button button--arrow-right inline-flex">Umów wizytę</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>