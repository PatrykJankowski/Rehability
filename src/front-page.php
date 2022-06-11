<?php get_header(); ?>

<section class="slider">
    <div class="slideshow-container">
        <?php if (get_field('slider_img_1')): ?>
        <div class="slide fade">
            <img class="slider__img" height="650" src="<?php echo get_field('slider_img_1') ?>" alt="<?php echo get_field('slider_header_1') ?>">
            <div class="container container-slider">
                <div class="text">
                    <h1 class="slider__header"><?php echo get_field('slider_header_1') ?></h1>
                    <div class="slider__dsc"><?php echo get_field('slider_dsc_1') ?></div>
                    <?php if (get_field('slider_button_1')): ?>
                        <a class="button button--arrow-right button--white" href="<?php echo get_field('slider_button_1') ?>"><?php echo get_field('slider_button_dsc_1') ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php endif;?>

        <?php if (get_field('slider_img_2')): ?>
            <div class="slide fade">
                <img class="slider__img" height="650" src="<?php echo get_field('slider_img_2') ?>" alt="<?php echo get_field('slider_header_2') ?>">
                <img class="slider__img-mobile" src="<?php echo get_field('slider_img_mobile_2') ?>" alt="<?php echo get_field('slider_header_2') ?>">
                <div class="container container-slider">
                    <div class="text">
                        <h1 class="slider__header"><?php echo get_field('slider_header_2') ?></h1>
                        <span class="slider__dsc"><?php echo get_field('slider_dsc_2') ?></span>
                        <?php if (get_field('slider_button_2')): ?>
                            <a class="button button--arrow-right button--white" href="<?php echo get_field('slider_button_2') ?>"><?php echo get_field('slider_button_dsc_2') ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>

    <!-- The dots/circles -->
    <div class="dots">
        <?php if (get_field('slider_img_2')): ?>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        <?php endif; ?>

        <?php if (get_field('slider_img_3')): ?>
            <span class="dot" onclick="currentSlide(3)"></span>
        <?php endif; ?>
    </div>
</section>


<section class="section bg-primary text-blueLight">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 flex items-center">
                    <svg class="flex w-16" width="28" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0A14.016 14.016 0 0 0 0 14c0 11.646 12.428 21 14 21 1.572 0 14-9.354 14-21A14.016 14.016 0 0 0 14 0Zm0 33.2C11.987 32.22 1.75 24.06 1.75 14a12.25 12.25 0 1 1 24.5 0c0 10.06-10.237 18.221-12.25 19.2Z" fill="#DFF6FF"/><path d="M14 7.875A6.125 6.125 0 1 0 20.125 14 6.133 6.133 0 0 0 14 7.875Zm0 10.5a4.375 4.375 0 1 1 0-8.75 4.375 4.375 0 0 1 0 8.75Z" fill="#DFF6FF"/></svg>
                <div>Lokalizacja gabinetu na warszawskiej Białołęce</div>
            </div>
            <div class="col-xl-3 flex items-center">
                    <svg class="flex w-16" width="35" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 0A17.5 17.5 0 1 0 35 17.5 17.52 17.52 0 0 0 17.5 0Zm0 33.25A15.75 15.75 0 1 1 33.25 17.5 15.767 15.767 0 0 1 17.5 33.25Z" fill="#DFF6FF"/><path d="m22.941 12.578-6.389 7.986-3.683-3.683a.875.875 0 0 0-1.238 1.238l4.375 4.375a.876.876 0 0 0 1.303-.072l7-8.75a.876.876 0 1 0-1.368-1.094Z" fill="#DFF6FF"/></svg>
                Lokalizacja gabinetu na warszawskiej Białołęce
            </div>
            <div class="col-xl-3 flex items-center">
                    <svg class="flex w-16" width="35" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 0A17.5 17.5 0 1 0 35 17.5 17.52 17.52 0 0 0 17.5 0Zm.875 33.206V31.5a.875.875 0 1 0-1.75 0v1.706a15.745 15.745 0 0 1-14.83-14.831H3.5a.875.875 0 0 0 0-1.75H1.794a15.745 15.745 0 0 1 14.831-14.83V3.5a.875.875 0 0 0 1.75 0V1.794a15.744 15.744 0 0 1 14.83 14.831H31.5a.875.875 0 1 0 0 1.75h1.706a15.744 15.744 0 0 1-14.831 14.83Z" fill="#DFF6FF"/><path d="m23.379 10.536-9.467 2.784a.875.875 0 0 0-.593.593l-2.783 9.466a.874.874 0 0 0 1.085 1.085l9.466-2.784a.875.875 0 0 0 .593-.593l2.784-9.466a.873.873 0 0 0-1.085-1.085Zm-3.242 9.6-7.47 2.197 2.196-7.47 7.47-2.196-2.196 7.47Z" fill="#DFF6FF"/><path d="M18.737 18.737a1.75 1.75 0 1 0-2.474-2.474 1.75 1.75 0 0 0 2.474 2.474Z" fill="#DFF6FF"/></svg>
                Lokalizacja gabinetu na warszawskiej Białołęce
            </div>
            <div class="col-xl-3 flex items-center">
                <svg class="flex w-16" width="39" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.01 2.188h-5.325V1.093c0-.29-.112-.569-.312-.774A1.05 1.05 0 0 0 26.62 0a1.05 1.05 0 0 0-.753.32c-.2.205-.311.484-.311.774v1.093H12.778V1.095c0-.29-.112-.569-.312-.774a1.05 1.05 0 0 0-.753-.32 1.05 1.05 0 0 0-.753.32c-.2.205-.312.484-.312.774v1.093H5.324a5.26 5.26 0 0 0-3.763 1.604A5.55 5.55 0 0 0 0 7.656v21.875a5.55 5.55 0 0 0 1.561 3.866A5.26 5.26 0 0 0 5.324 35H33.01a5.26 5.26 0 0 0 3.763-1.603 5.55 5.55 0 0 0 1.561-3.866V7.656a5.551 5.551 0 0 0-1.56-3.865 5.26 5.26 0 0 0-3.764-1.603Zm3.194 27.343a3.33 3.33 0 0 1-.937 2.32 3.156 3.156 0 0 1-2.258.962H5.324a3.156 3.156 0 0 1-2.258-.963 3.33 3.33 0 0 1-.936-2.319V13.125h34.074v16.406Zm0-18.593H2.13V7.655c0-.87.337-1.704.936-2.319a3.156 3.156 0 0 1 2.258-.962h5.324v1.094c0 .29.112.568.312.773.2.205.47.32.753.32.282 0 .553-.115.753-.32.2-.205.312-.483.312-.773V4.375h12.778v1.094c0 .29.112.568.311.773.2.205.471.32.753.32.283 0 .554-.115.753-.32.2-.205.312-.483.312-.773V4.375h5.324a3.155 3.155 0 0 1 2.258.962 3.33 3.33 0 0 1 .937 2.32v3.28Z" fill="#DFF6FF"/></svg>
                Lokalizacja gabinetu na warszawskiej Białołęce
            </div>
        </div>
    </div>

</section>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("slide");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "flex";
        dots[slideIndex-1].className += " active";
    }
</script>

<?php get_footer(); ?>
