<?php get_header(); ?>

<section class="slider">
    <div class="slideshow-container">
        <?php for ($i=1; $i<=3; $i++): ?>
            <?php $slide = get_field('slide_'.$i); ?>
            <?php if ($slide['slider_img']): ?>
                <div class="slide fade">
                    <img class="slider__img" height="650" src="<?php echo $slide['slider_img'] ?>" alt="<?php echo $slide['slider_header'] ?>">
                    <div class="container container-slider">
                        <div class="text">
                            <?php if ($slide['slider_dsc']): ?>
                            <div class="slider__dsc"><?php echo $slide['slider_dsc'] ?></div>
                            <?php endif; ?>

                            <?php if ($slide['slider_header']): ?>
                            <h1 class="slider__header"><?php echo $slide['slider_header'] ?></h1>
                            <?php endif; ?>

                            <?php if ($slide['slider_list_1']): ?>
                            <div class="flex items-center font-size-16 font-size-20-lg text-white mb-3"><span class="circle mr-2 md:mr-4"></span><?php echo $slide['slider_list_1'] ?></div>
                            <?php endif; ?>

                            <?php if ($slide['slider_list_2']): ?>
                            <div class="flex items-center font-size-16 font-size-20-lg text-white mb-3"><span class="circle mr-2 md:mr-4"></span><?php echo $slide['slider_list_2'] ?></div>
                            <?php endif; ?>

                            <?php if ($slide['slider_button']): ?>
                                <a class="button button--arrow-right button--green mt-6" href="<?php echo $slide['slider_button'] ?>" target="_blank"><?php echo $slide['slider_button_dsc'] ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        <?php endfor; ?>

        <!-- Next and previous buttons -->
        <?php if (get_field('slide_2')['slider_img']): ?>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <?php endif; ?>
    </div>

    <!-- The dots/circles -->
    <div class="dots">
        <?php if (get_field('slide_2')['slider_img']): ?>
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        <?php endif; ?>

        <?php if (get_field('slide_3')['slider_img']): ?>
            <span class="dot" onclick="currentSlide(3)"></span>
        <?php endif; ?>
    </div>
</section>

