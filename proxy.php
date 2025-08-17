<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain");

// Replace with your credentials
$host = "http://starshare.fun:80";
$username = "home123";
$password = "home123";

$m3u_url = "$host/get.php?username=$username&password=$password&type=m3u_plus&output=ts";
echo file_get_contents($m3u_url);