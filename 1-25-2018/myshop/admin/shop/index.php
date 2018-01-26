<?php
	mysql_connect('localhost','root','123asd');
	mysql_select_db('myshop');
	mysql_query('set names utf8');
	include '../../public/common/acl.inc.php';
	$sqlCount="select count(*) from shop";
	$rstCount=mysql_query($sqlCount);
	$total=mysql_fetch_row($rstCount);
	$pageNum=$_GET['id']?$_GET['id']:1;
	$number=10;
	$pageTotal=ceil($total[0]/$number);
	$beginNum=($pageNum-1)*10;
	$sqlShop="select * from shop order by id limit {$beginNum},{$number}";
	$rstShop=mysql_query($sqlShop);
	$prePage=$pageNum-1;
	if($prePage<=0){
		$prePage=0;
	}
	$nextPage=$pageNum+1;
	if($nextPage>$pageTotal){
		$nextPage=$pageTotal;
	}

?>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>shop.index</title>
</head>
<body>
	<center>
	<table width="700px" border="1px">
		<p><b>shop list</b></p>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>price</th>
		<th>stock</th>
		<th>upshelf</th>
		<th>image</th>
		<th>brand</th>
		<th>edit</th>
		<th>delete</th>
		</tr>		
		<?php
		  while($rowShop=mysql_fetch_assoc($rstShop)){
			echo"<tr>";
			echo "<td>{$rowShop['id']}</td>";
			echo "<td>{$rowShop['name']}</td>";
			echo "<td>{$rowShop['price']}</td>";
			echo "<td>{$rowShop['stock']}</td>";
			if($rowShop['upshelf']==1){
				echo "<td>上架</td>";
			}else{
				echo "<td>下架</td>";
			}
			
			echo "<td><img src='../../public/uploads/s-{$rowShop['image']}'</td>";
			$sqlShopBrand="select brand.name from shop,brand where {$rowShop['brand_id']}=brand.id";
			$rstShopBrand=mysql_query($sqlShopBrand);
			$rowShopBrand=mysql_fetch_assoc($rstShopBrand);
			echo "<td>{$rowShopBrand['name']}</td>";
			echo "<td><a href='edit.php?id={$rowShop['id']}&image={$rowShop['image']}'>edit</a></td>";
			echo "<td><a href='delete.php?id={$rowShop['id']}&image={$rowShop['image']}'>detele</a></td>";
			echo "</tr>";
		}
		?>

	</table>
		<a href="index.php?id=<?php echo $prePage ?>">prepage</a>|<a href="index.php?id=<?php echo $nextPage ?>">nextpage</a>
	</center>
</body>
