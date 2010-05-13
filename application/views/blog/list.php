<?php defined('SYSPATH') or die('No direct script access'); ?>
<div>
    <ul>
        <?php foreach($links as $link) : ?>
        <li><?php echo html::anchor($link) ?></li>
        <?php endforeach; ?>
    </ul>
</div>
