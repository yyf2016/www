<?php
	mysql_connect('localhost','root','123asd');
	mysql_select_db('myshop');
	mysql_query('set names utf8');
	$sqlCount="select count(*) from orders";
	$rstCount=mysql_query($sqlCount);
	$total=mysql_fetch_row($rstCount);
	$pageNum=$_GET['id']?$_GET['id']:1;
	$number=10;
	$pageTotal=ceil($total[0]/$number);
	$beginNum=($pageNum-1)*10;
	$sqlOrders="select * from orders order by id limit {$beginNum},{$number}";
	$rstOrders=mysql_query($sqlOrders);
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
		<th>code</th>
		<th>user_id</th>
		<th>time</th>
		<th>orderstat_id</th>
		<th>relation_id</th>
		<th>edit</th>
		<th>delete</th>
		</tr>		
		<?php
		  while($rowOrders=mysql_fetch_assoc($rstOrders)){
			echo"<tr>";
			echo "<td>{$rowOrders['id']}</td>";
			echo "<td><a href='listOrder.php?id={$rowOrders['id']}'>{$rowOrders['code']}</td>";
			$sqlOrdersUser="select user.username from orders,user where user.id={$rowOrders['user_id']}";
			$rstOrdersUser=mysql_query($sqlOrdersUser);
			$rowOrdersUser=mysql_fetch_assoc($rstOrdersUser);
			echo "<td>{$rowOrdersUser['username']}</td>";
			echo "<td>{$rowOrders['time']}</td>";
			$sqlOrdersOrderStat="select orderstat.name from orderstat,orders where orderstat.id={$rowOrders['orderstat_id']}";
			$rstOrdersOrderStat=mysql_query($sqlOrdersOrderStat);
			$rowOrdersOrderStat=mysql_fetch_assoc($rstOrdersOrderStat);
			echo "<td>{$rowOrdersOrderStat['name']}</td>";
			echo "<td><a href='send.php?id={$rowOrders['relation_id']}'>{$rowOrders['relation_id']}</a></td>";
			echo "<td><a href='edit.php?id={$rowShop['id']}&image={$rowShop['image']}'>edit</a></td>";
			echo "<td><a href='delete.php?id={$rowShop['id']}&image={$rowShop['image']}'>detele</a></td>";
			echo "</tr>";
		}
		?>

	</table>
		<a href="index.php?id=<?php echo $prePage ?>">prepage</a>|<a href="index.php?id=<?php echo $nextPage ?>">nextpage</a>
	</center>
</body>
