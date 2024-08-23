<?php
$uri = "mysql://avnadmin:" . getenv('dbpassword') . "@news-cts-demo.h.aivencloud.com:25552/defaultdb?ssl-mode=REQUIRED";
$fields = parse_url($uri);
// 建立連線
// $conn = new mysqli($_ENV["host"], $_ENV["dbuser"], , $_ENV["dbname"]);
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert='ca.pem'";
// 檢查連線
// if ($conn->connect_error) { die("連接失敗 : " . $conn->connect_error); }
try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);

    $results = $db->query("SELECT * FROM news ORDER BY datetime DESC");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>