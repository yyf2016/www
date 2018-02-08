<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_GET["id"];
$sqlShopclass="select * from shopclass where id={$id}";
$rstShopclass=mysql_query($sqlShopclass);
$rowShopclass=mysql_fetch_assoc($rstShopclass);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品分类修改</title>
</head>
<body>
	<center>
		<h1>商品分类修改</h1>
		<form action="update.php" method="post">
			<table >
				<tr>
					<td>商品名称：</td>
					<td><input type="input" name="shopname" value="<?php echo $rowShopclass['shopname'];?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="submit"></td>
					<td><input type="reset" name=""  value="reset"></td>
					<td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>