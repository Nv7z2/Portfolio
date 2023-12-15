<?php

$hero_description = get_field('hero_description');
$main_heading = get_field('main_heading');
$main_button = get_field('main_button');
$additional_button = get_field('additional_button');
?>

<div class="hero-text-content">
    <?php get_template_part('partials/home/animated' ,'text'); ?>

    <h1 class="main-heading heading--h1"><?php echo $main_heading; ?></h1>

    <?php if ($hero_description): ?>
        <p class="hero-description"><?php echo $hero_description; ?></p>
    <?php endif; ?>

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
</div>

<div class="hero-social-media">

    <?php get_template_part('/partials/global/social-media/linkedin'); ?>
    <?php get_template_part('/partials/global/social-media/instagram'); ?>
    <?php get_template_part('/partials/global/social-media/medium'); ?>

</div>