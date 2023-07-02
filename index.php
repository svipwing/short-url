<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'config.php';

if(isset($_GET['id'])){
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }

    mysqli_query($conn , "set names utf8");
 
    $sql = 'select num,  url, add_date from go_to_url where num="'.$_GET['id'].'"';

    mysqli_select_db( $conn, $dbname );
    $retval = mysqli_query( $conn, $sql );

    if(! $retval )
    {
        die('无法读取数据: ' . mysqli_error($conn));
    }

    if($retval->num_rows ==0){
        die('ID不存在！');
    }

    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
    {
        header("Location: ".base64_decode($row['url']));
    }

    mysqli_close($conn);
}else{
    die('ID参数不存在');
}
?>