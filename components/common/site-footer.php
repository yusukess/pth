<footer class="site-footer">
    <nav class="site-footer_navigation">
        <?php get_template_part( 'components/common/global-navigation' ); ?>
    </nav>
    <div class="site-footer_logo">
        <a href="<?php echo(esc_url(home_url('/'))); ?>">
            <?php echo(default_image( array('common/footer/pth-logo.png'), '400', '173', 'Park Tower HARUMIロゴ' )); ?>
        </a>
    </div>
    <div class="site-footer_banner-area">
        <a href="TODO:リンク先確認する"><?php echo(default_image( array('common/footer/banner/livable.png'), '300', '100', 'イニシア千住曙町のご購入・ご売却は東急リバブルへ＋｜東急リバブル' )); ?></a>
        <a href="TODO:リンク先確認する"><?php echo(default_image( array('common/footer/banner/cigr.png'), '300', '100', 'お住み替えの時には「仲介」も「買取」も「イニシア千住曙町」の分譲主がスムーズです｜株式会社コスモスイニシア' )); ?></a>
    </div>
    <small class="site-footer_copyright">Copyright ©︎Park Tower Harumi. All Rights Reserved</small>
</footer>