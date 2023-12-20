<?php

/**
 * Template Name: 投稿ページのテンプレート 
 */

$category = get_the_category();
$cat = $category[0];
$slug = $cat->slug;

$self = [
    'page' => 'news',
    'title' => 'ニュース・イベント',
];

get_header();
?>

<body <?php body_class(); ?>>
    <?php get_template_part('components/common/site-header'); ?>
    <main id="site-content">
        <?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
        <?php get_template_part('components/common/breadcrumb', null, ['parent' => [], 'self' => $self]); ?>
        <section class="news-section">
            <div class="news-section_inner">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php echo (get_template_part(
                            'components/common/news-card',
                            null,
                            [
                                "thumbnail-url" => catch_that_image(),
                                "post-date" => get_the_date(),
                                "title" => get_the_title(),
                                "detail" => get_the_excerpt(),
                                "link" => get_the_permalink(),
                                "view" => 'list-view'
                            ]
                        )); ?>
                <?php endwhile;
                endif; ?>
                <?php wp_pagenavi(); ?>
            </div>
        </section>
        <?php get_template_part('components/news/event', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    </main>
    <?php get_footer(); ?>
</body>

</html>