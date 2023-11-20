<nav class="breadcrumb">
    <ul>
        <li><a href="<?php echo(esc_url(home_url('/'))); ?>">TOP</a></li>
        <?php
            if(count($args['parent'])){
                echo "<li><a href='". esc_url(home_url('/'). $args['parent']['page']). "'>". $args['parent']['title']. "</a></li>";
            }
            if(count($args['self'])){
                echo "<li><a href='". esc_url(home_url('/'). $args['self']['page']). "'>". $args['self']['title']. "</a></li>";
            }
        ?>
    </ul>
</nav>