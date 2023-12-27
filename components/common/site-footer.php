<footer class="site-footer">
    <nav class="site-footer_navigation">
        <?php get_template_part('components/common/global-navigation'); ?>
    </nav>
    <div class="site-footer_banner-area">
        <?php dynamic_sidebar('footer_banner'); ?>
    </div>
    <div class="site-footer_logo">
        <a href="<?php echo (esc_url(home_url('/'))); ?>">
            <?php echo (default_image(array('common/footer/logo.svg'), '400', '133', 'Park Tower HARUMIロゴ')); ?>
        </a>
    </div>
    <small class="site-footer_copyright">Copyright &copy;Park Tower Harumi. All Rights Reserved</small>
</footer>