<?php
// Test file để bypass ThinkPHP
header("Content-Type: text/html;charset=utf-8");

echo "<h1>🎉 Chúc mừng! Website đã hoạt động!</h1>";
echo "<p>Dự án giao dịch tiền điện tử đã được khởi động thành công.</p>";
echo "<p>Thời gian hiện tại: " . date('Y-m-d H:i:s') . "</p>";

// Kiểm tra database connection
$host = '127.0.0.1';
$dbname = 'jiaoyisuo';
$username = 'jiaoyisuo';
$password = 'jiaoyisuo';
$port = '3306';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    echo "<p style='color: green;'>✅ Kết nối database thành công!</p>";
} catch(PDOException $e) {
    echo "<p style='color: red;'>❌ Lỗi kết nối database: " . $e->getMessage() . "</p>";
}

echo "<hr>";
echo "<h2>Hướng dẫn tiếp theo:</h2>";
echo "<ol>";
echo "<li>Truy cập: <a href='http://localhost/jiaoyi-project/xhj/admin/'>Admin Panel</a></li>";
echo "<li>Username: admin</li>";
echo "<li>Password: admin</li>";
echo "</ol>";
?>


