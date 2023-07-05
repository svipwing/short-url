<?php
header("content-type:text/html;charset=utf-8");

include 'config.php';

if(isset($_POST['url'])){
    if(strpos($_POST['url'], 'http') !== false){
        echo '';
    }else{
        die('链接必须使用 http://或https:// 开头');
    }
    
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn )
    {
        die('连接失败: ' . mysqli_error($conn));
    }

    mysqli_query($conn , "set names utf8");
 
    $t = addcslashes(mysqli_real_escape_string($conn, base64_encode($_POST['url'])), "%_");
    $ip_t = $_SERVER["REMOTE_ADDR"];

    $sql = "select num from go_to_url where url='$t'";
 
    mysqli_select_db( $conn, $dbname );
    $retval = mysqli_query( $conn, $sql );
 
    if($retval->num_rows ==0){
        $sql = "INSERT INTO go_to_url ".
                "(url,ip,add_date) ".
                "VALUES ".
                "('$t','$ip_t',NOW())";

        $retval = mysqli_query( $conn, $sql );

        if(! $retval )
        {
            die('无法插入数据: ' . mysqli_error($conn));
        }

        $sql = 'SELECT MAX(num) FROM go_to_url';

        $retval = mysqli_query( $conn, $sql );

        while($row = mysqli_fetch_array($retval)){
            echo $my_url.'?id='.$row["MAX(num)"];
        }
    }else{
        while($row = mysqli_fetch_array($retval)){
            echo $my_url.'?id='.$row["num"];
        }
    }

    mysqli_close($conn);
}else{
    die('URL参数缺失！');
}
?>