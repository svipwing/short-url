$(function(){
  re = /http/;
  
  $("#start").click(function(){
    
    if(re.test($('#link').val())){
        
      $.post("add.php",{'url':$('#link').val()},function(data,status){
        $('#message').text("短链接地址: " + data);
      });
      
    }else{
      swal("提示","链接不规范，必须使用http://或https://开头","error");
    }
    
  });
});