<section class="section bg-primary text-blueLight">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xxl-3 flex flex-col 2xl:flex-row items-center text-center 2xl:text-left">
                <svg class="flex 2xl:w-16 mb-2 2xl:mb-0" width="28" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 0A14.016 14.016 0 0 0 0 14c0 11.646 12.428 21 14 21 1.572 0 14-9.354 14-21A14.016 14.016 0 0 0 14 0Zm0 33.2C11.987 32.22 1.75 24.06 1.75 14a12.25 12.25 0 1 1 24.5 0c0 10.06-10.237 18.221-12.25 19.2Z" fill="#DFF6FF"/><path d="M14 7.875A6.125 6.125 0 1 0 20.125 14 6.133 6.133 0 0 0 14 7.875Zm0 10.5a4.375 4.375 0 1 1 0-8.75 4.375 4.375 0 0 1 0 8.75Z" fill="#DFF6FF"/></svg>
                Lokalizacja gabinetu na warszawskiej Białołęce
            </div>
            <div class="col-md-6 col-xxl-3 flex flex-col 2xl:flex-row items-center text-center 2xl:text-left">
                <svg class="flex 2xl:w-16 mb-2 2xl:mb-0 mt-8 md:mt-0" width="35" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 0A17.5 17.5 0 1 0 35 17.5 17.52 17.52 0 0 0 17.5 0Zm0 33.25A15.75 15.75 0 1 1 33.25 17.5 15.767 15.767 0 0 1 17.5 33.25Z" fill="#DFF6FF"/><path d="m22.941 12.578-6.389 7.986-3.683-3.683a.875.875 0 0 0-1.238 1.238l4.375 4.375a.876.876 0 0 0 1.303-.072l7-8.75a.876.876 0 1 0-1.368-1.094Z" fill="#DFF6FF"/></svg>
                Gabinet przyjmuje wyłącznie klientów prywatnych
            </div>
            <div class="col-md-6 col-xxl-3 flex flex-col 2xl:flex-row items-center text-center 2xl:text-left">
                <svg class="flex 2xl:w-16 mb-2 2xl:mb-0 mt-8 2xl:mt-0" width="35" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 0A17.5 17.5 0 1 0 35 17.5 17.52 17.52 0 0 0 17.5 0Zm.875 33.206V31.5a.875.875 0 1 0-1.75 0v1.706a15.745 15.745 0 0 1-14.83-14.831H3.5a.875.875 0 0 0 0-1.75H1.794a15.745 15.745 0 0 1 14.831-14.83V3.5a.875.875 0 0 0 1.75 0V1.794a15.744 15.744 0 0 1 14.83 14.831H31.5a.875.875 0 1 0 0 1.75h1.706a15.744 15.744 0 0 1-14.831 14.83Z" fill="#DFF6FF"/><path d="m23.379 10.536-9.467 2.784a.875.875 0 0 0-.593.593l-2.783 9.466a.874.874 0 0 0 1.085 1.085l9.466-2.784a.875.875 0 0 0 .593-.593l2.784-9.466a.873.873 0 0 0-1.085-1.085Zm-3.242 9.6-7.47 2.197 2.196-7.47 7.47-2.196-2.196 7.47Z" fill="#DFF6FF"/><path d="M18.737 18.737a1.75 1.75 0 1 0-2.474-2.474 1.75 1.75 0 0 0 2.474 2.474Z" fill="#DFF6FF"/></svg>
                Dojeżdzamy do naszych klientów na terenie Warszawy
            </div>
            <div class="col-md-6 col-xxl-3 flex flex-col 2xl:flex-row items-center text-center 2xl:text-left">
                <svg class="flex 2xl:w-16 mb-2 2xl:mb-0 mt-8 2xl:mt-0" width="39" height="35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.01 2.188h-5.325V1.093c0-.29-.112-.569-.312-.774A1.05 1.05 0 0 0 26.62 0a1.05 1.05 0 0 0-.753.32c-.2.205-.311.484-.311.774v1.093H12.778V1.095c0-.29-.112-.569-.312-.774a1.05 1.05 0 0 0-.753-.32 1.05 1.05 0 0 0-.753.32c-.2.205-.312.484-.312.774v1.093H5.324a5.26 5.26 0 0 0-3.763 1.604A5.55 5.55 0 0 0 0 7.656v21.875a5.55 5.55 0 0 0 1.561 3.866A5.26 5.26 0 0 0 5.324 35H33.01a5.26 5.26 0 0 0 3.763-1.603 5.55 5.55 0 0 0 1.561-3.866V7.656a5.551 5.551 0 0 0-1.56-3.865 5.26 5.26 0 0 0-3.764-1.603Zm3.194 27.343a3.33 3.33 0 0 1-.937 2.32 3.156 3.156 0 0 1-2.258.962H5.324a3.156 3.156 0 0 1-2.258-.963 3.33 3.33 0 0 1-.936-2.319V13.125h34.074v16.406Zm0-18.593H2.13V7.655c0-.87.337-1.704.936-2.319a3.156 3.156 0 0 1 2.258-.962h5.324v1.094c0 .29.112.568.312.773.2.205.47.32.753.32.282 0 .553-.115.753-.32.2-.205.312-.483.312-.773V4.375h12.778v1.094c0 .29.112.568.311.773.2.205.471.32.753.32.283 0 .554-.115.753-.32.2-.205.312-.483.312-.773V4.375h5.324a3.155 3.155 0 0 1 2.258.962 3.33 3.33 0 0 1 .937 2.32v3.28Z" fill="#DFF6FF"/></svg>
                Elastyczne godziny pracy, zadzwon i umów się na wizytę!
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 flex flex-col justify-center">
                <h2 class="font-size-38 mb-2">Jakie są Twoje dolegliwości?</h2>
                <h3 class="font-size-38 font-normal mb-12">Zasięgnij informacji!</h3>
            </div>
            <div class="col-lg-8 relative">
                <img src="/wp-content/themes/rehability/img/women.webp">
                <a href="#" class="d d--1"></a>
                <a href="#" class="d d--2"></a>
                <a href="#" class="d d--3"></a>
                <a href="#" class="d d--4"></a>
                <a href="#" class="d d--5"></a>
                <a href="#" class="d d--6"></a>
                <a href="#" class="d d--7"></a>
                <a href="#" class="d d--8"></a>
                <a href="#" class="d d--9"></a>
                <a href="#" class="d d--10"></a>
                <a href="#" class="d d--11"></a>
                <a href="#" class="d d--12"></a>
                <a href="#" class="d d--13"></a>
            </div>
        </div>
    </div>
</section>

<section class="section bg-primary text-blueLight">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="inline-block text-white font-size-24 22 mr-3">Nie masz pewności co Ci dolega? <span class="font-normal"> Skontaktuj się lub umów na wizytę. Pomożemy!</span></h3>
                <a href="#" class="button button--white button--arrow-right inline-flex">Umów wizytę</a>
            </div>
        </div>
    </div>
</section>

<section class="section bg-reviews">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 flex flex-col justify-center">
                <h2 class="font-size-38 mb-2">Jesteśmy wdzięczni za cieple słowa naszych klientów</h2>
                <h3 class="font-size-38 font-normal mb-12">Od lat robimy co w naszej mocy</h3>
            </div>
            <div class="col-lg-6 reviews">
                <?php echo do_shortcode('[trustindex no-registration=facebook]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="font-size-38 mb-2">Odwiedź nasz instagram!</h2>
                <h3 class="font-size-38 font-normal mb-12">Regularnie postujemy informacje oraz wskazówki dotyczące rehabilitacji</h3>
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
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
