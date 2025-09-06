<?php
// Tạo tài khoản admin
$host = 'localhost';
$dbname = 'jys1';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    
    echo "Database connection successful!<br>";
    
    // Kiểm tra bảng admin
    $stmt = $pdo->query("SHOW TABLES LIKE 'tw_admin'");
    if ($stmt->rowCount() > 0) {
        echo "Admin table exists!<br>";
        
        // Kiểm tra có admin nào không
        $stmt = $pdo->query("SELECT * FROM tw_admin");
        $admins = $stmt->fetchAll();
        
        if (count($admins) > 0) {
            echo "Current admins:<br>";
            foreach ($admins as $admin) {
                echo "ID: " . $admin['id'] . ", Username: " . $admin['username'] . "<br>";
            }
        } else {
            echo "No admin found. Creating default admin...<br>";
            
            // Tạo admin mặc định
            $sql = "INSERT INTO tw_admin (username, password, email, create_time, status) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([
                'admin',
                'e10adc3949ba59abbe56e057f20f883e', // MD5 của "123456"
                'admin@example.com',
                time(),
                1
            ]);
            
            if ($result) {
                echo "Admin created successfully!<br>";
                echo "Username: admin<br>";
                echo "Password: 123456<br>";
            } else {
                echo "Failed to create admin<br>";
            }
        }
    } else {
        echo "Admin table does not exist!<br>";
        
        // Tạo bảng admin
        $sql = "CREATE TABLE IF NOT EXISTS `tw_admin` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `username` varchar(50) NOT NULL,
            `password` varchar(32) NOT NULL,
            `email` varchar(100) DEFAULT NULL,
            `create_time` int(11) DEFAULT NULL,
            `status` tinyint(1) DEFAULT '1',
            PRIMARY KEY (`id`)
        )";
        
        if ($pdo->exec($sql)) {
            echo "Admin table created successfully!<br>";
            
            // Tạo admin mặc định
            $sql = "INSERT INTO tw_admin (username, password, email, create_time, status) VALUES (?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $result = $stmt->execute([
                'admin',
                'e10adc3949ba59abbe56e057f20f883e',
                'admin@example.com',
                time(),
                1
            ]);
            
            if ($result) {
                echo "Admin created successfully!<br>";
                echo "Username: admin<br>";
                echo "Password: 123456<br>";
            }
        }
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
