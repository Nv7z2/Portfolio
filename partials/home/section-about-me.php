<?php

$about_me_section = get_field('about-me_section');
$about_me_heading = $about_me_section['about-me_heading'];
$about_me_description = $about_me_section['about-me_description'];
$about_me_quote = $about_me_section['about-me_quote'];
$about_me_button = $about_me_section['about-me_button'];
?>

<section class="home__about-me">
    <h1 class="heading--h2"><?php echo $about_me_heading; ?></h1>

    <div class="about-me-text-content">
        <div class="about-me-left-column">
            <div class="about-me-description"><?php echo $about_me_description; ?></div>
        </div>

        <div class="about-me-right-column">
            <div class="about-me-quote-wrapper">
                <q class="about-me-quote-content">
                    <?php echo $about_me_quote['about-me_quote-content']; ?>
                </q>

                <span class="about-me-quote-author">
                    <?php echo $about_me_quote['about-me_quote-author']; ?>
                </span>
            </div>
        </div>
    </div>

    <div class="about-me-button-wrapper">
        <?php get_template_part(
            'partials/global/button',
            'main',
            array(
                'button' => $about_me_button,
                'type' => 'main'
            )
        ); ?>
    </div>
</section>