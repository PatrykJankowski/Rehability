<?php get_header(); ?>

<section class="pt-16 pb-16 flex items-center bg-page" style="background-color: <?php echo get_field('settings_banner_color', 2) ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="font-size-38">Artykuły</h1>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col col-xxl-9">
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <div class="flex flex-col lg:flex-row">
                        <div class="flex flex-col justify-center flex-1">
                            <time class="block text-greyDark mb-2 "><?php echo apply_filters('the_date', get_the_date()); ?></time>
                            <h2 class="mb-3"><?php the_title() ?></h2>
                        </div>
                        <div class="flex flex-1 mb-3">
                            <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
                        </div>
                    </div>
                    <div class="font-light"><?php the_content(); ?></div>
                </article>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col">
                <?php
                the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Następny artykuł:', 'rehability' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Następny artykuł:', 'rehability' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Poprzedni artykuł:', 'rehability' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Poprzedni artykuł:', 'rehability' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>