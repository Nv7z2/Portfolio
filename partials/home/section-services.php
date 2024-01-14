<?php

$services_section = get_field('services_section');
$services_heading = $services_section['services_heading'];
$services_repeater = $services_section['single_service'];
?>

<section class="home__services">
    <h2 class="heading--h2"><?php echo $services_heading; ?></h1>

    <div class="services-heading-wrapper">
        <?php
            $loop_index = 1;
            if( $services_repeater ):
                foreach ( $services_repeater as $single_service ): ?>
                
                <a href="#<?php echo str_replace(' ', '-', strtolower($single_service['service_name'])) ?>" class="service-name-link <?php if ($loop_index == 1) echo 'service-name-link--active'; ?>">
                    <span class="service-name">
                        <?php echo $single_service['service_name']; ?>
                    </span>
                </a>

        <?php
                $loop_index ++;
                endforeach;
            endif;
        ?>
    </div>

    <div class="services-description-wrapper">
        <?php
            $loop_index2 = 1;
            if( $services_repeater ):
                foreach ( $services_repeater as $single_service ): ?>

                <div class="service-description <?php if ($loop_index2 == 1) echo 'service-description--active'; ?>" id="<?php echo str_replace(' ', '-', strtolower($single_service['service_name'])); ?>" >
                    <?php echo $single_service['service_description']; ?>
                </div>

        <?php
                $loop_index2 ++;
                endforeach;
            endif;
        ?>

        <?php get_template_part(
            'partials/global/button',
            'main',
            array(
                'button' => $single_service['service_button'],
                'type' => 'main'
            )
        ); ?>
    </div>
</section>

<script>
    const servicesLinks = document.querySelectorAll('.service-name-link');
    const servicesDescriptions = document.querySelectorAll('.service-description');

    servicesLinks.forEach(serviceLink => {
        const serviceLinkHref = serviceLink.getAttribute('href');

        serviceLink.addEventListener('click', () => {
            servicesLinks.forEach(el => el.classList.remove('service-name-link--active'));
            serviceLink.classList.toggle('service-name-link--active');
            toggleServiceDescriptionVisibility(serviceLinkHref);
        })
    });

    function toggleServiceDescriptionVisibility(currentService) {
        servicesDescriptions.forEach(el => el.classList.remove('service-description--active'));

        servicesDescriptions.forEach(el => {
            if (el.getAttribute('id') == currentService.substring(1)) {
                el.classList.add('service-description--active');
            }
        })
    }
</script>
