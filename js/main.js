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
  
  function checkDarkMode() {
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      return true;
    } else {
      return false;
    }
  }
  
  function loadUI(){
    $("#dark").text($.cookie("ui")=="true"?"亮色模式":"暗色模式");
    if($.cookie("ui") === undefined){
      $.cookie("ui", "false");
    }
    if ($.cookie("ui") == "true" || checkDarkMode()) {
      $("body").addClass("dark");
    }else{
      $("body").removeClass("dark");
    }
  }
  
  loadUI();
  
  $("#dark").click(function(){
    $.cookie("ui", $.cookie("ui")=="true"?"false":"true");
      
    loadUI();
  });
});