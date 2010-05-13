<?php defined('SYSPATH') or die('No direct script access'); ?>
<div>
    <?php foreach ($posts as $post) : ?>
        <h1><?php echo $post['title'] ?></h1>
        <p><?php echo $post['note'] ?></p>
    <?php endforeach; ?>
</div>
