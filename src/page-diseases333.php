<?php /* Template Name: Dolegliwości333 */ ?>

<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3">
                <?php
                $categories = get_terms( 'dolegliwosc', array('hide_empty' => true) );
                foreach($categories as $category) {
                    echo '<a class="block font-size-20 text-black mb-5" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                }
                ?>
            </div>
            <div class="col-xl-9">
                <?php

                $category = get_queried_object();
                $current_category_arg =  $category->name;
                //$current_category_arg = 'bol-glowy';


                $diseases = new WP_Query( array(
                    'post_type' => 'diseases_cp',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'dolegliwosc',
                            'field' => 'slug',
                            'terms' => $current_category_arg,
                        )
                    ),
                ));



                if ( $diseases->have_posts() ) :
                    while ( $diseases->have_posts() ) : $diseases->the_post();

                        the_content();

                    endwhile;
                endif;

                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
