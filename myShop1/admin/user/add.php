<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>user添加网页</title>
</head>
<body>
	<center>
		<p><h1>添加用户</h1></p>
		<form action="insert.php" method="post">
			<table >
				<tr>
					<td>用户名字</td>
					<td><input type="input" name="username" value=""></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>重新输入密码</td>
					<td><input type="repassword" name="repassword" value=""></td>
				</tr>
				<tr>
					<td>注册时间</td>
					<td><input type="text" name="regtime" value="<?php echo date("Y-m-d H:i:s",time());?>"</td>
				</tr>
				<tr>
					<td>是否管理员</td>
					<td><input type="radio" name="isAdmin" value="1">是<input type="radio" name="isAdmin" value="0">不是</td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="提交"></td>
					<td><input type="reset" name=""  value="重置"></td>
				</tr>
			</table>
		</form>
	</center>
	</body>
	</html>