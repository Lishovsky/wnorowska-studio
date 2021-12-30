<?php get_header() ?>

<main>
    <section class="white firstElement" id="notFound">
        <div class="container">
            <h2>404</h2>
            <p>Strona której szukasz nie istnieje...</p>
            <a href="<?php echo esc_url(home_url('/')); ?>">Wróć do strony głównej</a>
        </div>
    </section>
</main>

<?php get_footer() ?>