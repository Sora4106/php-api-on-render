<?php
$servername = "sql207.infinityfree.com"; // 改成你的主機名稱
$username = "if0_39155124";      // 改成你的使用者
$password = "TtuRc76j3OipetV";           // 改成你的密碼
$dbname = "if0_39155124_testdb"; // 改成你的資料庫名稱

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$data = [];

while($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);
$conn->close();
?>
