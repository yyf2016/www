<?php 
include '../../public/common/acl.inc.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>add.php</title>
</head>
<body>
	<center>
	<p><b>Add brand</b></p>
	<form action='insert.php' method='post'>
		<table>
			<tr>
				<td>brandname:</td>
				<td><input type='text' name='name' value=''></td>
			</tr>
			
			<tr>
				<td>shopClass:</td>
				<?php
				include'../../public/common/dbconfig.inc.php';
				$sqlShopclass="select * from shopclass";
				$rstShopclass=mysql_query($sqlShopclass);
				echo "<td><select name='shopclass_id'>";
				echo "<option>请选择商品品牌</option>";
				while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
					echo "<option  value='{$rowShopclass['id']}'>{$rowShopclass['name']}</option>";
				}
				echo "</select></td>";
				?>
				
			</tr>
			<tr>
				<td><input type='submit' name='submit' value='submit'></td>
				<td><input type='reset' name='reset' value='reset'></td>

		    </tr>

	    </table>
	</form>
	</center>

</body>	