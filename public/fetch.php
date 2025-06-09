<?php
header('Content-Type: application/json');

$servername = "35.185.144.82:3306";
$username = "rootroot";
$password = "e1234567";  // 替換成你的密碼
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(["error" => "連線失敗: " . $conn->connect_error]));
}

$sql = "SELECT * FROM students";  // 替換成你的資料表名稱
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data, JSON_UNESCAPED_UNICODE);
$conn->close();
?>
