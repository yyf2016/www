<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('myshop');
mysql_query('set names utf8');
$id=$_GET['id'];
$sqlBrand="select * from  brand where id={$id}";
$rstBrand=mysql_query($sqlBrand);
$rowBrand=mysql_fetch_assoc($rstBrand);
$sqlShopclass="select * from shopclass";
$rstShopclass=mysql_query($sqlShopclass);
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>brand/edit.php</title>
</head>
<body>
    <center>
	<form action='update.php' method='post'>
		<table>
		<th>brand edit</th>
		<tr>
			<td>username:</td>
			<td><input type='text' name='name' value='<?php echo $rowBrand['name'] ?>'></td>
		</tr>
		<tr>
			<td>shopclass:</td>
			<td>
			<select name="shopclass_id">
			<option>--请选择品牌类别--</option>
			<?php 
			while($rowShopclass=mysql_fetch_assoc($rstShopclass)){
				if ($rowBrand['shopclass_id']==$rowShopclass['id']){
					echo "<option value='{$rowShopclass['id']}' selected>{$rowShopclass['name']}</option>";
				}else{
					echo "<option value='{$rowShopclass['id']}'>{$rowShopclass['name']}</option>";
				}
			}
			?>
			</select>
		    </td>
		</tr>
		<tr>
			<input type='hidden' name='id' value='<?php echo $id ?>'>
			<td><input type='submit' name='submit' value='submit'></td>
			<td><input type='reset' name='reset' value='reset'></td>

		</tr>	
	</table>
	</form>
	</center>
</body>
</html>	
