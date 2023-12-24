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

        <h1 class="main-heading heading--h1"><?php echo $main_heading; ?></h1>

        <?php if ($hero_description): ?>
            <p class="hero-description"><?php echo $hero_description; ?></p>
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