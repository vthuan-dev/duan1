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

// 开启调试模式
if (!defined('APP_DEBUG')) {
    define('APP_DEBUG', true);
}

// 设置时区
date_default_timezone_set('Asia/Shanghai');

// 判断是否手机端访问
function wherecome() {
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($agent, 'Mobile') !== false || strpos($agent, 'Android') !== false || strpos($agent, 'iPhone') !== false) {
            return true;
        }
    }
    return false;
}

if (wherecome()) {
    define('WHERECOME','Mobile');
} else {
    define('WHERECOME','Home');
}

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>
