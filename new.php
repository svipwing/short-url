<?php header("content-type:text/html;charset=utf-8"); ?>

<script src="js/jquery.js"></script>

<script>
$(function(){
    re = /http/;
    $("#b").click(function(){
        if(re.test($('#t').val())){
            $.post("add.php",{'url':$('#t').val()},function(data,status){
                $('#aaa').text("短链接地址: " + data);
            });
        }else{
            alert("链接不规范，必须使用http://或https://开头");
        }
    });
});
</script>

<center>
    <h1>你好，请添加短链接</h1>
    <p>长链接：<input type='text' id='t' value='http://' /> </p>
    <button id='b'>生成短链接</button>
    <p id='aaa'></p>
</center>