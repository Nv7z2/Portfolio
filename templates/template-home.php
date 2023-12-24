<?php
/**
 * Template Name: Home Page
 *
 * @package Portfolio
 */

get_header();
?>

<main id="main" class="home">
        <?php get_template_part('partials/global/navigation'); ?>

        <div class="content">
                <?php get_template_part('partials/home/section', 'hero'); ?>
                <?php get_template_part('partials/home/section', 'about-me'); ?>
                <?php get_template_part('partials/home/section', 'services'); ?>
        </div>
</main>

<?php get_footer(); ?>
