<?php
// 定义系统编码
header("Content-Type: text/html;charset=utf-8");

// 定义应用路径
define('APP_PATH', './Application/');
//定义根路径
define('APP_REALPATH',dirname(__FILE__));
// 定义缓存路径
define('RUNTIME_PATH', './Runtime/');
// 定义备份路径
define('DATABASE_PATH', './Database/');
// 定义钱包路径
define('COIN_PATH', './Coin/');
// 定义备份路径
define('UPLOAD_PATH', './Upload/');

// 后台安全入口
//define('ADMIN_KEY', 'usdz');

// 定义数据库类型
define('DB_TYPE', 'mysql');
// 定义数据库地址
define('DB_HOST', '127.0.0.1');
// 定义数据库名
define('DB_NAME', 'jiaoyisuo');
// 定义数据库账号
define('DB_USER', 'jiaoyisuo');
// 定义数据库密码
define('DB_PWD', 'jiaoyisuo');
// 定义数据库端口
define('DB_PORT', '3306');

// 开启演示模式
define('APP_DEMO',1);
// 短信模式 0是演示模式  1是正式模式
define('MOBILE_CODE',1);
// 开始调试模式
define('M_DEBUG', 1);
//平台币
define('PT_COIN', 'USDZ');
// 定义授权码
define('MSCODE', '95D3A7E98EE9F913B462B87C73DS');
// 定义互转APIKEY,两端必须一致
define('BBAPIKEY', 'RkAyda9huaQYux6R');

function wherecome()
{
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
        return true;
    }
    if (isset($_SERVER['HTTP_CLIENT']) && ('PhoneClient' == $_SERVER['HTTP_CLIENT'])) {
        return true;
    }
    if (isset($_SERVER['HTTP_VIA'])) {
        return stristr($_SERVER['HTTP_VIA'], 'wap') ? true : false;
    }

    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $clientkeywords = array('nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-', 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu', 'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini', 'operamobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile');

        if (preg_match('/(' . implode('|', $clientkeywords) . ')/i', strtolower($_SERVER['HTTP_USER_AGENT']))) {
            return true;
        }
    }

    if (isset($_SERVER['HTTP_ACCEPT'])) {
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && ((strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false) || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
            return true;
        }
    }

    return false;
}

// 判断访问入口
if(wherecome()) {
    define('WHERECOME','Mobile');
} else {
    //define('WHERECOME','Mobile');
    define('WHERECOME','Home');
}

// 尝试加载ThinkPHP，如果失败则显示简单页面
try {
    // 引入入口文件
    require __DIR__ . '/ThinkPHP/ThinkPHP.php';
} catch (Exception $e) {
    // ThinkPHP加载失败，显示简单页面
    ?>
    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hệ thống giao dịch tiền điện tử</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background: #f5f5f5; }
            .container { max-width: 1200px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
            .header { text-align: center; margin-bottom: 30px; }
            .header h1 { color: #2c3e50; margin-bottom: 10px; }
            .header p { color: #7f8c8d; font-size: 18px; }
            .nav { display: flex; justify-content: center; gap: 20px; margin: 30px 0; flex-wrap: wrap; }
            .nav a { background: #3498db; color: white; padding: 12px 24px; text-decoration: none; border-radius: 5px; transition: background 0.3s; }
            .nav a:hover { background: #2980b9; }
            .info { background: #ecf0f1; padding: 20px; border-radius: 5px; margin: 20px 0; }
            .status { color: #27ae60; font-weight: bold; }
            .warning { color: #e74c3c; font-weight: bold; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <h1>🚀 Hệ thống giao dịch tiền điện tử</h1>
                <p>Chào mừng đến với nền tảng giao dịch cryptocurrency chuyên nghiệp</p>
            </div>
            
            <div class="info">
                <h3>⚠️ Trạng thái hệ thống:</h3>
                <p class="warning">🟡 ThinkPHP Framework đang gặp sự cố</p>
                <p>Thời gian hiện tại: <?php echo date('Y-m-d H:i:s'); ?></p>
                <p>Server: <?php echo $_SERVER['SERVER_NAME']; ?></p>
                <p>Lỗi: <?php echo htmlspecialchars($e->getMessage()); ?></p>
            </div>
            
            <div class="nav">
                <a href="Admin/Login/index">🔐 Đăng nhập Admin</a>
                <a href="Home/Index/index">🏠 Trang chủ</a>
                <a href="Mobile/Index/index">📱 Mobile</a>
                <a href="simple.php">🧪 Test Page</a>
            </div>
            
            <div class="info">
                <h3>📋 Thông tin đăng nhập:</h3>
                <p><strong>Admin Panel:</strong></p>
                <ul>
                    <li>Username: <code>admin</code></li>
                    <li>Password: <code>admin</code></li>
                    <li>Email: <code>88888888@qq.com</code></li>
                </ul>
            </div>
            
            <div class="info">
                <h3>🔧 Tính năng chính:</h3>
                <ul>
                    <li>Giao dịch tiền điện tử</li>
                    <li>Quản lý ví điện tử</li>
                    <li>Hệ thống mining (đào coin)</li>
                    <li>Hợp đồng giao dịch</li>
                    <li>Quản lý người dùng</li>
                    <li>API giao dịch</li>
                </ul>
            </div>
            
            <div class="info">
                <h3>🛠️ Hướng dẫn sửa lỗi:</h3>
                <p>Để sửa lỗi ThinkPHP, hãy:</p>
                <ol>
                    <li>Kiểm tra database connection</li>
                    <li>Import file database jys1.sql</li>
                    <li>Kiểm tra quyền truy cập thư mục</li>
                    <li>Restart Apache service</li>
                </ol>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>