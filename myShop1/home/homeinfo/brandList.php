<?php 
  mysql_connect("localhost","root","123asd");
  mysql_select_db("myshop1");
  mysql_query("set names utf8");
  $id=$_GET['id'];

 ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>brandList.php</title>
	<link rel="stylesheet" href="../public/css/css.css">
</head>
<body>
	<div class="main">
		<?php include "../public/page/top.php" ?>
		<div class="nav"></div>
		<div class="contentTotal">
			<div class="head">
				<div class="headleft">
					<span>主页>>品牌：</span>
						<?php 
						 $sqlBrand="select * from brand where shopclass_id='{$id}'";
                         $rstBrand=mysql_query($sqlBrand);
                         $num=0;
                         $shopname_id=0;
                         while($rowBrand=mysql_fetch_assoc($rstBrand)){
                         	if($num<1){
                         		$brand_id=$rowBrand['id'];
                         	}
                         
						?>
						<span><a href="brandList.php?id=<?php echo $id ?>&brand_id=<?php echo $rowBrand['id']?>"><?php echo $rowBrand['brandname']?></a></span>
						
						<?php 
						    $num+=1; 
						}
					        ?>
				</div>
			</div>	
				<div class="picture">
					<?php 
					      $brand_id=$_GET['brand_id']?$_GET['brand_id']:$brand_id;
					      $sqlShop="select * from shop where brand_id='{$brand_id}'";
					      $rstShop=mysql_query($sqlShop);
					      while($rowShop=mysql_fetch_assoc($rstShop)){
					?>
					<div class="pictureInfo">
						<image src="../../public/upload/s_<?php echo $rowShop['image']; ?>"/>
					</div>
					 <?php 
					     }
					 ?>
				</div>
				<div class="both"></div>
		    </div>
		<div class="nav"></div>
		<?php include "../public/page/footer.php" ?>
    </div>
</body>