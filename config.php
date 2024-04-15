<?php
    //此文件为配置文件
    //请务必在运行install.php之前，填写本文件，删除install目录后，必须保留本文件，否则程序无法运行
    // 自动获取基础URL的函数
    function getBaseURL() {
        $protocol = 'http';
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
            $protocol = 'https';
        }
        $host = $_SERVER['HTTP_HOST'];

        // 移除文件名和查询字符串
        $requestUri = $_SERVER['REQUEST_URI'];
        $questionMarkPosition = strpos($requestUri, '?');
        if ($questionMarkPosition !== false) {
            $requestUri = substr($requestUri, 0, $questionMarkPosition);
        }
        $lastSlashPosition = strrpos($requestUri, '/');
            if ($lastSlashPosition === 0) {
            // 如果是根目录，不需要额外的斜杠
            $basePath = '';
        } else {
            // 保留最后一个斜杠，构建基础路径
            $basePath = substr($requestUri, 0, $lastSlashPosition);
        }

        // 构建并返回基础URL
        return $protocol . '://' . $host . $basePath.'/';
    }
// 使用函数获取并设置$my_url

    $my_url = getBaseURL();

    $dbhost = 'localhost';  // mysql服务器主机地址
    $dbuser = 'user_name';            // mysql用户名
    $dbpass = 'user_password';          // mysql密码
    $dbname = 'dbbase_name';     //mysql数据库名称
    $admin_password = 'md5_text';   //admin管理面板的密码，需要填入密码的md5值
    $my_url = 'url';    //当前项目根目录网址，例如：http://xxx.com/short_url/、http://aaa.top/、https://b.cn/、http://a.b.com/s/，记得要加http/https协议，末尾加“/”
?>