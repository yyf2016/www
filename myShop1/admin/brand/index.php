<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlBrand="select brand.id,brand.brandname,shopclass.shopname from brand, shopclass where brand.shopclass_id=shopclass.id order by brand.id";
$rstBrand=mysql_query($sqlBrand);

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>品牌查看.php</title>
</head>
<body>
	<center>
		<h1>查看品牌</h1>
		<table border=1px>
			<tr>
				<th>ID</th>
				<th>品牌名称</th>
				<th>分类</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php
			while($rowBrand=mysql_fetch_assoc($rstBrand)){
				echo "</tr>";
				echo "<td>{$rowBrand['id']}</td>";
				echo "<td>{$rowBrand['brandname']}</td>";
				echo "<td>{$rowBrand['shopname']}</td>";
				echo "<td><a href='edit.php?id={$rowBrand['id']}'>修改</a>";
				echo "<td><a href='delete.php?id={$rowBrand['id']}'>删除</a>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</body>
</html>