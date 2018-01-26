<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlUser="select * from user where id={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>edit</title>
</head>
<body>
	<form action='update.php' method='post'>
		<table>
		<tr>
			<td>name:</td>
			<td><input type='text' name='name' value='<?php echo $rowUser['name'] ?>'></td>
		</tr>
		
		
		<tr>
			<input type='hidden' name='id' value='<?php echo $id ?>'>
			<td><input type='submit' name='submit' value='submit'></td>
			<td><input type='reset' name='reset' value='reset'></td>

		</tr>	
	</table>
	</form>

</body>
</html>	
