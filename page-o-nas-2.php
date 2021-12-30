<?php get_header(); ?>

<?php the_post(); ?>

<main>
    <section class="white" id="aboutUs">
        <div class="container">
            <div class="half">
                <div class="global_image">
                    <img id="contact_image_first" src="<?php echo get_template_directory_uri(); ?>/assets/img/about.webp" alt="Justyna Wnorowska">
                </div>
            </div>
            <div class="half">
                <h2>Justyna Wnorowska</h2>

                <p>
                    <?php echo esc_attr(get_option('WNOROWSKA_REQUIRE_ABOUT')); ?>
                </p>
            </div>
        </div>
    </section>
</main>


<?php get_footer() ?>