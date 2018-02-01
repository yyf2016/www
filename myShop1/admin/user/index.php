<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myShop1");
mysql_query("set names utf8");
$sqlUser="select * from user order by id";
$rstUser=mysql_query($sqlUser);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>user folder index.html</title>
</head>
<body>
	<center>
		<p><h1>用户列表</h1></p>
		<form action="">
			<table border="1px" cellspace="0px">
				<tr>
					<th>ID</th>
					<th>用户名</th>
					<th>密码</th>
					<th>注册时间</th>
					<th>管理员</th>
					<th>修改</th>
					<th>删除</th>
				</tr>
				<?php
				 while($rowUser=mysql_fetch_assoc($rstUser)){
				 	echo "<tr>";
				 	echo "<td>{$rowUser['id']}</td>";
				 	echo "<td>{$rowUser['username']}</td>";
				 	echo "<td>{$rowUser['password']}</td>";
				 	echo "<td>{$rowUser['regtime']}</td>";
				 	echo "<td>{$rowUser['isAdmin']}</td>";
				 	echo "<td><a href='?id={$rowUser['id']}'>修改</a></td>";
				 	echo "<td><a href='?id={$rowUser['id']}'>删除</a></td>";
				 }
				?>
			</table>
		</form>
	</center>