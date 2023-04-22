<?php 
$id = isset($_GET['id'])?$_GET['id']:'11342412';
$d = file_get_contents('https://www.huya.com/'.$id);
preg_match('/"sStreamName":"(.*?)"/',$d,$sStreamName);
$m3u8 = "http://aldirect.corp-hls.huya.com/src/".$sStreamName[1].".m3u8??";
header('location:'.$m3u8);
?>
