<!-- TODO: WPにおすすめなカルーセル実装方法を確認する -->
<section class="kv-section <?php echo($args["page"]);?>">

    <?php if($args["page"] === "index") { ?>
        <p class="kv_catchcopy <?php echo($args['page']) ?>">都心一望。<br class="for-sp">ウォーターフロントで、<br class="for-sp">心豊かな人生を叶える</p>
        <div class="kv slider-kv">
            <?php echo(default_image( array('kv/top.jpg'), '1600', '800', 'top' )); ?>
            <?php echo(default_image( array('kv/top2.jpg'), '1600', '800', 'top' )); ?>
            <?php echo(default_image( array('kv/top3.jpg'), '1600', '800', 'top' )); ?>
        </div>
    <?php }else{ ?>
        <p class="kv_catchcopy <?php echo($args['page']) ?>"><?php echo($args['title']) ?></p>
    <?php } ?>
</section>