<a href="<?php echo($args['link']); ?>" class="news-card <?php echo($args['view']); ?>">
    <div class="news-card_thumbnail">
        <img src="<?php echo($args['thumbnail-url']) ?>" width="240px" height="170px">
    </div>
    <div class="news-card_summary">
        <?php
            $posttags = get_the_tags();
            if ($args['view'] === 'list-view' && !empty($posttags)) {
                echo '<ul class="news-card_tags">';
                foreach($posttags as $tag) {
                    echo '<li class="news-card_tag">' . $tag->name . '</li>';
                }
                echo '</ul>';
            };
        ?>
        <date class="news-card_post-date"><?php echo($args['post-date']); ?></date>
        <p class="news-card_title"><?php echo($args['title']); ?></p>
        <p class="news-card_detail"><?php echo($args['detail']); ?></p>
    </div>
</a>