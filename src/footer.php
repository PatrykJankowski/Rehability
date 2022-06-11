</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-70 mb-20-lg text-align-center-lg">

                <div><?php echo get_field('contact_phone', 12) ?></div>
                <a href="mailto:<?php echo get_field('contact_email', 12) ?>" class="color-white text-underline"><?php echo get_field('contact_email', 12) ?></a>

                <div><?php echo get_field('contact_company', 12) ?></div>
                <div><?php echo get_field('contact_street', 12) ?></div>
                <div><?php echo get_field('contact_city', 12) ?></div>
            </div>
            <div class="col-lg-6 color-white font-weight-700 font-size-20 text-align-center-lg">

            </div>
            <div class="col">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu-footer', 'container' => false)); ?>
            </div>
        </div>
        <div class="row mt-70">
            <div class="col">
                <div class="footer__copyright">Rehability ©Copyright 2022</div>
            </div>
        </div>
    </div>
</footer>

<script>
    // mobile menu
    let navOpened = false;
    let initHeight = 360;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
            document.getElementById('header').classList.remove('navbar--bg-on-toggle');
        } else {
            navOpened = true;
            navMobile.style.height = initHeight + 'px';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
            document.getElementById('header').classList.add('navbar--bg-on-toggle');
        }
    }


    // navbar bg change on scroll
    let scrollpos = window.scrollY
    const header = document.querySelector(".navbar")
    const header_height = header.offsetHeight

    const add_class_on_scroll = () => header.classList.add("navbar--bg")
    const remove_class_on_scroll = () => header.classList.remove("navbar--bg")

    window.addEventListener('scroll', function() {
        scrollpos = window.scrollY;
        if (scrollpos >= header_height) { add_class_on_scroll() }
        else { remove_class_on_scroll() }
    })
</script>

<?php wp_footer(); ?>

</body>
</html>
