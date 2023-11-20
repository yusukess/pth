<?php
    /**
     * Template Name: 共通テンプレート
     */

    $self = [
        'page' => get_post(get_the_ID())->post_name,
        'title' => get_the_title(),
    ];

    get_header();
?>

<body <?php body_class(); ?>>
	<?php get_template_part( 'components/common/site-header' ); ?>
    <?php get_template_part('pages/' . $self['page'], null, ['page' => $self['page'], 'title' => $self['title']]); ?>
	<?php get_footer(); ?>
</body>
</html>