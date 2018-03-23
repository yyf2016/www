<html>
<head>
	<meta charset="utf-8">
	<title>home.php</title>
</head>
<body>
	<div id="header">
		<div id="divleft">
		<img src="/myshop1/home/public/images/yun.jpg" align="left">
		<span>Y1-myshop[<a href="/myshop1/home/index.php">商场首页</a>]</span>
	    </div>
	    <div id="divright">
	    	<span>欢迎<?php
	    	    if(isset($_SESSION['username'])){ 
	    	            echo $_SESSION['username'];
	    	       }else{
	    	       	    echo "<a href='/myshop1/home/user/login.php'>登录</a> ";
	    	       	    echo "| <a href='/myshop1//home/user/register.php'>注册</a>";
	    	       }
	    	?></span>
	    	<span><a href="/myshop1/home/user/logout.php">退出</a></span>
	    	<span>|</span>
	    	<span><a href="/myshop1/home/homeinfo/account.php">购物车</a></span>
	    </div>
	</div>
</body>
</html>