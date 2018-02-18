<?php 
$id=$_GET['id'];
$conn=mysql_connect("localhost","root","123asd");
mysql_selected_db("myshop1");
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
					<td><input type="text" name="" value="<?php echo{$rowShop['id']};?>" disabled></td>
				</tr>
				<tr>
					<td>商品名称：</td>
					<td><input type="text" name="shopname" value="<?php echo{$rowShop['shopname']};?>"></td>
				</tr>
				<tr>
					<td>商品价格:</td>
					<td><input type="text" name="price" value="<?php echo{$rowShop['price']};?>"></td>
				</tr>
				<tr>
					<td>商品库存:</td>
					<td><input type="text" name="price" value="<?php echo {$rowShop['stock']};?>"></td>
				</tr>
				<tr>
					<td>是否上架:</td>
					<?php 
					if($rowShop['upshelf']==0){
						echo "<td><input type='radio' name='upshelf' value=0>否</td>";
					}else{
						echo "<td><input type='radio' name='upshelf' value=1>是</td>";
					}
					
					?>
				</tr>
				<tr>
					<td>商品品牌:</td>
					<td>
						<select name="brand_id">
							<option value="">--请选择商品品牌--</option>
						<?php 
						    $sqlBrand="select * from brand order by id";
						    $rstBrand=mysql_query($sqlBrand);
						    $rowBrand=mysql_fetch_assoc($rstBrand);
						    while($rowBrand=mysql_fetch_assoc($sqlBrand)){
						    	if($rowShop['brand_id']==$rowBrand['id']){
						    		echo"<option value='{$rowBrand['id']}' selected>{$rowBrand['brandname']}</option>";
						    	}else{
						    		echo"<option value='{$rowBrand['id']}'>{$rowBrand['brandname']}</option>";
						    	}
						    }
						?>
					    </select>
					</td>
				</tr>
			</table>
		</form>
	</center>