<?php
    wp_nav_menu(
        array(
            'theme_location' => 'global-nav',
            'items_wrap' => '<ul class="global-navigation">%3$s</ul>',
            'container' => false
        )
    );
?>