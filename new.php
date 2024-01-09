<?php header("content-type:text/html;charset=utf-8"); ?>

<html>
<head>

  <title>短链接系统</title>
  <script src="./js/jquery.js"></script>
  <script src="./js/sw.js"></script>
  
  <link rel="stylesheet" href="./css/main.css" />

</head>
<body>
  <script src="./js/main.js"></script>
  
  <center>
    
    <div>
      <h1 style="margin-bottom:20px;">短链接系统</h1>
    
      <p style="margin-bottom:20px;">
        长链接：<input type='text' id='link' value='http://' />
      </p>
    
      <button id='start' style="margin-bottom:20px;">生成短链接</button>
    
      <p id='message'>您的短链接：http://请先生成短链接.com</p>
    </div>
  </center>
</body>
</html>