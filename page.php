<?php
get_header();

?>

<main id="main" class="page">
        <?php get_template_part('partials/global/navigation'); ?>

        <div class="content">
            <h1 class="heading--h1"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
</main>

<?php get_footer(); ?>
