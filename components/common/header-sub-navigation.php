<?php
    wp_nav_menu(
        array(
            'theme_location' => 'header-nav',
            'items_wrap' => '<ul class="sub-navigation">%3$s</ul>',
            'container' => false
        )
    );
?>