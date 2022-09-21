<?php
/*
    Template Name: Specjaliści
    Template Post Type: specjalisci
*/
?>

<?php get_header(); ?>

<section class="pt-16 pb-16 flex items-center bg-page" style="background-color: <?php echo get_field('settings_banner_color', 2) ?>">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="font-size-38"><?php the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 mb-3">
                <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
            </div>
            <div class="col">
                <article>
                    <h2 class="mt-0 mb-3"><?php the_title() ?></h2>
                    <div class="content-section font-light">
                        <?php the_content(); ?>
                        <?php if(get_field('specjalist_appointment')): ?>
                        <div class="col flex justify-center sm:justify-start">
                            <div class="inline-flex flex-col sm:flex-row items-center w-full sm:w-auto border-solid border-[1px] rounded-full border-blueLight2 pt-4 pb-4 sm:p-6 mt-8 ">
                                <h4 class="inline-block sm:mr-6 mb-2 sm:mb-0">Potrzebujesz pomocy?</h4>
                                <a href="https://zarejestrowani.pl/p/apzdL1UGVjUgPqTNTxzJtA/" target="_blank" class="button button--arrow-right inline-flex">Umów wizytę</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </article>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="row mt-10">
            <div class="col">
                <?php
                the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Następna osoba:', 'rehability' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Następna osoba:', 'rehability' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Poprzednia osoba:', 'rehability' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Poprzednia osoba:', 'rehability' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>