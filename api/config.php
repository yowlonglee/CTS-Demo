<?php
// $host = 'cts-demo-cts-demo.h.aivencloud.com';
// $dbuser ='root';
// $dbpassword = 'root';
// $dbname = 'demo';

// 建立連線
$conn = new mysqli($host, $dbuser, $dbpassword, $dbname);
// 檢查連線
if ($conn->connect_error) { die("連接失敗 : " . $conn->connect_error); }
?>