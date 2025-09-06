<?php
require dirname(__FILE__).'/secure.php';
require dirname(__FILE__).'/secure_config.php';

// Define debug constants
if (!defined('M_DEBUG')) {
    define('M_DEBUG', false);
}
if (!defined('MSCODE')) {
    define('MSCODE', false);
}

return array(
	'DB_TYPE'              => DB_TYPE,
	'DB_HOST'              => DB_HOST,
	'DB_NAME'              => DB_NAME,
	'DB_USER'              => DB_USER,
	'DB_PWD'               => DB_PWD,
	'DB_PORT'              => DB_PORT,
	'DB_CHARSET'           => 'utf8',
	'DB_PREFIX'            => 'tw_',
	'ACTION_SUFFIX'        => '',
	'MULTI_MODULE'         => true,
	'MODULE_DENY_LIST'     => array('Common', 'Runtime'),
	'MODULE_ALLOW_LIST'    => array('Home', 'Admin', 'Mobile', 'Support','Agent'),
	'DEFAULT_MODULE'       => WHERECOME,
	'URL_CASE_INSENSITIVE' => false,
	'URL_MODEL'            => 1,
	'URL_HTML_SUFFIX'      => '',
	'LANG_SWITCH_ON'       => true, //开启多语言支持开关
	
	'LANG_AUTO_DETECT'     => true, // 自动侦测语言
	'DEFAULT_LANG'         => 'en-us', // 默认语言
	'LANG_LIST'     	   => 'zh-cn,en-us,fr-fr,de-de,it-it,ja-jp,ko-kr,tr-tr',
	'VAR_LANGUAGE'         => 'Lang', //默认语言切换变量
    'NATION'     =>array('zh_CN'=>'中国','en_US'=>'美国',),

	'TMPL_ACTION_ERROR' => './Public/error.html', //默认错误跳转对应的模板文件优选源码库  www.yxymk.net
	'TMPL_ACTION_SUCCESS' => './Public/success.html', //默认成功跳转对应的模板文件
	
	// Static file configurationF
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => '/jiaoyi-project/xhj/Public',
		'__STATIC__' => '/jiaoyi-project/xhj/Public/Home/static',
		'__CSS__' => '/jiaoyi-project/xhj/Public/Home/static/css',
		// '__JS__' => '/jiaoyi-project/xhj/Public/Home/static/js',
		'__IMG__' => '/jiaoyi-project/xhj/Public/Home/static/img',
	),
	);
?>