<div class="navigation-blur"></div>

<button class="navigation-burger">
    X
</button>

<div class="navigation-wrapper">

<?php

wp_nav_menu(
    array(
        "theme_location" => 'sidebar',
        'container' => 'nav',
        'container_class' => 'navigation'
    )
)

?>

    <div class="navigation__social-media">
        <?php get_template_part('partials/global/social-media/linkedin'); ?>
        <?php get_template_part('/partials/global/social-media/instagram'); ?>
        <?php get_template_part('/partials/global/social-media/medium'); ?>
    </div>

</div>

<script>
    const navigationHamburgerButton = document.querySelector('.navigation-burger');
    const navigationBlur = document.querySelector('.navigation-blur');
    const navigationWrapper = document.querySelector('.navigation-wrapper');

    [navigationHamburgerButton, navigationBlur].forEach(navigationClicableElement => {
        navigationClicableElement.addEventListener('click', () => {
            navigationHamburgerButton.classList.toggle('navigation-burger--active');
            navigationBlur.classList.toggle('navigation-blur--active');
            navigationWrapper.classList.toggle('navigation-wrapper--active');
        });
    });
</script>