<?php
include '../../public/common/dbconfig.inc.php';
$sqlUser='select * from user order by id';
$rstUser=mysql_query($sqlUser);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
</head>
<boby>
	<center>
		<p><b>查看用户:</b></p>
	</center>
	<table border='1px' cellspacing='0'>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>regtime</th>
			<th>admin</th>		
			<th>edit</th>
			<th>delete</th>
		</tr>
		<?php
		 	while($row_user=mysql_fetch_assoc($rstUser)){
		 		echo "<tr>";
		 		echo "<td>{$row_user['id']}</td>";
		 		echo "<td>{$row_user['username']}</td>";
		 		echo "<td>{$row_user['password']}</td>";
		 		echo "<td>".date("Y-m-d h:i:s",$row_user['regtime'])."</td>";
		 		echo "<td>{$row_user['admin']}</td>";
		 		echo "<td><a href='edit.php?id={$row_user['id']}'>edit</a></td>";
		 		echo "<td><a href='delete.php?id={$row_user['id']}'>delete</a></td>";
		 }
		 ?>
	</table>
</body>	