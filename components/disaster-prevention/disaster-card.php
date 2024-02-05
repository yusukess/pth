<div class="disaster-card">
    <div class="disaster-card_thumbnail">
        <?php echo (default_image(array("disaster-prevention/disaster-card/" . $args['id'] . ".jpg"), '220', '150', $args['title'])); ?>
    </div>
    <div class="disaster-card_summary">
        <p class="disaster-card_title"><?php echo ($args['title']); ?></p>
        <p class="disaster-card_detail"><?php echo ($args['detail']); ?></p>
        <small class="disaster-card_notice"><?php echo ($args['notice']); ?></small>
    </div>
</div>