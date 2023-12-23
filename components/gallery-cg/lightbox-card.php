<div class="lightbox-card">
    <a href="<?php echo (get_template_directory_uri() . '/assets/images/gallery-cg/' . $args['category'] . '/' . $args['id'] . '.jpg'); ?>" class="lightbox-card" data-lightbox="gallery-cg" data-title="<?php echo ($args['description']) ?>">
        <?php echo (default_image(array('gallery-cg/' . $args['category'] . '/' . $args['id'] . '.jpg'), '306', '208', '')); ?>
    </a>
    <p class="lightbox-card_description"><?php echo ($args['description']) ?></p>
</div>