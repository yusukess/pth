<?php

/**
 * Template Name: 投稿ページのテンプレート 
 */
$category = get_the_category();
$cat = $category[0];
$slug = $cat->slug;

$category_id = $cat->cat_ID;
$category_link = get_category_link($category_id);

$parent = [
    'page' => 'news',
    'title' => 'ニュース・イベント'
];

$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];

get_header();
?>

<body <?php body_class(); ?>>
    <?php get_template_part('components/common/site-header'); ?>
    <main id="site-content">
        <?php get_template_part('components/common/kv', null, ['page' => $parent['page'], 'title' => $parent['title']]); ?>
        <?php get_template_part('components/common/breadcrumb', null, ['parent' => $parent, 'self' => $self]); ?>
        <section class="single-section">
            <div class="single-section_inner">
                <article class="article">
                    <div class="article_header">
                        <?php
                        $posttags = get_the_tags();
                        if (!empty($posttags)) {
                            echo '<ul class="article_tags">';
                            foreach ($posttags as $tag) {
                                echo '<li class="article_tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></li>';
                            }
                            echo '</ul>';
                        };
                        ?>
                        <h2 class="article_title"><?php the_title(); ?></h2>
                        <p class="article_post-date"><?php echo get_the_date(); ?></p>
                    </div>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="article_content">
                            <?php echo the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <div class="article_pagination">
                        <div class="pagenation_prev"><?php previous_post_link('%link', '＜ 前のニュース', true); ?></div>
                        <div class="pagenation_next"><?php next_post_link('%link ', '次のニュース ＞', true); ?></div>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
</body>

</html>