<?php
  include '../public/common/dbconfig.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>
	<link rel="stylesheet" href="public/css/index.css">
</head>
<body>
	<div id='main'>
	    <?php
	    include 'public/header.php';
	    ?>
	    <div class="nav"></div>
	    <div class="adv">
	        <img src="public/images/adheader.jpg" alt="mmm">
		</div>
		<div class="nav"></div>
		<div class="content">
			<?php
				$sqlShopClass="select * from shopClass order by id";
				$rstShopClass=mysql_query($sqlShopClass);
				$i=0;
				while($rowShopClass=mysql_fetch_assoc($rstShopClass)){

			 ?>
			<div class="shopclass">
			  <a name="<?php echo $i+1 ?>f"></a>
				<div class="title">
					<span class='class'><?php echo $i+1 ?>F <?php echo $rowShopClass['name'] ?></span>
					<span class='brand'>
					<?php 
					$sqlBrand="select * from brand where shopClass_id={$rowShopClass['id']}";
					$rstBrand=mysql_query($sqlBrand);
					$j=0;
					while($rowBrand=mysql_fetch_assoc($rstBrand)){
						if($j<1){
							$brand_id=$rowBrand['id'];
						}
					?>
					<a href='index.php?shopClass_id=<?php echo $rowShopClass['id'] ?>&brand_id=<?php echo $rowBrand['id'] ?>#<?php echo $i+1 ?>f'><?php echo $rowBrand['name'] ?></a>
					<?php
					 $j++;
					 }
					?>
					<a href='' class='more'>More</a>
					</span>
				</div>
				<div class="shopshow">
					<?php
					if($rowShopClass['id']==$_GET['shopClass_id']){
						$brand_id=$_GET['brand_id'];
					}
					$sqlShop="select * from shop where brand_id={$brand_id}";
					echo $sqlShop;
					$rstShop=mysql_query($sqlShop);
					while($rowShop=mysql_fetch_assoc($rstShop)){
					?>
					<div class="shop">
						<img src='../public/uploads/s-<?php echo $rowShop['image'] ?>'>
					</div>
					<?php
					}
					?>
				</div>
			</div>
			<?php 
		     $i++;
		     }
		    ?>
			
		<div class="nav"></div>
		<div class='adv'>
			<img src='public/images/adfooter.jpg' alt="">
		</div>
		<div class="nav"></div>
		<?php
		include 'public/footer.php';
		?>
	</div>
</body>
</html>			
