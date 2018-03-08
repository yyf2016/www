<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlOrdertabOrderstat="select ordertab.id ,ordertab.code,ordertab.ordertime,ordertab.shop_id,orderstat.ordersta,user.username from ordertab,orderstat,user where orderstat_id=orderstat.id and ordertab.user_id=user.id order by id";
$rstOrdertabOrderstat=mysql_query($sqlOrdertabOrderstat);
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>查询订单</title>
</head>
<body>
	<center>
		<h1>查询订单</h1>
		<table border=1px>
			<tr>
				<th>ID</th>
				<th>订单序号</th>
				<th>用户名称</th>
				<th>下单时间</th>
				<th>订单状态</th>
				<th>修改</th>
				<th>删除</th>
			</tr>
			<?php 
			     while($rowSBS=mysql_fetch_assoc($rstOrdertabOrderstat)){
			     	echo "<tr>";
			     	echo "<td>{$rowSBS['id']}</td>";
			     	echo "<td><a href='shopindex.php?shop_id={$rowSBS['shop_id']}&code={$rowSBS['code']}'>{$rowSBS['code']}</a></td>";
			     	echo "<td>{$rowSBS['username']}  </td>";
			     	echo "<td>".date("Y-m-d H:i:s",$rowSBS['ordertime'])."</td>";
			     	echo "<td>{$rowSBS['ordersta']}  </td>";
			     	echo "<td><a href='edit.php?id={$rowSBS['id']}'>修改</td>";
                    echo "<td><a href='delete.php?id={$rowSBS['id']}'>删除</td>";
			     	echo "</tr>";

			     }
			 ?>
		</table>
	</center>
</body>
</html>