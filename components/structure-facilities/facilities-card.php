<div class="facilities-card">
    <div class="facilities-card_thumbnail">
        <?php echo( default_image(array("structure-facilities/facilities/". $args['id']. ".jpg"), '220', '150', $args['title'])); ?>
    </div>
    <div class="facilities-card_summary">
        <p class="facilities-card_title"><?php echo($args['title']); ?></p>
        <p class="facilities-card_detail"><?php echo($args['detail']); ?></p>
        <small class="facilities-card_notice"><?php echo($args['notice']); ?></small>
    </div>
</div>