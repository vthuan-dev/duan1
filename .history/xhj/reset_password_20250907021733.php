<?php
// Reset password admin
$host = 'localhost';
$dbname = 'jys1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // MD5 của password "123456"
    $new_password = md5('123456'); // e10adc3949ba59abbe56e057f20f883e
    
    echo "Đang reset password cho admin...<br>";
    echo "Password mới: 123456<br>";
    echo "MD5 hash: " . $new_password . "<br><br>";
    
    // Update password
    $sql = "UPDATE tw_admin SET password = ? WHERE username = 'admin'";
    $stmt = $pdo->prepare($sql);
    $result = $stmt->execute([$new_password]);
    
    if ($result) {
        echo "✅ <strong>Password đã được reset thành công!</strong><br><br>";
        echo "Thông tin đăng nhập:<br>";
        echo "- Username: <strong>admin</strong><br>";
        echo "- Password: <strong>123456</strong><br><br>";
        
        // Kiểm tra lại dữ liệu
        $stmt = $pdo->query("SELECT * FROM tw_admin WHERE username = 'admin'");
        $admin = $stmt->fetch();
        
        echo "Dữ liệu sau khi update:<br>";
        echo "- Username: " . $admin['username'] . "<br>";
        echo "- Password (MD5): " . $admin['password'] . "<br>";
        echo "- Email: " . $admin['email'] . "<br>";
        echo "- Status: " . $admin['status'] . "<br>";
        
    } else {
        echo "❌ Không thể reset password!<br>";
    }
    
} catch (PDOException $e) {
    echo "❌ Lỗi: " . $e->getMessage();
}
?>
