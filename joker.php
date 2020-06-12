<?php 
$link=file_get_contents('https://upstream.to/embed-1jm0vs60899p.html');//link tenias
$start='sources: [{file:"';
$end='.mp4';
$link = strstr($link,$start); //entopizi tin grammi pou ine grammeno to location tis tenias
$link = strstr($link,$end,true); //perni to location mexri to .mp4
$start='https';
$link = strstr($link,$start);
$link=$link.'.mp4';
header('Location:'.$link);//redirect sto link
?>
