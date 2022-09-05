<?php /* Template Name: Cennik */ ?>

<?php get_header(); ?>


<section class="section flex items-center bg-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38">
                    <?php if(get_field('pricelist_header')): ?>
                        <?php echo get_field('pricelsit_header') ?>
                    <?php else: ?>
                        <?php the_title() ?>
                    <?php endif; ?>
                </h1>
                <?php if(get_field('pricelist_subheader')): ?>
                    <p class="font-size-24 font-light"><?php echo get_field('pricelist_subheader') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <?php $myterms = get_terms('kategorie_cennika', 'orderby=none&hide_empty'); ?>

        <div class="row">

        <?php foreach ($myterms as $term): ?>

            <div class="col-lg-5 mb-8">
                <h3 class="font-size-30 mb-6"><?php echo $term->name; ?></h3>

                <?php
                $args = array(
                    'post_type' => 'cennik',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategorie_cennika',
                            'field' => 'slug',
                            'terms' => $term->slug,
                        )
                    )
                );

                $specialists = new WP_Query($args);
                ?>

                <div class="row">
                    <?php if ($specialists->have_posts()): ?>
                        <?php while ($specialists->have_posts()): $specialists->the_post(); ?>
                            <div class="col-12 mb-3">
                                <article class="font-size-16 flex flex-col h-[100%]">
                                    <h4 class="mt-3 mb-3 font-size-18"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="font-bold text-black"><?php the_title(); ?></a></h4>
                                    <div class="font-size-18 text-black font-light flex pb-1 border-solid border-0 border-b-[1px] border-black">
                                        <div class="flex-1"><?php echo get_field('pricelist_time') ?></div>
                                        <div><?php echo get_field('pricelist_price') ?></div>
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-lg-1"></div>

        <?php endforeach; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>
