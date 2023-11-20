<header class='site-header'>
    <div class='site-header_inner'>
        <a href="<?php echo(esc_url(home_url('/'))); ?>" class='site-header_logo'>
            <?php echo(default_image( array('common/header/pth-site-logo.svg'), '200', '62', 'Park Tower HARUMIロゴ' )); ?>
        </a>
        <nav class="site-header_navigation">
            <?php get_template_part( 'components/common/header-sub-navigation' ); ?>
            <?php get_template_part( 'components/common/global-navigation' ); ?>
        </nav>
    </div>
</header>
<header class="site-header-sp">
    <a href="<?php echo(esc_url(home_url('/'))); ?>" class='site-header_logo'>
        <?php echo(default_image( array('common/header/pth-site-logo.svg'), '135', '41', 'Park Tower HARUMIロゴ' )); ?>
    </a>
    <nav class="site-header_panel">
        <?php get_template_part( 'components/common/global-navigation' ); ?>
        <?php get_template_part( 'components/common/header-sub-navigation' ); ?>
    </nav>
    <button class="site-header_hamburger"><span></span><span></span><span></span></button>
</header>