<?php

/**
 * Template Name: 構造・設備のテンプレート
 */

$self = [
    'page' => get_post(get_the_ID())->post_name,
    'title' => get_the_title(),
];
?>
<main id="site-content">
    <?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    <?php get_template_part('components/common/breadcrumb', null, ['parent' => [], 'self' => $self]); ?>
    <?php get_template_part('components/structure-facilities/structure', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
    <?php get_template_part('components/structure-facilities/facilities', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
</main>