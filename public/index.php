<?php
$url = "https://myapi.infinityfreeapp.com/?";

$options = [
    "http" => [
        "method" => "GET",
        "header" => "User-Agent: Mozilla/5.0\r\n"
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

header('Content-Type: application/json');
echo $response;
?>
