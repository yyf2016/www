<div class='header'>
	<img src="/myshop3/home/public/images/logo.jpg" alt="">	
	<span class='header-left'>myshop3[<a href='/myshop3/home/index.php'>首页</a>]</span>
	<span class='header-right'>
		<?php 
			if($_SESSION[userlogin]){
				echo "欢迎 <a href='/myshop3/home/person/index.php?action=show'>".$_SESSION[username]."</a> 回家 <a href='/myshop3/home/login/logout.php'>退出</a> | ";
			}else{
				echo "<a href='/myshop3/home/login/login.php'>登录</a> | ";
				echo "<a href='/myshop3/home/login/reg.php'>注册</a> | ";
			}
		 ?>
		
		<a href='/myshop3/home/cart/indexcart.php'>购物车</a>
	</span>
</div>