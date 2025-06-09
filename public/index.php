<?php
header('Content-Type: application/json');

$data = [
    ["id" => "1", "name" => "10", "age" => "2020"],
    ["id" => "2", "name" => "20", "age" => "2021"],
    ["id" => "3", "name" => "30", "age" => "2022"]
];

echo json_encode($data);
?>

<?php
