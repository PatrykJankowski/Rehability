<?php
/*
    Template Name: Szczegóły oferty
    Template Post Type: oferty
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

    <section class="section content-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <?php while (have_posts()) : the_post(); ?>
                        <article>
                            <h2><?php the_title() ?></h2>
                            <div class="font-light"><?php the_content(); ?></div>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div class="col-lg-5">
                    <div class="inline-flex flex-col sm:flex-row items-center w-full sm:w-auto border-solid border-[1px] rounded-full border-blueLight2 pt-4 pb-4 sm:p-6 mt-8 ">
                        <h4 class="inline-block sm:mr-6 mb-2 sm:mb-0">Potrzebujesz pomocy?</h4>
                        <a href="<?php echo get_field('settings_reservation', 2) ?>" target="_blank" class="button button--arrow-right inline-flex">Umów wizytę</a>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                <div class="col">
                    <?php
                    the_post_navigation( array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Następna usługa:', 'rehability' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Następna usługa:', 'rehability' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Poprzednia usługa:', 'rehability' ) . '</span> ' .
                            '<span class="screen-reader-text">' . __( 'Poprzednia usługa:', 'rehability' ) . '</span> ' .
                            '<span class="post-title">%title</span>',
                    ) ); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>