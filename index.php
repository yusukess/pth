<?php

$self = [
	'page' => 'index',
	'title' => '都心一望。<br class="for-sp">ウォーターフロントで、<br class="for-sp">心豊かな人生を叶える'
];

get_header();
?>

<body <?php body_class(); ?>>
	<?php get_template_part('components/common/site-header'); ?>
	<?php get_template_part('components/common/kv', null, ['page' => $self['page'], 'title' => $self['title']]); ?>
	<?php get_template_part('components/top/bg'); ?>
	<main id="site-content">
		<?php get_template_part('components/top/introduction'); ?>
		<?php get_template_part('components/top/message'); ?>
		<?php get_template_part('components/top/news'); ?>
		<?php get_template_part('components/top/concept'); ?>
		<?php get_template_part('components/top/movie'); ?>
	</main><!-- #site-content -->
	<?php get_footer(); ?>
</body>

</html>