<?php
include "../../public/common/dbconfig.inc.php";
$id=$_GET['id'];
$sqlUser="select * from user where id={$id}";
$rstUser=mysql_query($sqlUser);
$rowUser=mysql_fetch_assoc($rstUser);

?>
<!doctype html>
<html lang="en">
<header>
	<meta charset="utf-8">
	<title>add.php</title>
</header>
<body>
	<center>
	<p><b>edit user page</b></p>
</center>
<form action="update.php" method="post">
		<table>
			<tr>
				<td>user name:</td>
				<td>
					<input type="text" name="username" value="<?php echo $rowUser['username'] ?>">
				</td>
			</tr>
			<tr>
				<td>password:</td>
				<td>
					<input type="password" name="password" value="">
				</td>	
			</tr>
			<tr>
				<td>repassword:</td>
			<td>
				<input type="password" name="repassword" value="">
			</td>	
		</tr>
		<tr>
			<td>admin:</td>
			<td><?php
			if($rowUser['admin']){
 				echo "<input type='radio' name='isadmin' value='1' checked>yes";
 				echo "<input type='radio' name='isadmin' value='0'>no";
			}else{
				echo "<input type='radio' name='isadmin' value='1' >yes";
 				echo "<input type='radio' name='isadmin' value='0' checked>no";
			}
			?>
			</td>		
		</tr>	
		<tr>
			
				<input type="hidden" name="id" value="<?php echo $id ?>">
			
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
			<td>
				<input type="reset" name="reset" value="reset">
			</td>						
		</tr>
		</table>
	</form>	
</body>	