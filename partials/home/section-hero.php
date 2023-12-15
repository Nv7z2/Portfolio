<?php

$hero_description = get_field('hero_description');
$main_heading = get_field('main_heading');
$main_button = get_field('main_button');
$additional_button = get_field('additional_button');
?>

<section class="home__hero">
    <div class="hero-text-content">
        <?php get_template_part('partials/home/animated' ,'text'); ?>

        <div class="scroll-down-and-floating-contact">
            <a href="mailto:kontakt@kacperbaran.pl" class="floating-email">
                <span>kontakt@kacperbaran.pl</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none" class="floating-email-icon">
                    <path d="M11.1111 14.2222L6.44445 10.3333M11.1111 1.77778L6.44445 5.66667M3.33334 15L7.07959 9.38055C7.41224 8.88161 7.57861 8.63218 7.64316 8.36252C7.70033 8.12421 7.70033 7.87579 7.64316 7.63748C7.57861 7.36782 7.41224 7.11839 7.07959 6.61944L3.33334 1M11.8889 12.5111L11.8889 3.48889C11.8889 2.6177 11.8889 2.18207 11.7193 1.84933C11.5702 1.55665 11.3322 1.31866 11.0396 1.16956C10.7068 1 10.2712 0.999999 9.40001 0.999999L3.4889 1C2.61771 1 2.1821 1 1.84936 1.16956C1.55665 1.31866 1.31869 1.55665 1.16955 1.84933C1.00001 2.18207 1.00001 2.6177 1.00001 3.48889L1.00001 12.5111C1.00001 13.3823 1.00001 13.8179 1.16956 14.1507C1.31869 14.4434 1.55666 14.6813 1.84936 14.8305C2.18211 15 2.6177 15 3.4889 15L9.40001 15C10.2712 15 10.7068 15 11.0396 14.8305C11.3322 14.6813 11.5702 14.4434 11.7193 14.1507C11.8889 13.8179 11.8889 13.3823 11.8889 12.5111Z" stroke="#8E8E8E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <a href="#portfolio" class="floating-scroll-down">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="84" viewBox="0 0 16 84" fill="none">
                    <path d="M9 1C9 0.447715 8.55228 2.41411e-08 8 0C7.44772 -2.41411e-08 7 0.447715 7 1L9 1ZM7.29289 83.7071C7.68341 84.0976 8.31658 84.0976 8.7071 83.7071L15.0711 77.3431C15.4616 76.9526 15.4616 76.3195 15.0711 75.9289C14.6805 75.5384 14.0474 75.5384 13.6569 75.9289L8 81.5858L2.34314 75.9289C1.95262 75.5384 1.31945 75.5384 0.928929 75.9289C0.538405 76.3195 0.538404 76.9526 0.928929 77.3431L7.29289 83.7071ZM7 1L7 83L9 83L9 1L7 1Z" fill="#8E8E8E"/>
                </svg>
            </a>
        </div>

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
</section>