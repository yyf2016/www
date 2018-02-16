<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");


?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>添加商品</title>
</head>
<body>
	<center>
		<h1>添加商品</h1>
		<form action="insert.php" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>输入商品名字：</td>
					<td><input type="text" name="shopname" value=""></td>
				</tr>
				<tr>
					<td>输入商品价钱：</td>
					<td><input type="text" name="price" value=""></td>
				</tr>
				<tr>
					<td>库存量：</td>
					<td><input type="text" name="stock" value=""></td>
				</tr>
				<tr>
					<td>是否上架：</td>
					<td>
						<input type="radio" name="upshelf" value="1">上架
						<input type="radio" name="upshelf" value="0" checked>下架
					</td>
				</tr>
				<tr>
					<td>上传图片：</td>
					<td><input type="file" name="image" value=""></td>
				</tr>
				<tr>
					<td>选择分类：</td>
					<td>
						<select name="brand_id">
							<option>---选择分类---</option>
							<?php
							$sqlShopclass="select * from shopclass order by id";
							$rstShopclass=mysql_query($sqlShopclass);
							while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
								echo "<option disabled>{$rowShopclass['shopname']}</option>";
								$sqlShopclassBrand="select * from brand where brand.shopclass_id={$rowShopclass['id']}";
								$rstShopclassBrand=mysql_query($sqlShopclassBrand);
								while($rowShopclassBrand=mysql_fetch_assoc($rstShopclassBrand)){
									echo "<option value='{$rowShopclassBrand['shopclass_id']}'>|---{$rowShopclassBrand['brandname']}</option>";
								}
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