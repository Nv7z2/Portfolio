<?php
$article_image = $args['hero-image'];
$article_title = $args['article-title'];
$article_author = $args['article-author'];
$article_date = $args['article-date'];
?>

<div class="article-hero" style="background: url(<?php echo esc_url($article_image); ?>) center / cover;">
    <div class="article-hero-mask"></div>
    <div class="article-hero-content">
        <div class="article-breadcrumbs mobile-hidden">
            <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
        </div>

        <div class="article-hero-meta">
            <h1 class="article-title">
                <?php echo $article_title; ?>
            </h1>

            <div class="article-meta">
                <div class="article-author">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/img/icon-author.svg'; ?>" role="presentation" />
                    <?php echo $article_author; ?>
                </div>

                <div class="article-meta-divider">
                    <span>|</span>
                </div>

                <div class="article-date">
                    <img src="<?php echo get_template_directory_uri() . '/assets/dist/img/icon-date.svg'; ?>" role="presentation" />
                    <?php echo $article_date; ?>
                </div>
            </div>
        </div>
    </div>
</div>