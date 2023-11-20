<?php

/**
 * Template Name: 404のテンプレート
 */

    $self = [
        'page' => get_post(get_the_ID())->post_name,
        'title' => get_the_title(),
    ];
?>
<main id="site-content">
    <?php get_template_part( 'components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']] ); ?>
    <?php get_template_part( 'components/common/breadcrumb', null, ['parent' => [], 'self' => $self] ); ?>
</main>
