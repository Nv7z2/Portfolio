<?php get_header(); ?>

<main id="main" class="page">
    <?php get_template_part('partials/global/navigation'); ?>

    <div class="content">
        <article class="article">
            <div class="spacer--small"></div>

            <?php get_template_part('partials/article/article', 'hero', array(
                'hero-image' => get_the_post_thumbnail_url(),
                'article-title' => get_the_title(),
                'article-author' => get_the_author(),
                'article-date' => get_the_modified_date()
            )); ?>

            <div class="spacer--small"></div>

            <div class="article-content-wrapper">
                <div class="article-content">
                    <?php get_template_part('partials/global/text-content', null, array(
                        'content' => get_the_content()
                    )); ?>
                </div>
            </div>

            <div class="spacer--big"></div>

            <h2>Sprawdź inne publikacje</h2>

            <div class="blog-featured-posts">
                <?php
                $current_post_id = get_the_ID();

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array($current_post_id),
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $recent_posts = new WP_Query($args);

                if ($recent_posts->have_posts()) { ?>
                    <?php
                    while ($recent_posts->have_posts()) :
                        $recent_posts->the_post();
                    ?>
                        <div class="blog-featured-post">
                            <a href="<?php echo esc_url(get_the_permalink()); ?>">
                                <div class="blog-featured-post-background" style="background: url(<?php echo esc_url(get_the_post_thumbnail_url()); ?>) center / 100%;"></div>
                            </a>

                            <span class="blog-featured-post-date">
                                <?php echo get_the_modified_date(); ?>
                            </span>

                            <a href="<?php echo get_the_permalink(); ?>" class="blog-featured-post-title-wrapper">
                                <h3 class="blog-featured-post-title">
                                    <?php the_title() ?>
                                </h3>
                            </a>

                            <p class="blog-featured-post-teaser">
                                <?php echo substr(get_the_excerpt(), 0, 200) . ' ...'; ?>
                            </p>

                            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="blog-featured-post-cta">
                                Czytaj dalej
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/button-arrow-right.svg' ?>" role="presentation" />
                            </a>
                        </div>
                <?php endwhile;
                    // Zresetuj zapytanie
                    wp_reset_postdata();
                } else {
                    // Komunikat w przypadku braku wpisów
                    echo 'Brak wpisów do wyświetlenia.';
                }
                ?>
            </div>

            <div class="spacer--big"></div>
        </article>
    </div>
</main>


<script>
    const tableOfContent = document.querySelector('.wp-block-rank-math-toc-block');

    tableOfContent.insertAdjacentHTML('afterbegin', '<h2 class="table-of-content-heading">Spis treści</h2>')
</script>
<?php get_footer(); ?>