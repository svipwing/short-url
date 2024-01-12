<?php header("content-type:text/html;charset=utf-8"); ?>

<html>
<head>

  <title>短链接系统</title>
  <script src="./js/jquery.js"></script>
  <script src="./js/sw.js"></script>
  <script src="./js/cookie.js"></script>
  
  <link rel="stylesheet" href="./css/main.css" />
  <link rel="stylesheet" href="./css/grid.css" />

</head>
<body>
  <script src="./js/main.js"></script>
  
  <button id="dark" class="btn" style="position:absolute;bottom:0;right:0;font-size:10px;">暗黑模式</button>
  
  <center>
    
    <div class="card">
      <h1 style="margin-bottom:20px;">短链接系统</h1>
    
      <p style="margin-bottom:20px;">
        长链接：<input type='text' id='link' value='http://' />
      </p>
    
      <button id='start' style="margin-bottom:20px;" class="color-blue-full">生成短链接</button>
    
      <p id='message'>您的短链接：http://请先生成短链接.com</p>
    </div>
  </center>
</body>
</html>