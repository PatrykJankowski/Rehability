<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>

<section class="section relative overflow-x-clip">
    <div class="container">
        <h1 class="font-size-36 font-size-50-lg color-primary">Kontakt</h1>
    </div>
    <div class="square hide-max-lg" style="right: 44px; top: 202px;"></div>
    <div class="square hide-max-lg" style="right: -44px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 220px; top: 290px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 378px;"></div>
    <div class="square hide-max-lg" style="right: 44px; top: 466px;"></div>
    <div class="square hide-max-lg" style="right: 132px; top: 554px;"></div>
</section>

<section class="section pb-0 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex flex-column align-items-center-lg text-align-center-lg">
                    <h4 class="font-size-24 font-size-24-lg color-primary mb-20"><?php echo get_field('s5_header-2', 32) ?></h4>
                    <p class="font-size-18 mt-20 mb-20"><?php echo get_field('s5_text-1', 32) ?></p>
                    <p class="font-size-18 mt-20"><?php echo get_field('s5_text-2', 32) ?> <a href="<?php echo get_field('s5_help-link', 32) ?>" class="color-primary text-underline"><?php echo get_field('s5_help-link-text', 32) ?></a></p>
                </div>
                <div class="row">
                    <div class="col-lg-6 font-size-18">
                        <div class="font-weight-700 mt-70 mb-20">Dane firmy:</div>
                        <div><?php echo get_field('contact_company') ?></div>
                        <div><?php echo get_field('contact_street') ?></div>
                        <div><?php echo get_field('contact_city') ?></div>
                        <div>NIP: <?php echo get_field('contact_nip') ?></div>
                    </div>
                    <div class="col-lg-6 font-size-18">
                        <div class="font-weight-700 mt-70 mb-20">Dane kontaktowe:</div>
                        <div><?php echo get_field('contact_phone') ?></div>
                        <a href="mailto:<?php echo get_field('contact_email', 12) ?>" class="color-black text-underline"><?php echo get_field('contact_email', 12) ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-70 mt-0-lg">
                <?php echo do_shortcode('[contact-form-7 id="18" title="Kontakt"]'); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
