<?php get_header(); ?>

<section class="pt-16 pb-16 flex items-center bg-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="font-size-38"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php while (have_posts()) : the_post(); ?>
                <article>
                    <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
                    <time class="block text-greyDark mt-3 mb-3 "><?php echo apply_filters('the_date', get_the_date()); ?></time>
                    <h2 class="mb-3"><?php the_title() ?></h2>
                    <?php the_content(); ?>
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