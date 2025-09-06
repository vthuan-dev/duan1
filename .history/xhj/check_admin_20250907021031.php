<?php
// Kiểm tra thông tin admin trong database
$host = 'localhost';
$dbname = 'jys1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Kiểm tra bảng tw_admin
    $stmt = $pdo->query("SHOW TABLES LIKE 'tw_admin'");
    if ($stmt->rowCount() > 0) {
        echo "✅ Bảng tw_admin tồn tại<br><br>";
        
        // Hiển thị cấu trúc bảng
        echo "<strong>Cấu trúc bảng tw_admin:</strong><br>";
        $stmt = $pdo->query("DESCRIBE tw_admin");
        while ($row = $stmt->fetch()) {
            echo "- " . $row['Field'] . " (" . $row['Type'] . ")<br>";
        }
        echo "<br>";
        
        // Hiển thị dữ liệu admin
        echo "<strong>Dữ liệu trong bảng tw_admin:</strong><br>";
        $stmt = $pdo->query("SELECT * FROM tw_admin");
        $admins = $stmt->fetchAll();
        
        if (count($admins) > 0) {
            foreach ($admins as $admin) {
                echo "ID: " . $admin['id'] . "<br>";
                echo "Username: " . $admin['username'] . "<br>";
                echo "Password (MD5): " . $admin['password'] . "<br>";
                if (isset($admin['email'])) echo "Email: " . $admin['email'] . "<br>";
                if (isset($admin['status'])) echo "Status: " . $admin['status'] . "<br>";
                echo "---<br>";
            }
        } else {
            echo "❌ Không có admin nào trong database<br>";
        }
    } else {
        echo "❌ Bảng tw_admin không tồn tại<br>";
        
        // Kiểm tra các bảng khác có thể chứa thông tin admin
        echo "<br><strong>Tất cả bảng trong database:</strong><br>";
        $stmt = $pdo->query("SHOW TABLES");
        while ($row = $stmt->fetch()) {
            echo "- " . $row[0] . "<br>";
        }
    }
    
} catch (PDOException $e) {
    echo "❌ Lỗi kết nối database: " . $e->getMessage();
}
?>
