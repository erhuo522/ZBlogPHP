<!DOCTYPE HTML>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8"/>
    <title><?php if (isset($zbp)) { ?><?php  echo $zbp->name;  ?>-<?php } ?>404错误</title>
    <style type="text/css">
     body{
	margin:0;
	padding:0;
	font:14px/1.6 Arial,Sans-serif;
     } 


     .error_text{
	font-size: 32px;
	width:320px;
	height:140px;
	text-align:center;
	padding-top: 100px;
	margin:0 auto;
     }

     .link{
	width:320px;
	margin:0 auto;
     }

     a.home_bnt{
	background: none repeat scroll 0 0 #e5f0f6;
	border:1px solid #bfd0d7;
	border-radius: 5px;
	color: #555;
	font-family: 微软雅黑;
	font-size: 14px;
	margin-left: 208px;
	padding: 6px 10px;
	text-decoration:none;
        margin-left: 120px;
     }
    </style>
</head>
<body>
    <p class="error_text">404，页面找不到！</p>
    <p class="link">
        <a href="/" class="home_bnt">返回首页</a>
    </p>
</body>
</html>
