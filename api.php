<?php
header('Cache-Control:no-cache,must-revalidate');
header('Pragma:no-cache');
$img_array = glob("./sjapi/*.{gif,jpg,png,bmp,jpeg}",GLOB_BRACE);
$img = array_rand($img_array); 
header("location:.$img_array[$img]"); 
 ?>
