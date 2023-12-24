<?php

$hero_section = get_field('hero_section');

$hero_description = $hero_section['hero_description'];
$main_heading = $hero_section['main_heading'];
$hero_buttons = $hero_section['hero_buttons'];
$main_button = $hero_buttons['main_button'];
$additional_button = $hero_buttons['additional_button'];
?>

<section class="home__hero">
    <div class="hero-text-content">

        <?php echo $main_heading; ?>

        <?php if ($hero_description): ?>
            <div class="hero-description"><?php echo $hero_description; ?></div>
        <?php endif; ?>
    </div>

    <div class="hero-buttons">
        <?php get_template_part(
            'partials/global/button',
            'main',
            array(
                'button' => $main_button,
                'type' => 'main'
            )
        ); ?>

        <?php get_template_part(
            'partials/global/button',
            'main',
            array(
                'button' => $additional_button,
                'type' => 'borderless'
            )
        ); ?>
    </div>
</section>