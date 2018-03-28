<?php
session_start(); 
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
                        <?php if(isset($_SESSION['login'])){


                        ?>
						<span>个人中心：<?php echo $_SESSION['username'] ?>
						</span> 
					</div>
                </div>
					<div class="picture">
                        <form action="relationInsert.php" method="post">
							<table border="1px" color="#fff" cellpading="50" >
								<tr>
                                    <td>名字</td><td><input type="text" name="realname" value="" ></td>
                                </tr>
                                <tr>
                                    <td>地址</td><td><input type="text" name="address" value="" ></td>
                                </tr>
                                <tr>
                                    <td>电话</td><td><input type="text" name="telephone" value="" ></td>
                                </tr>
								<tr>
                                    <td>email</td><td><input type="text" name="email" value="" "></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="submit" value="submit" ></td>
                                    <td><input type="reset" name="reset" value="reset" ></td>
                                </tr>
                            </table>
					    </form>
                    </div>    
                <?php
                    }else{
                          echo "<span>请登录！</span>";
                    }
                 ?>
		

		<div class="nav"></div>
		<?php include "../public/page/footer.php" ?>
	</div>
</body>
</html>