<?php
session_start(); 
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$id=$_GET['id'];
$sqlShop="select * from shop where id={$id}";
$rstShop=mysql_query($sqlShop);
$rowShop=mysql_fetch_assoc($rstShop);

 ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../public/css/css.css">
	<title>shopinfo.html</title>

</head>
<body>
	<div class="main">
		<?php include "../public/page/top.php" ?>
		<div class="nav"></div>
		<div class="contentTotal">
			<div class="content">
                 <div class="head">
					<div class="headleft">
						<span>品牌>>商品名称：<?php echo $rowShop['shopname'] ?>
						</span> 
					</div>
                </div>
					<div class="picture">
							<table border="1px" color="#fff" cellpading="50">
								<tr>
									<th>图片</th>
									<th>价钱</th>
									<th>库存</th>
									<th>购物车</th>
								</tr>
								<tr>
									<td><img src='../../public/upload/<?php echo $rowShop['image'] ?>'/></td>
									<td><?php echo $rowShop['price'] ?>元</td>
									<td><?php echo $rowShop['stock'] ?>件</td>
									<td><a href='../cart/addcart.php?id=<?php echo $rowShop['id']?>'>加入购物车</a></td>
								</tr>
							</table>
					</div>
                <div class="both"></div>
            </div>
        </div> 
        <div class="nav"></div>   
                <div>
                	<div><h3>请评论：</h3></div>
                	<form action="updateCommit.php" method="post">
                	<div>
                    	<textarea name="commit" style="width:1600px;height:100px;resize:none"></textarea>
                    </div>
                    <input type="submit" name="submit" value="submit" style="width:80px;height:50px"/>
                    <input type="reset"  name="reset" value="reset" style="width:80px;height:50px"/>
                    <input type="hidden" name="shop_id" value="<?php echo $rowShop['id'] ?>">
                    </form>
                    <?php  
                			$sqlCommit="select * from commit where shop_id={$id}";
                			$rstCommit=mysql_query($sqlCommit);
                			while($rowCommit=mysql_fetch_assoc($rstCommit)){
                				$sqlUser="select * from user where id={$rowCommit['user_id']}";
                				$rstUser=mysql_query($sqlUser);
                				$rowUser=mysql_fetch_assoc($rstUser);
                			?>
                	<div class="head">
                		<div class="headleft">
                	      <span><?php echo $rowUser['username'] ?>:</span>
                        </div>
                        <div class="headright">
                          <span><?php echo date("Y-m-d H:i:s",$rowCommit['time']) ?></span>
                        </div>
                    </div>
                    <div>
                    	<textarea style="width:1600px;resize:none"><?php echo $rowCommit['content']; ?></textarea>

                    </div> 
                    <?php  }  ?>   
                <div class="nav"></div>
			

		

		<div class="nav"></div>
		<?php include "../public/page/footer.php" ?>
	</div>
</body>
</html>