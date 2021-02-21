<?php

$rand = rand(91,240);
$url = 'https://cdn.jsdelivr.net/gh/LWANGYONG/cdn/imgs/'.$rand.'.jpg';
$img = file_get_contents($url,true);
header("Content-Type: image/jpeg;");
echo $img;
?>
