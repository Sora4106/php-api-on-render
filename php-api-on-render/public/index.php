<?php
header('Content-Type: application/json');
$data = [
  ["id" => "1", "name" => "10", "age" => "2020"]
];
echo json_encode($data);
?>
