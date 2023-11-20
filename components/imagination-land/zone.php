<?php
    $is_greeting = ($args["zone-id"] == "greeting") ? true : false;
 ?>

<section class="zone-section <?php echo($args["zone-id"]) ?> <?php if($is_greeting){ echo("current"); } ?>" id="zone-section">
    <div class="zone-section_inner">
        <h2 class="zone_heading"><?php echo($args["zone"]) ?><small><?php echo($args["zone-jp"]) ?></small></h2>
        <?php foreach($args["group"] as $i => $group) { ?>
            <div class="zone_image zone_image-<?php echo(($i + 1)) ?>"><p class="zone_image_title"><?php echo($group["title"]) ?></p></div>
            <h3 class="zone_detail_heading"><?php echo($group["heading"]) ?></h3>
            <p class="zone_detail_information"><?php echo($group["information"]) ?></p>
        <?php } ?>
    </div>
</section>