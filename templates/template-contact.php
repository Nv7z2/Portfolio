<?php
/**
 * Template Name: Contact page
 *
 * @package Portfolio
 */

get_header();

$contact_heading = get_field('heading');
$contact_description = get_field('description');
?>

<main id="main" class="contact">
        <?php get_template_part('partials/global/navigation'); ?>

        <div class="content">
            <h1 class="heading--h1">
                <?php echo $contact_heading; ?>
            </h1>

            <div class="contact-description">
                <?php echo $contact_description; ?>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="822dcaa" title="Contact form 1"]'); ?>
        </div>
</main>

<?php get_footer(); ?>
