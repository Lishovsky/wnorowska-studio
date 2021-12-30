<?php get_header(); ?>

<?php the_post(); ?>

<main>
    <section class="white firstElement">
        <div class="container blog">
            <h2><?php the_title(); ?></h2>
            <p>
                <?php the_content(); ?>
            </p>
        </div>
    </section>
</main>
<?php get_footer() ?>