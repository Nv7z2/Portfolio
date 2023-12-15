<?php
/**
 * Template Name: Home Page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="home">
    <section class="home__hero">
        <?php get_template_part('partials/home/section', 'hero'); ?>
    </section>
</main>

<?php get_footer(); ?>
