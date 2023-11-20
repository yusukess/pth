<section class="point <?php echo($args['page']) ?>-point">
    <?php echo( default_image( array($args['point']['image']), $args['point']['image-width'], $args['point']['image-height'], $args['point']['heading'] ) ); ?>
    <div class="point_information">
        <h3 class="point_heading"><?php echo($args['point']['heading']) ?></h3>
        <p class="point_detail"><?php echo($args['point']['detail']) ?></p>
        <small class="point_notice"><?php echo($args['point']['notice']) ?></small>
        <?php
            if($args['point']['sub-image']) {
                $sub_image_pc = $args['point']['sub-image'];
                $sub_image_sp = str_replace(".png", "-sp.png", $args['point']['sub-image']);
                echo( default_image( array($sub_image_pc), "676", "170", "" , "point_sub-image for-pc") );
                echo( default_image( array($sub_image_sp), "414", "212", "", "point_sub-image for-sp" ) );
            }
        ?>
    </div>
</section>