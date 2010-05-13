<?php defined('SYSPATH') or die('No direct script access'); ?>
<html>
    <head>
        <title>Taki sobie blog</title>
    </head>
    <body>
        <?php echo $header ?>
        <h1>
            <?php
                $curr_hour = date('G');
                if ($curr_hour > 18 OR $curr_hour < 6) {
                    echo 'Dobry wieczór';
                } else {
                    echo 'Dzień dobry';
                }
            ?>
        </h1>
        <p>Witam na moim blogu. Na tym blogu znajdziesz wszystko i nic</p>
        <?php 
            echo $content;
            echo $list;
        ?>
     </body>
</html>
