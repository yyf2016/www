<?php 
$id=$_GET['id'];
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlShop="select * from shop where id={$id}";
$rstShop=mysql_query($sqlShop);
$rowShop=mysql_fetch_assoc($rstShop);
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>修改商品</title>
</head>
<body>
	<center>
		<h1>修改商品</h1>
		<form action="update.php" method="post" enctype="multipart/form-data">
			<table border=1px>
				<tr>
					<td>商品ID：</td>
					<td><input type="text" name="id" value="<?php echo $rowShop['id']; ?>" disabled></td>
				</tr>
				<tr>
					<td>商品名称：</td>
					<td><input type="text" name="shopname" value="<?php echo $rowShop['shopname'];?>"></td>
				</tr>
				<tr>
					<td>商品价格:</td>
					<td><input type="text" name="price" value="<?php echo $rowShop['price'];?>"></td>
				</tr>
				<tr>
					<td>商品库存:</td>
					<td><input type="text" name="stock" value="<?php echo $rowShop['stock'];?>"></td>
				</tr>
				<tr>
					<td>是否上架:</td>
					
					<?php 
					if($rowShop['upshelf']==0){
						echo "<td><input type='radio' name='upshelf' value=1>是";
						echo "<input type='radio' name='upshelf' value=0 checked>否</td>";
					}else{
						echo "<td><input type='radio' name='upshelf' value=1 checked>是";
						echo "<input type='radio' name='upshelf' value=0>否</td>";
					}
					
					?>
				
				</tr> 
				<tr>
					<td>商品品牌:</td>
					<td>
						<select name="brand_id">
							<option value="">--请选择商品品牌--</option>
						<?php 
						    $sqlShopclass="select * from shopclass order by id";
						    $rstShopclass=mysql_query($sqlShopclass);
						    while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
						    	echo"<option value='{$rstShopclass['id']}' disabled style='color:red;font-size:20px'>{$rowShopclass['shopname']}</option>";
						    	$conn=mysql_connect("localhost","root","123asd");
						    	mysql_select_db("myshop1");
						    	mysql_query("set names utf8");
						    	$sqlBrand="select * from brand where shopclass_id={$rowShopclass['id']}";
						    	$rstBrand=mysql_query($sqlBrand);
						    	while($rowBrand=mysql_fetch_assoc($rstBrand)){
							    		if($rowShop['brand_id']==$rowBrand['id']){
							    		echo"<option value='{$rowBrand['id']}' selected>|---{$rowBrand['brandname']}</option>";
							    	}else{
							    		echo"<option value='{$rowBrand['id']}'>|---{$rowBrand['brandname']}</option>";
							    	}
						    	}
						    }
						?>
					    </select>
					</td>
				</tr>
				<tr>
					<td>商品图片:</td>
					<td><input type="file" name="image" value=""></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $rowShop['id'] ?>">
					<input type="hidden" name="image" value="<?php echo $rowShop['image'] ?>">
					<td><input type="submit" name="" value="submit"></td>
					<td><input type="reset" name="" value="reset"></td>
				</tr>
			</table>
		</form>
		<p><b>商品原图片：</b></p>
		<p><img src="../../public/upload/s_<?php echo $rowShop['image'] ?>" style="border:2px solid #ccc"></p>
	</center>