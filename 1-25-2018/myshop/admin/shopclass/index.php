<?php
	mysql_connect('localhost','root','123asd');
	mysql_select_db('myshop');
	mysql_query('set names utf8');
	$sqlCount="select count(*) from shopclass";
	$rstCount=mysql_query($sqlCount);
	$total=mysql_fetch_row($rstCount);
	$pageNum=$_GET['id']?$_GET['id']:1;
	$number=10;
	$pageTotal=ceil($total[0]/$number);
	$beginNum=($pageNum-1)*10;
	$sqlShopclass="select * from shopclass order by id limit {$beginNum},{$number}";
	$rstShopclass=mysql_query($sqlShopclass);
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
	<title>shopclass.index</title>
</head>
<body>
	<center>
	<table width="500px" border="1px">
		<p><b>shopclass list</b></p>
		<tr>
		<th>id</th>
		<th>name</th>
		<th>edit</th>
		<th>delete</th>
		</tr>		
		<?php
		  while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
			echo"<tr>";
			echo "<td>{$rowShopclass['id']}</td>";
			echo "<td>{$rowShopclass['name']}</td>";
			echo "<td><a href='edit.php?id={$rowShopclass['id']}'>edit</a></td>";
			echo "<td><a href='delete.php?id={$rowShopclass['id']}'>detele</a></td>";
			echo "</tr>";
		}
		?>

	</table>
		<a href="index.php?id=<?php echo $prePage ?>">prepage</a>|<a href="index.php?id=<?php echo $nextPage ?>">nextpage</a>
	</center>
</body>
