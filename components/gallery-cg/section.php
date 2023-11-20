<section class="<?php echo($args['section-id']) ?>-section">
    <div class="<?php echo($args['section-id']) ?>-section_inner">
        <h2 class="<?php echo($args['section-id']) ?>_heading"><?php echo($args['section-name']) ?></h2>
        <?php foreach($args['database'] as $key => $value){ ?>
            <section class="<?php echo($args['section-id']) ?>-group">
                <h3 class="<?php echo($args['section-id']) ?>-group_heading"><?php echo($value['heading']) ?></h3>
                <div class="<?php echo($args['section-id']) ?>">
                    <?php foreach($value['photos'] as $photo) { ?>
                        <?php get_template_part(
                            'components/gallery-cg/lightbox-card',
                            null,
                            [
                                'id' => $photo['id'],
                                'description' => $photo['description']
                            ]); ?>
                    <?php } ?>
                </div>
            </section>
        <?php } ?>
    </div>
</section>