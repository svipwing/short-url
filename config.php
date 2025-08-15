<?php
    // 此文件为配置文件
    // 请务必在运行 install.php 前，填写本文件，删除 install 目录后，必须保留本文件，否则程序无法运行

    function getBaseURL() {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $protocol = 'https';
        }
        $host = $_SERVER['HTTP_HOST'];

        $requestUri = $_SERVER['REQUEST_URI'];
        $questionMarkPosition = strpos($requestUri, '?');
        if ($questionMarkPosition !== false) {
            $requestUri = substr($requestUri, 0, $questionMarkPosition);
        }
        $lastSlashPosition = strrpos($requestUri, '/');
            if ($lastSlashPosition === 0) {
            $basePath = '';
        } else {
            $basePath = substr($requestUri, 0, $lastSlashPosition);
        }

        return $protocol . '://' . $host . $basePath.'/';
    }

    $my_url = getBaseURL();

    $dbhost = 'localhost';  // MySQL 主机地址
    $dbuser = 'user_name';       // 数据库用户名
    $dbpass = 'user_password';   // 数据库密码
    $dbname = 'dbbase_name';     // 数据库名称
    $admin_password = 'md5_text';   // 管理面板的密码 md5 值
    $my_url = 'url';
    // 当前项目根目录网址
    // 例如：http://example.com/short_url/、http://example.com/、https://baidu.com/、http://a.b.com/s/，记得要加http/https协议，末尾加“/”
?>