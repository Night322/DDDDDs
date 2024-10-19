<?php
$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$time = date("Y-m-d H:i:s");

$log = "IP: $ip, User-Agent: $userAgent, Time: $time\n";
file_put_contents("logs.txt", $log, FILE_APPEND);
?>
