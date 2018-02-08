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
	<title>品牌添加页面</title>
</head>
<body>
	<center>
		<h1>品牌添加页面</h1>
		<form action="insert.php" method="post">
			<table>
				<tr>
					<td>品牌名称：</td>
					<td><input type="input" name="brandname" value=""></td>
				</tr>
				<tr>
					<td>分类名称：</td>
					<td><select name="shopclass_id">
						    <option>--选择品牌--</option>
						    <?php
						         while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
						         	echo "<option value='{$rowShopclass['id']}'>{$rowShopclass['shopname']}</option>";
						         }
						    ?>     
					    </select>
				    </td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="submit"></td>
					<td><input type="reset" name="" value="reset"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>