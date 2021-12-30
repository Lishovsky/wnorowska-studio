<?php get_header(); ?>

<main>
    <section class="white" id="sectionOne">
        <div class="container">
            <div class="half">
                <div class="global_image">
                    <img id="sectionOne_image_first" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.webp" alt="Justyna Wnorowska">
                </div>
            </div>
            <div class="half">
                <div class="global_image">
                    <img id="sectionOne_image_last" src="<?php echo get_template_directory_uri(); ?>/assets/icons/logo.svg" alt="logo">
                </div>
            </div>
        </div>
    </section>

    <section class="creme" id="gallery">
        <h2>Galeria</h2>
        <figure class="wp-block-gallery columns-5 is-cropped">
            <ul class="blocks-gallery-grid">
                <li class="blocks-gallery-item">
                    <figure><img src="https://wnorowskastudio.pl/wp-content/uploads/2021/12/5g.jpg" alt="" data-id="272" data-full-url="https://wnorowskastudio.pl/wp-content/uploads/2021/12/5g.jpg" data-link="https://wnorowskastudio.pl/5g/" class="wp-image-272" /></figure>
                </li>
                <li class="blocks-gallery-item">
                    <figure><img src="https://wnorowskastudio.pl/wp-content/uploads/2021/12/2g-1.webp" alt="" data-id="269" data-full-url="https://wnorowskastudio.pl/wp-content/uploads/2021/12/2g-1.webp" data-link="https://wnorowskastudio.pl/2g-1/" class="wp-image-269" /></figure>
                </li>
                <li class="blocks-gallery-item">
                    <figure><img src="https://wnorowskastudio.pl/wp-content/uploads/2021/12/4g-1.webp" alt="" data-id="268" data-full-url="https://wnorowskastudio.pl/wp-content/uploads/2021/12/4g-1.webp" data-link="https://wnorowskastudio.pl/4g-1/" class="wp-image-268" /></figure>
                </li>
                <li class="blocks-gallery-item">
                    <figure><img src="https://wnorowskastudio.pl/wp-content/uploads/2021/12/3g-1.webp" alt="" data-id="267" data-full-url="https://wnorowskastudio.pl/wp-content/uploads/2021/12/3g-1.webp" data-link="https://wnorowskastudio.pl/3g-1/" class="wp-image-267" /></figure>
                </li>
                <li class="blocks-gallery-item">
                    <figure><img src="https://wnorowskastudio.pl/wp-content/uploads/2021/12/1g-1.webp" alt="" data-id="266" data-full-url="https://wnorowskastudio.pl/wp-content/uploads/2021/12/1g-1.webp" data-link="https://wnorowskastudio.pl/1g-1/" class="wp-image-266" /></figure>
                </li>
            </ul>
        </figure>
    </section>

    <section class="white" id="contact">
        <div class="container">
            <div class="half">
                <div class="global_image">
                    <img id="contact_image_first" src="<?php echo get_template_directory_uri(); ?>/assets/img/contact.webp" alt="Justyna Wnorowska">
                </div>
            </div>
            <div class="half">
                <h2>Kontakt</h2>

                <ul>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/phone.svg" alt="phone"><span><?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_PHONE')) ?></span></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mail.svg" alt="mail"><span><?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_E-MAIL')) ?></span>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/location.svg" alt="location"><span><?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_ADRESS')) ?></span>
                    </li>
                </ul>

                <div id="contact_right_socialBox">
                    <a href="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_INSTAGRAM')) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/ig.svg" alt="ig">
                    </a>
                    <a href="<?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_FB')) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fb.svg" alt="fb">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>