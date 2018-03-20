<?php 
  mysql_connect("localhost","root","123asd");
  mysql_select_db("myshop1");
  mysql_query("set names utf8");

?>
<html>
<head>
	<meta charset="utf-8">
	<title>home.php</title>
	<link rel="stylesheet" href="public/css/css.css">
</head>
<body>
	<div class="main">
		<?php include "public/page/top.php" ; ?>
		<div class="nav"></div>
		<div class="pictureU">
			<img src="public/images/xiaomi.jpg">
		</div>
		<div class="nav"></div>
		<div class="contentTotal">
			<!-- 第一层start -->
			<?php
			   $sqlshopclass="select * from shopclass order by id";
			   $rstshopclass=mysql_query($sqlshopclass);
			   $floor=1;
			   while($rowshopclass=mysql_fetch_assoc($rstshopclass)){
                    
			   
			?>
			<div class="content">
				<a name="<?php echo $floor ;?>f"></a>
				<div class="head">
					<div class="headleft">
						<span><?php echo $floor ;?>F<?php echo $rowshopclass['shopname']?></span>
					</div>
					<div class="headright">
						<?php 
						 $sqlBrand="select * from brand where shopclass_id='{$rowshopclass['id']}'";
                         $rstBrand=mysql_query($sqlBrand);
                         $num=0;
                         $shopname_id=0;
                         while($rowBrand=mysql_fetch_assoc($rstBrand)){
                         	if($num<1){
                         		$brand_id=$rowBrand['id'];
                         	}

						?>
						<a href="index.php?shopclass_id=<?php echo $rowshopclass['id'] ?>&brand_id=<?php echo $rowBrand['id']?>#<?php echo $floor ;?>f"><span><?php echo $rowBrand['brandname']?></span></a>
						
						<?php 
						    $num+=1; 
						}
					        ?>
						<span><a href="homeinfo/brandList.php?id=<?php echo $rowshopclass['id'] ?>">more</a></span>
					</div>

				</div>
				<div class="picture">
					<?php 
					      if($rowshopclass['id']==$_GET['shopclass_id']){
					      	$brand_id=$_GET['brand_id'];
					      }else{
					      	$brand_id=$brand_id;
					      }
					      $sqlShop="select * from shop where brand_id='{$brand_id}'";
					      $rstShop=mysql_query($sqlShop);
					      while($rowShop=mysql_fetch_assoc($rstShop)){

					      
					?>
					<div class="pictureInfo">
						<a href="homeinfo/shopinfo.php?id=<?php echo $rowShop['id']; ?>"><image src="../public/upload/s_<?php echo $rowShop['image']; ?>"/></a>
					</div>
					 <?php 
					     }
					 ?>
				</div>
		    </div>
			<!-- 第一层 end -->
			<div class="both"></div>
           <?php
            $floor+=1; 
			}
           ?>
	    </div>
	    <div class="both"></div>
		<div class="nav"></div>
		<div class="pictureB">
			<img src="public/images/lang.jpg">
		</div>
		<div class="nav"></div>
		<?php include "public/page/footer.php" ?>
	</div>
</body>
</html>