<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//header("content-type:text/html;charset=utf-8");

include 'config.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
//echo $_GET['id'];
if(! $conn )
{
    die('连接失败: ' . mysqli_error($conn));
}
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'select num,  url, add_date from go_to_url where num="'.$_GET['id'].'"';
 
mysqli_select_db( $conn, $dbname );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
if($retval->num_rows ==0){//没有匹配的数据
    echo 'ID不存在！';
}
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    //echo base64_decode($row['url']);
    header("Location: ".base64_decode($row['url']));
}
mysqli_close($conn);
?>