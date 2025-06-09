<?php
$opts = [
  "http" => [
    "method" => "GET",
    "header" => "User-Agent: Mozilla/5.0\r\n"
  ]
];
$context = stream_context_create($opts);

// ⚠ 目標網站可能會阻擋 curl，改用 file_get_contents + UA spoofing
$url = "https://myapi.infinityfreeapp.com/?i=1";
$response = file_get_contents($url, false, $context);

header('Content-Type: application/json');
echo $response;
?>
