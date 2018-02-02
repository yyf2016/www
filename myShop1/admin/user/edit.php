<?php
$id=$_GET['id'];
$conn=mysql_connect('localhost','root','123asd');
mysql_select_db('myshop1');
mysql_query('set names utf8');
$sqlUser="select * from user where id={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
// print_r($rowUser);
// exit;

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit.php</title>
</head>
<body>
	<center>
	<p><h1>更改用户</h1></p>
	<form action="update.php" method="post">
		<table>
			<tr>
			   <td>用户名字:</td>	
			   <td><input type="input" name="username" value="<?php echo $rowUser['username'];?>"></td>
			</tr>
			<tr>
				<td>密码：</td>
				<td><input type="password" name="password" value=""></td>
			</tr>
			<tr>
				<td>重新输入密码:</td>
				<td><input type="repassword" name="repassword" value=""></td>
			</tr>
			<tr>
				<td>是否管理员:</td>
				<td><input type="radio" name="isAdmin" value="1">是
					<input type="radio" name="isAdmin" value="0">不是
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="" value="submit"></td>
				<td><input type="reset" name="" value="reset"></td>
				<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
			</tr>
		</table>
	</form>
</center>
</body>
</head>
</html>