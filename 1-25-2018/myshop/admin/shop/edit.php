<?php
	mysql_connect('localhost','root','123asd');
    mysql_select_db('myshop');
    mysql_query('set names utf8');
    include '../../public/common/acl.inc.php';
    $id=$_GET['id'];
    $image=$_GET['image'];
    $sqlShop="select * from shop where id='{$id}'";
    $rstShop=mysql_query($sqlShop);
    $rowShop=mysql_fetch_assoc($rstShop);


?>
<!DOCTYPE html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<title>shop/edit.php</title>
</head>
<body>
	<center>
	<p><b>edit shop</b></p>
	<form action='update.php' method='post' enctype="multipart/form-data">
		<table width="500px" cellspacing="0">
			<tr>
				<td>name:</td>
				<td><input type='text' name='name' value='<?php echo $rowShop['name'] ?>'></td>
			</tr>
			<tr>	
			     <td>price:</td>
			     <td><input type='text' name='price' value='<?php echo $rowShop['price'] ?>'></td>
			</tr>
			<tr>
				<td>stock:</td>
				<td><input type='text' name='stock' value='<?php echo $rowShop['stock'] ?>'></td>
			</tr>
			<tr>
				<td>upshelf:</td>
				<td>
				<?php
				if($rowShop['upshelf']==1){
				echo "<input type='radio' name='upshelf' value='1'checked />yes";
				echo "<input type='radio' name='upshelf' value='2' />no";
				}else{
				echo "<input type='radio' name='upshelf' value='1'/>yes";
				echo "<input type='radio' name='upshelf' value='2' checked />no";
				}
				
				?>
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
						if($rowBrand['id']==$rowShop['brand_id']){
						echo "<option  value='{$rowBrand['id']}' selected>&nbsp|--{$rowBrand['name']}</option>";
						}else{
							echo "<option  value='{$rowBrand['id']}'>&nbsp|--{$rowBrand['name'] }</option>";
						}
					     }
					}
			     echo "</select></td>";
				?>
				
			</tr>
			<tr>
			    <input type='hidden' name='id' value='<?php echo $id ?>'>
				<td><input type='submit' name='submit' value='submit'></td>
				<td><input type='reset' name='reset' value='reset'></td>

		    </tr>
		    
	    </table>
	    

	</form>
	<img src="../../public/uploads/s-<?php echo $image ?>"/>
	</center>

</body>	