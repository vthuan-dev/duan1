<?php

return [
    'TMPL_PARSE_STRING' => [
        '__UPLOAD__' => '/jiaoyi-project/xhj/Upload', 
        '__PUBLIC__' => '/jiaoyi-project/xhj/Public',
        '__IMG__' => '/jiaoyi-project/xhj/Public/' . MODULE_NAME . '/images',
        '__CSS__' => '/jiaoyi-project/xhj/Public/' . MODULE_NAME . '/css',
        '__JS__' => '/jiaoyi-project/xhj/Public/' . MODULE_NAME . '/js',
        '__WEBTITLE__' => "管理中心 -ADMIN EX"
    ],
    
    'TMPL_ACTION_ERROR' => './Public/admin_error.html', //默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => './Public/admin_success.html', //默认成功跳转对应的模板文件
];
?>