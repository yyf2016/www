  <?php
$shop_id=$_GET["shop_id"];
$code=$_GET["code"];
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlShop="select shop.id,shop.shopname shopp,shop.price,shop.stock,shop.upshelf,shop.image,brand.brandname,shopclass.shopname shopn from shop,brand,shopclass where shop.id={$shop_id} and shop.brand_id=brand.id and brand.shopclass_id=shopclass.id ";
$rstShop_brand_shopclass=mysql_query($sqlShop);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>查询订单商品详情</title>
</head>
<body>
	<center>
		<h1>查询订单商品详情</h1>
		<table border=1px>
			<tr>
				<th>订单号</th>
				<th>商品名称</th>
				<th>商品价钱</th>
				<th>库存</th>
				<th>上架</th>
				<th>图片</th>
				<th>品牌</th>
				<th>分类</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
			     while($rowSBS=mysql_fetch_assoc($rstShop_brand_shopclass)){
			     	echo "<tr>";
			     	echo "<td>{$code}</td>";
			     	echo "<td>{$rowSBS['shopp']}</td>";
			     	echo "<td>{$rowSBS['price']}  </td>";
			     	echo "<td>{$rowSBS['stock']}  </td>";
			     	if($rowSBS['upshelf']==0){
			     		echo "<td>下架</td>";
			     	}else{
			     		echo "<td>上架</td>";
			     	}
			     	echo "<td><img src='../../public/upload/s_".$rowSBS['image']."'></td>";
			     	echo "<td>{$rowSBS['brandname']}</td>";
			     	echo "<td>{$rowSBS['shopn']}</td>";
			     	echo "<td><a href='edit.php?id={$rowSBS['id']}'>修改</td>";
                    echo "<td><a href='delete.php?id={$rowSBS['id']}'>删除</td>";
			     	echo "</tr>";

			     }
			 ?>
		</table>
	</center>
</body>
</html>