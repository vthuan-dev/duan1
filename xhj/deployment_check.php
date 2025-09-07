<?php
/**
 * Script kiểm tra và sửa lỗi deployment
 * Chạy script này trên server để kiểm tra các vấn đề
 */

echo "<h2>Kiểm tra cấu hình deployment</h2>";

// 1. Kiểm tra PHP version
echo "<h3>1. PHP Version:</h3>";
echo "PHP Version: " . phpversion() . "<br>";

// 2. Kiểm tra các extension cần thiết
echo "<h3>2. PHP Extensions:</h3>";
$required_extensions = ['mysqli', 'curl', 'gd', 'mbstring', 'openssl'];
foreach ($required_extensions as $ext) {
    if (extension_loaded($ext)) {
        echo "✓ $ext: OK<br>";
    } else {
        echo "✗ $ext: MISSING<br>";
    }
}

// 3. Kiểm tra quyền ghi file
echo "<h3>3. Quyền ghi file:</h3>";
$writable_dirs = ['./Runtime', './Upload', './Public'];
foreach ($writable_dirs as $dir) {
    if (is_dir($dir)) {
        if (is_writable($dir)) {
            echo "✓ $dir: Writable<br>";
        } else {
            echo "✗ $dir: Not writable<br>";
        }
    } else {
        echo "✗ $dir: Directory not found<br>";
    }
}

// 4. Kiểm tra kết nối database
echo "<h3>4. Database Connection:</h3>";
try {
    // Đọc config database
    if (file_exists('./Application/Common/Conf/secure_config.php')) {
        include './Application/Common/Conf/secure_config.php';
        
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME, DB_PORT);
        
        if ($mysqli->connect_error) {
            echo "✗ Database connection failed: " . $mysqli->connect_error . "<br>";
        } else {
            echo "✓ Database connection: OK<br>";
            $mysqli->close();
        }
    } else {
        echo "✗ Database config file not found<br>";
    }
} catch (Exception $e) {
    echo "✗ Database error: " . $e->getMessage() . "<br>";
}

// 5. Kiểm tra file .htaccess
echo "<h3>5. .htaccess file:</h3>";
if (file_exists('.htaccess')) {
    echo "✓ .htaccess file exists<br>";
    if (is_readable('.htaccess')) {
        echo "✓ .htaccess is readable<br>";
    } else {
        echo "✗ .htaccess is not readable<br>";
    }
} else {
    echo "✗ .htaccess file not found<br>";
}

// 6. Kiểm tra các file quan trọng
echo "<h3>6. Important files:</h3>";
$important_files = [
    './index.php',
    './ThinkPHP/ThinkPHP.php',
    './Application/Common/Conf/config.php'
];

foreach ($important_files as $file) {
    if (file_exists($file)) {
        echo "✓ $file: Exists<br>";
    } else {
        echo "✗ $file: Missing<br>";
    }
}

// 7. Kiểm tra đường dẫn hiện tại
echo "<h3>7. Current paths:</h3>";
echo "Document root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Script filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";

// 8. Gợi ý sửa lỗi
echo "<h3>8. Gợi ý sửa lỗi:</h3>";
echo "<ul>";
echo "<li>Nếu database connection failed: Cập nhật thông tin database trong secure_config.php</li>";
echo "<li>Nếu directory not writable: Chạy lệnh chmod 755 hoặc 777 cho các thư mục Runtime, Upload</li>";
echo "<li>Nếu .htaccess not found: Copy file .htaccess_production thành .htaccess</li>";
echo "<li>Nếu missing extensions: Cài đặt các PHP extension cần thiết</li>";
echo "</ul>";

echo "<h3>9. Commands để fix trên server:</h3>";
echo "<pre>";
echo "# Set permissions\n";
echo "chmod 755 Runtime/\n";
echo "chmod 755 Upload/\n";
echo "chmod 755 Public/\n";
echo "\n# Copy production config\n";
echo "cp .htaccess_production .htaccess\n";
echo "\n# Check Apache/Nginx error logs\n";
echo "tail -f /var/log/apache2/error.log\n";
echo "# or\n";
echo "tail -f /var/log/nginx/error.log\n";
echo "</pre>";
?>

