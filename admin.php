<?php
header("content-type:text/html;charset=utf-8");

include 'config.php';

if(isset($_POST['password'])){
    if(md5($_POST['password'])==$admin_password){
        echo '<center><h1>Welcome！</h1>';
    }else{
        echo <<<EOF
<h1>密码错误</h1>
<form method="post" action="admin.php"> 
   <p>密码: <input type="text" name="password"></p>
   <input type="submit" value="验证密码">
</from>
EOF;

        exit();
    }
}else{
    echo <<<EOF
<h1>请输入密码</h1>
<form method="post" action="admin.php"> 
   <p>密码: <input type="text" name="password"></p>
   <input type="submit" value="验证密码">
</from>
EOF;

    exit();
}

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}

mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT num, url, ip, add_date
        FROM go_to_url';
 
mysqli_select_db( $conn, $dbname );
$retval = mysqli_query( $conn, $sql );

if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}

echo '<h2>admin后台</h2>';
echo '<table border="1"><tr><td>编号</td><td>URL地址</td><td>用户IP地址</td><td>添加日期</td></tr>';

while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['num']}</td> ".
         "<td>".base64_decode($row['url'])."</td> ".
         "<td>{$row['ip']} </td> ".
         "<td>{$row['add_date']} </td> ".
         "</tr>";
}

echo '</table></center>';

mysqli_free_result($retval);
mysqli_close($conn);
?>