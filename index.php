<?php
error_reporting(0);
date_default_timezone_set("Africa/Cairo");

require('compare.php');

?>

<!DOCTYPE html>
<html>
<head>
    <title>What time is it?</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body class="<?=$class?>">
    <div style="margin: 0 auto; width: 1180px;">
        <div style="margin-top: 25px; text-align:left;">
            <?php 
        
                echo "<h1>Time is " . date('G:i:s A') . '</h1><br />' . "Time Zone: " . date_default_timezone_get();
                echo  '<br />'. $img
        
            ?>
        </div>
    </div>
</body>
</html>