<?php
header("content-type:text/html;charset=utf-8");

include '../config.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
    die('数据库连接失败: ' . mysqli_error($conn));
}

echo '数据库连接成功，开始新建数据表……<br />';

$sql = "CREATE TABLE go_to_url( ".
        "num INT NOT NULL AUTO_INCREMENT, ".
        "url VARCHAR(450) NOT NULL, ".
        "ip VARCHAR(50) NOT NULL, ".
        "add_date DATE, ".
        "PRIMARY KEY ( num ))ENGINE=InnoDB DEFAULT CHARSET=utf8; ";

mysqli_select_db( $conn, $dbname );

$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('数据表创建失败: ' . mysqli_error($conn));
}

echo "数据表创建成功！您现在可以开始使用了。\n";

mysqli_close($conn);
?>