<div class="slider-gallery <?php echo ($args['section']) ?>_slider <?php echo ($args['area']) ?>">
    <div class="slider-photo">
        <?php foreach ($args['photos'] as $photo) { ?>
            <div class="slide">
                <?php echo (default_image(array($args['page'] . '/' . $args['area'] . '/' . $photo['id'] . '.jpg'), '1000', '400', '')); ?>
                <p class="caption"><?php echo ($photo['caption']) ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="slider-gallery_nav <?php echo ($args['section']) ?>_nav">
        <?php foreach ($args['photos'] as $photo) { ?>
            <div>
                <?php echo (default_image(array($args['page'] . '/' . $args['area'] . '/' . $photo['id'] . '.jpg'), '116', '80', '')); ?>
            </div>
        <?php } ?>
    </div>
</div>