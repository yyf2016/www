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
			   $sqlshopclass="select * from shopclass orderby id";
			   mysql_query($sqlshopclass);
			   $floor=1;
			   while($rowshopclass=mysql_fetch_assoc($sqlshopclass)){
                     
			   
			?>
			<div class="content">
				<a name="<?php echo $floor ;?>f"></a>
				<div class="head">
					<div class="headleft">
						<span><?php echo $floor ;?>F笔记本</span>
					</div>
					<div class="headright">
						<a href="#<?php echo $floor ;?>f"><span>联想</span></a>
						<a href="#<?php echo $floor ;?>f"><span>苹果</span></a>
						<span>more</span>
					</div>

				</div>
				<div class="picture">
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
					<div class="pictureInfo">
						<image src="../public/upload/s_1520448890_753245529.jpg"/>
					</div>
				</div>
		    </div>
			<!-- 第一层 end -->
			<div class="both"></div>
		 	<?php 
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