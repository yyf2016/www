<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
include '../../public/common/acl.inc.php';
$sqlUser="select * from user order by id";
$rstUser=mysql_query($sqlUser);
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>index.html</title>
</head>
<body>
	<center>
		<p><b>Users table</b></p>
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
			while($rowUser=mysql_fetch_assoc($rstUser)){
				echo "<tr>";
				echo "<td>{$rowUser['id']}</td>";
				echo "<td>{$rowUser['username']}</td>";
				echo "<td>{$rowUser['password']}</td>";
				echo "<td>".date("Y-m-d h:i:s",$rowUser['regtime'])."</td>";
				echo "<td>{$rowUser['admin']}</td>";
				echo "<td><a href='edit.php?id={$rowUser['id']}'>edit</a></td>";
				echo "<td><a href='delete.php?id={$rowUser['id']}'>delete</a></td>";
				echo "</tr>";
			}			
		?>
	</table>		
</body>
</html>		