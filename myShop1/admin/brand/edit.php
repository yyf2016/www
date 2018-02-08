<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_GET["id"];
$sqlBrand="select * from brand where id={$id}";
$rstBrand=mysql_query($sqlBrand);
$rowBrand=mysql_fetch_assoc($rstBrand);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>brand修改界面</title>
</head>
<body>
	<center>
		<h1>brand修改界面</h1>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>品牌名：</td>
					<td><input type="input" name="brandname" value="<?php echo $rowBrand['brandname']?>"></td>
				</tr>
				<tr>
					<td>商品分类：</td>
					<td>
						<select name="shopclass_id">
							<option value="">--选择商品分类--</option>
							<?php
							  $sqlShopclass="select * from shopclass order by id";
							  $rstShopclass=mysql_query($sqlShopclass);
							  while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
							  	if($rowShopclass['id']==$rowBrand['shopclass_id']){
							  		echo "<option value='{$rowShopclass['id']}' selected>{$rowShopclass['shopname']}</option>";
							  	}else{
							  		echo "<option value='{$rowShopclass['id']}'>{$rowShopclass['shopname']}</option>";
							  	}
							  }
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="" value="submit"></td>
					<td><input type="reset" name="" value="reset"></td>
					<td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
				</tr>
			</table>
		</form>
	</center>
	</body>
	</html>