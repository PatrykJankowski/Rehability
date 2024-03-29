</main>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-20 mb-0-lg">
                <div class="font-size-22 text-white italic leading-6"><?php echo get_field('footer_description', 2) ?></div>

                <h4 class="font-size-22 text-white italic mt-2 mb-6"><?php echo get_field('footer_contact_header', 2) ?></h4>

                <div class="flex items-center mb-3">
                    <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m24.5 19.223-.75-.019v.019h.75Zm0 3.161h-.75v.003l.75-.003ZM5.61 3.5v-.75h-.001v.75Zm3.167 0v.75h.007l-.007-.75Zm1.398.51-.489.569.489-.57Zm-.363 7.826-.53-.531a.75.75 0 0 0-.122.902l.652-.371Zm6.335 6.322-.37.653a.75.75 0 0 0 .9-.122l-.53-.53Zm7.852-.35.572-.485-.572.485ZM11.717 9.455l.733.157-.733-.157Zm6.816 6.803.156.733-.156-.733Zm3.665 8.234.067-.747a.77.77 0 0 0-.068-.003v.75ZM3.508 5.797l.75.001a.75.75 0 0 0-.003-.068l-.747.067ZM23.75 19.223v3.161h1.5v-3.161h-1.5ZM5.61 4.25h3.168v-1.5H5.61v1.5Zm3.175 0c.331-.003.652.114.902.329l.977-1.138a2.864 2.864 0 0 0-1.893-.69l.014 1.5Zm.376 7.957a17.627 17.627 0 0 0 6.617 6.604l.74-1.305a16.128 16.128 0 0 1-6.053-6.042l-1.304.743Zm14.268 6.086c.215.255.33.579.322.911l1.5.037a2.855 2.855 0 0 0-.679-1.918l-1.143.97ZM9.686 4.58c.162.139.36.411.558.825.192.402.36.886.493 1.393.272 1.049.346 2.035.246 2.501l1.467.314c.174-.813.029-2.076-.262-3.193a9.397 9.397 0 0 0-.591-1.662c-.237-.496-.543-.981-.934-1.316l-.977 1.138ZM18.69 16.99c.468-.1 1.462-.026 2.516.248.509.132.995.302 1.398.495.416.2.687.397.825.56l1.143-.971c-.335-.395-.822-.703-1.32-.941a9.393 9.393 0 0 0-1.67-.595c-1.121-.291-2.39-.437-3.204-.263l.312 1.467Zm-2.012 1.698c.186-.186.373-.393.544-.579.177-.193.343-.371.514-.532.349-.328.652-.523.954-.587l-.313-1.467c-.699.149-1.246.563-1.669.962a11.6 11.6 0 0 0-.592.61c-.184.202-.341.376-.498.532l1.06 1.061ZM10.983 9.3c-.064.3-.258.602-.587.95-.162.17-.34.337-.534.513-.186.17-.394.357-.58.543l1.06 1.062c.156-.156.33-.313.532-.497.195-.178.41-.377.612-.591.399-.422.815-.968.964-1.667l-1.467-.314Zm11.214 14.443C12.083 23.75 4.25 15.845 4.258 5.798l-1.5-.001c-.008 10.872 8.493 19.453 19.44 19.445l-.001-1.5Zm1.552-1.355c.003.768-.706 1.428-1.484 1.358l-.135 1.494c1.662.15 3.126-1.21 3.12-2.858l-1.5.006ZM4.255 5.73c-.07-.77.584-1.48 1.355-1.48l-.001-1.5C3.966 2.752 2.61 4.208 2.76 5.865l1.494-.135Z" fill="#fff"/></svg>
                    <span class="ml-3 text-white font-size-16 font-bold"><?php echo get_field('contact_phone', 2) ?></span>
                </div>
                <div class="flex items-center mb-3">
                    <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m12.35 14.683.53-.53-.53.53Zm3.3 0-.53-.53.53.53Zm-10.983-8.1h18.666v-1.5H4.667v1.5ZM23.75 7v14h1.5V7h-1.5Zm-.417 14.417H4.667v1.5h18.666v-1.5ZM4.25 21V7h-1.5v14h1.5Zm.417.417A.417.417 0 0 1 4.25 21h-1.5c0 1.058.858 1.917 1.917 1.917v-1.5ZM23.75 21c0 .23-.186.417-.417.417v1.5A1.917 1.917 0 0 0 25.25 21h-1.5ZM4.667 5.083c-.53 0-1.01.216-1.356.562l1.061 1.06a.413.413 0 0 1 .295-.122v-1.5Zm-1.356.562A1.913 1.913 0 0 0 2.75 7h1.5c0-.115.046-.218.122-.295l-1.06-1.06Zm20.022.938c.116 0 .219.046.295.122l1.06-1.06a1.913 1.913 0 0 0-1.355-.562v1.5Zm.295.122c.076.077.122.18.122.295h1.5c0-.53-.215-1.01-.561-1.355l-1.061 1.06ZM11.82 15.214a3.083 3.083 0 0 0 4.36 0l-1.06-1.061a1.583 1.583 0 0 1-2.24 0l-1.06 1.06ZM3.31 6.705l8.509 8.509 1.06-1.061-8.508-8.508-1.06 1.06Zm12.87 8.509 8.508-8.509-1.061-1.06-8.508 8.508 1.06 1.06Z" fill="#fff"/></svg>
                    <a href="mailto:<?php echo get_field('contact_email', 2) ?>" class="block ml-3 text-white font-size-16 font-bold"><?php echo get_field('contact_email', 2) ?></a>
                </div>
                <div class="flex items-center mb-3">
                    <svg width="28" height="28" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m14 24.5-.31.683a.75.75 0 0 0 .62 0L14 24.5Zm2.75-11.667a2.75 2.75 0 0 1-2.75 2.75v1.5a4.25 4.25 0 0 0 4.25-4.25h-1.5ZM14 15.583a2.75 2.75 0 0 1-2.75-2.75h-1.5a4.25 4.25 0 0 0 4.25 4.25v-1.5Zm-2.75-2.75a2.75 2.75 0 0 1 2.75-2.75v-1.5a4.25 4.25 0 0 0-4.25 4.25h1.5Zm2.75-2.75a2.75 2.75 0 0 1 2.75 2.75h1.5A4.25 4.25 0 0 0 14 8.583v1.5Zm8.583 2.75c0 4.719-3.847 8.7-8.892 10.984l.618 1.366c5.264-2.383 9.774-6.759 9.774-12.35h-1.5ZM14.31 23.817c-5.045-2.284-8.892-6.265-8.892-10.984h-1.5c0 5.591 4.51 9.967 9.774 12.35l.618-1.366ZM5.417 12.833A8.583 8.583 0 0 1 14 4.25v-1.5c-5.569 0-10.083 4.514-10.083 10.083h1.5ZM14 4.25a8.583 8.583 0 0 1 8.583 8.583h1.5C24.083 7.264 19.57 2.75 14 2.75v1.5Z" fill="#fff"/></svg>
                    <span class="ml-3 text-white font-size-16 font-bold"><?php echo get_field('contact_street', 2) ?>, <?php echo get_field('contact_city', 2) ?>
                </div>
                <div class="mt-6 space-x-5">
                    <a href="<?php echo get_field('settings_social_zl_url', 2) ?>" target="_blank">
                        <svg width="36" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M33.284 8.997c.198-.04.278.08.343.284a599.2 599.2 0 0 0 1.95 6.008c.108.325-.047.36-.286.41a33.189 33.189 0 0 0-11.838 4.953 33.986 33.986 0 0 0-11.408 12.7c-.008.016-.014.034-.021.05-.363.693-.359.687-1.027.257-2.182-1.408-4.361-2.817-6.553-4.205-.38-.24-.493-.404-.239-.854 4.11-7.247 9.89-12.695 17.425-16.268 3.623-1.717 7.44-2.78 11.405-3.318.075-.009.148-.01.249-.017ZM22.096 10.036c.143.444-.138.558-.477.672-3.899 1.307-7.574 3.063-10.873 5.55a26.65 26.65 0 0 0-2.697 2.334c-.203.2-.358.269-.65.143A527.665 527.665 0 0 0 .433 15.8c-.453-.186-.51-.381-.357-.828.626-1.841 1.218-3.689 1.796-5.544.127-.405.285-.468.693-.37 3.406.823 6.823 1.612 10.229 2.426.416.1.55.07.587-.425.26-3.448.563-6.892.854-10.339.062-.71.062-.71.793-.71 1.913 0 3.825.01 5.741-.009.362 0 .498.083.527.46.101 1.365.246 2.726.361 4.09.15 1.83.29 3.661.439 5.486Z" fill="#fff"/><path d="M30.907 29.936c-.02.17-.142.224-.242.297-1.675 1.218-3.358 2.43-5.02 3.662-.326.24-.446.017-.606-.168-1.68-1.95-3.353-3.912-5.044-5.855-.23-.265-.239-.465-.09-.759a15.847 15.847 0 0 1 2.158-3.157 16.406 16.406 0 0 1 3.073-2.787c.285-.196.408-.155.578.128 1.678 2.794 3.362 5.584 5.053 8.37.056.095.102.192.14.27Z" fill="#fff"/></svg>
                    </a>
                    <a href="<?php echo get_field('settings_social_instagram_url', 2) ?>" target="_blank">
                        <svg width="35" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M27.068 33.982 8.188 34C4.037 34.004.635 30.61.63 26.456L.612 7.577C.608 3.424 4.002.023 8.156.017L27.035 0c4.153-.004 7.554 3.39 7.559 7.544l.018 18.879c.005 4.154-3.39 7.555-7.544 7.56Z" fill="#fff"/><path d="M17.612 23.608a6.615 6.615 0 0 1-6.608-6.607 6.615 6.615 0 0 1 6.608-6.608 6.615 6.615 0 0 1 6.608 6.608 6.615 6.615 0 0 1-6.608 6.607Zm0-11.327a4.725 4.725 0 0 0-4.72 4.72 4.725 4.725 0 0 0 4.72 4.72 4.725 4.725 0 0 0 4.72-4.72 4.725 4.725 0 0 0-4.72-4.72ZM24.691 11.337a1.416 1.416 0 1 0 0-2.832 1.416 1.416 0 0 0 0 2.832Z" fill="#1171B8"/><path d="M23.276 29.272H11.948a6.615 6.615 0 0 1-6.607-6.608V11.337a6.615 6.615 0 0 1 6.607-6.608h11.328a6.616 6.616 0 0 1 6.607 6.608v11.327a6.616 6.616 0 0 1-6.607 6.608ZM11.948 6.617a4.725 4.725 0 0 0-4.72 4.72v11.327a4.725 4.725 0 0 0 4.72 4.72h11.328a4.725 4.725 0 0 0 4.72-4.72V11.337a4.725 4.725 0 0 0-4.72-4.72H11.948Z" fill="#1171B8"/></svg>
                    </a>
                    <a href="<?php echo get_field('settings_social_fb_url', 2) ?>" target="_blank">
                        <svg width="35" height="34" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.612 0c-9.39 0-17 7.61-17 17s7.61 17 17 17c9.389 0 17-7.61 17-17S27 0 17.612 0Z" fill="#fff"/><path d="M19.913 21.506h4.4l.69-4.47h-5.09v-2.442c0-1.857.607-3.503 2.343-3.503h2.79v-3.9c-.49-.066-1.527-.21-3.486-.21-4.092 0-6.49 2.16-6.49 7.083v2.973h-4.207v4.47h4.206V33.79c.833.124 1.677.209 2.543.209.783 0 1.547-.071 2.3-.173V21.506Z" fill="#1171B8"/></svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-2 mb-20 mb-0-lg">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu-footer', 'container' => false)); ?>
            </div>
            <div class="col-lg-5 text-white">
                <h2 class="mb-6 font-size-22 font-size-30-lg"><?php echo get_field('footer_newsletter_header', 2) ?></h2>
                <?php echo do_shortcode('[mc4wp_form id="72"]'); ?>
            </div>
        </div>
        <div class="row mt-70">
            <div class="col">
                <div class="footer__copyright">Rehability 2022. Wszystkie prawa zastrzeżone. Wykonanie: <a href="https://softcraft.pl" target="_blank">Softcraft.pl.</a></div>
            </div>
        </div>
    </div>
</footer>

<script>
    // mobile menu
    let navOpened = false;

    function slideToggle() {
        let navMobile = document.getElementById('navbar__nav-mobile');

        if (navOpened) {
            navOpened = false;
            navMobile.style.height = '0';
            document.getElementById('navbar__toggle').classList.remove('navbar__toggle--open');
            document.getElementById('header').classList.remove('navbar--bg-on-toggle');
        } else {
            navOpened = true;
            navMobile.style.height = '100vh';
            document.getElementById('navbar__toggle').classList.add('navbar__toggle--open');
            document.getElementById('header').classList.add('navbar--bg-on-toggle');
        }
    }
</script>

<?php wp_footer(); ?>

</body>
</html>
