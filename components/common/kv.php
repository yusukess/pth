<!-- TODO: WPにおすすめなカルーセル実装方法を確認する -->
<section class="kv-section <?php echo ($args["page"]); ?>">
    <div class="kv-section-inner">

        <?php if ($args["page"] === "index") { ?>
            <p class="kv_catchcopy <?php echo ($args['page']) ?>">都心一望。<br class="for-sp">ウォーターフロントで、<br class="for-sp">心豊かな人生を叶える</p>
            <div class="kv slider-kv for-pc">
                <?php echo (default_image(array('kv/top/pc/01.jpg'), '1600', '800', '画像', 'for-pc')); ?>
                <?php echo (default_image(array('kv/top/pc/02.jpg'), '1600', '800', '画像')); ?>
                <?php echo (default_image(array('kv/top/pc/03.jpg'), '1600', '800', '画像')); ?>
            </div>
            <div class="kv slider-kv for-sp">
                <?php echo (default_image(array('kv/top/sp/01.jpg'), '590', '1278', '画像')); ?>
                <?php echo (default_image(array('kv/top/sp/02.jpg'), '590', '1278', '画像')); ?>
                <?php echo (default_image(array('kv/top/sp/03.jpg'), '590', '1278', '画像')); ?>
            </div>
        <?php } else { ?>
            <p class="kv_catchcopy <?php echo ($args['page']) ?>"><?php echo ($args['title']) ?></p>
        <?php } ?>
    </div>
</section>