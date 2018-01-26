<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
include '../../public/common/acl.inc.php';
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
			<td>username:</td>
			<td><input type='text' name='username' value='<?php echo $rowUser['username'] ?>'></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type='password' name='password' value=''></td>
		</tr>
		<tr>
			<td>repassword</td>
			<td><input type='password' name='repassword' value=''></td>
		</tr>
		<tr>
			<td>
			<?php 
			if($rowUser[admin]){
				echo "<input type='radio' name='isAdmin' value='1' checked >yes";
				echo "<input type='radio' name='isAdmin' value='0'  >no";
			}else{
				echo "<input type='radio' name='isAdmin' value='1'  >yes";
				echo "<input type='radio' name='isAdmin' value='0' checked >no";
			}
			?>
		    </td>
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
