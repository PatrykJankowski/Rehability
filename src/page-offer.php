<?php /* Template Name: Oferta */ ?>

<?php get_header(); ?>


<section class="section flex items-center bg-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-3 font-size-38">
                    <?php if(get_field('offer_header')): ?>
                        <?php echo get_field('offer_header') ?>
                    <?php else: ?>
                        <?php the_title() ?>
                    <?php endif; ?>
                </h1>
                <?php if(get_field('offer_subheader')): ?>
                    <p class="font-size-24"><?php echo get_field('offer_subheader') ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <?php $myterms = get_terms('kategorie_ofert', 'orderby=none&hide_empty'); ?>

        <?php foreach ($myterms as $term): ?>

        <h3 class="font-size-38 mb-12"><?php echo $term->name; ?></h3>

            <?php
                $args = array(
                    'post_type' => 'oferty',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategorie_ofert',
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
                    <div class="col-lg-4 mb-12">
                        <article class="font-size-16 flex flex-col h-[100%]">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="flex h-80"><?php the_post_thumbnail(); ?></div>
                            <?php endif; ?>
                            <h4 class="mt-6 mb-6 font-size-24"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="font-bold text-black"><?php the_title(); ?></a></h4>
                            <div class="font-size-18 text-black flex-1">
                                <?php echo wp_trim_words(wp_strip_all_tags(apply_filters('the_content', $specialists->post->post_content)), 30, '...'); ?>
                            </div>
                            <a class="inline-flex items-center text-black italic mt-3" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Zobacz ofertę <div class="circle circle--black circle--34 ml-3"></div></a>
                        </article>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>

        <?php endforeach; ?>

    </div>
</section>


<?php get_footer(); ?>
