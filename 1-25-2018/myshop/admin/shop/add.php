<?php
include '../../public/common/acl.inc.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>shop/add.php</title>
</head>
<body>
	<center>
	<p><b>Add shop</b></p>
	<form action='insert.php' method='post' enctype="multipart/form-data">
		<table width="500px" cellspacing="0">
			<tr>
				<td>name:</td>
				<td><input type='text' name='name' value=''></td>
			</tr>
			<tr>	
			     <td>price:</td>
			     <td><input type='text' name='price' value=''></td>
			</tr>
			<tr>
				<td>stock:</td>
				<td><input type='text' name='stock' value=''></td>
			</tr>
			<tr>
				<td>upshelf:</td>
				<td>
				<input type='radio' name='upshelf' value='1'/>yes
				<input type='radio' name='upshelf' value='2' checked/>no
				</td>
			</tr>
			<tr>	
				<td>image:</td>
				<td><input type='file' name='img' value=''></td>
			</tr>
			<tr>
				<td>brandname:</td>
				<?php
				include'../../public/common/dbconfig.inc.php';
				$sqlShopclass="select * from shopclass";
				$rstShopclass=mysql_query($sqlShopclass);
				$sqlBrand="select * from Brand";
				$rstBrand=mysql_query($sqlBrand);
				echo "<td><select name='brand_id'>";
				echo "<option>请选择商品类别</option>";
				while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
					echo "<option value='{$rowShopclass['id']}' style='font-style:italic' disabled><b>{$rowShopclass['name']}</b></option>";
					$sqlBrand="select * from Brand where shopclass_id = {$rowShopclass['id']}";
				    $rstBrand=mysql_query($sqlBrand);
					while($rowBrand=mysql_fetch_assoc($rstBrand)){
						echo "<option  value='{$rowBrand['id']}'>&nbsp|--{$rowBrand['name']}</option>";
					     }
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