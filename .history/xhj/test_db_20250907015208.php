<?php
// Test database connection
$host = 'localhost';
$dbname = 'jys1';
$username = 'root';
$password = '1001';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
    echo "Database connection successful!<br>";
    
    // Check if admin table exists
    $stmt = $pdo->query("SHOW TABLES LIKE 'tw_admin'");
    if ($stmt->rowCount() > 0) {
        echo "Admin table exists!<br>";
        
        // Check admin users
        $stmt = $pdo->query("SELECT * FROM tw_admin LIMIT 1");
        $admin = $stmt->fetch();
        if ($admin) {
            echo "Admin user found: " . $admin['username'] . "<br>";
        } else {
            echo "No admin users found<br>";
        }
    } else {
        echo "Admin table does not exist - need to import database!<br>";
    }
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
}
?>
