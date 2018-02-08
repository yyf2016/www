<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlShopclass="select * from shopclass order by id";
$rstShopclass=mysql_query($sqlShopclass);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品分类</title>
	</head>

<body>
	<center>
		<h1>商品分类</h1>
		<table border=1px;>
			<tr>
				<th>ID</th>
				<th>商品分类</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php
			while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
				echo "<tr>";
				echo "<td>{$rowShopclass['id']}</td>";
				echo "<td>{$rowShopclass['shopname']}</td>";
				echo "<td><a href='edit.php?id={$rowShopclass['id']}'>修改</td>";
				echo "<td><a href='delete.php?id={$rowShopclass['id']}'>删除</td>";
				echo "</tr>";

			}
			?>
		</table>
	</center>
</body>
</html>