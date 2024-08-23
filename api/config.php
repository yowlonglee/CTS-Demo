<?php
// 建立連線
$uri = "mysql://avnadmin:" . getenv('dbpassword') . "@news-cts-demo.h.aivencloud.com:25552/defaultdb?ssl-mode=REQUIRED";
$fields = parse_url($uri);
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];;
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert='ca.pem'";

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);

    $result = $db->query("SELECT * FROM news ORDER BY datetime DESC");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>