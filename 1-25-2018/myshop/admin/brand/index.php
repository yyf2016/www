<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
include '../../public/common/acl.inc.php';
$sqlBrand="select * from brand order by id";
$rstBrand=mysql_query($sqlBrand);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>brand/index.html</title>
</head>
<body>
	<center>
		<p><b>Brands table</b></p>
		
	<table width='500px' border='1px' cellspacing='0'>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>shopclass</th>
			<th>edit</th>
			<th>delete</th>
		</tr>
		<?php
			while($rowBrand=mysql_fetch_assoc($rstBrand)){
				echo "<tr>";
				echo "<td>{$rowBrand['id']}</td>";
				echo "<td>{$rowBrand['name']}</td>";
				$sqlBrandShopclass="select shopclass.name scName from brand,shopclass where {$rowBrand['shopclass_id']}=shopclass.id";
				$rstBrandShopclass=mysql_query($sqlBrandShopclass);
				$rowBrandShopclass=mysql_fetch_assoc($rstBrandShopclass);
				echo "<td>{$rowBrandShopclass['scName']}</td>";
				echo "<td><a href='edit.php?id={$rowBrand['id']}'>edit</a></td>";
				echo "<td><a href='delete.php?id={$rowBrand['id']}'>delete</a></td>";
				echo "</tr>";
			}			
		?>
	</table>
	</center>		
</body>
</html>		