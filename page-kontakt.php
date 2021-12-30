<?php get_header(); ?>

<?php the_post(); ?>

<main>
    <section class="white" id="contact" style="margin-top: 130px">
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


<?php get_footer() ?>