<?php 
session_start();
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");

 ?>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../public/css/css.css">
    <title>center.php</title>

</head>
<body>
    <div class="main">
        <?php include "../public/page/top.php" ?>
        <div class="nav"></div>
        <div class="contentTotal">
            <div class="content">
                 <div class="head">
                    <div class="headleft">
                        <span>购物车清单：
                        </span> 
                    </div>
                </div>
                    <div class="picture">
                        <form method="post">
                            <table border="1px" color="#fff" cellpading="50" width="800px">
                                <tr>
                                    <th>商品名</th>
                                    <th>图片</th>
                                    <th>单价</th>
                                    <th>数量</th>
                                    <th>价钱</th>
                                    <th>删除</th>
                                    
                                </tr>
                                <?php
                                   if(isset($_SESSION['shop'])){
                                    foreach($_SESSION['shop'] as $row){
                                    $total+=$row['price']*$row['num'];
                                ?>
                                <tr>
                                    <td><?php echo $row['shopname']?></td>
                                    <td><img src='../../public/upload/<?php echo $row['image'] ?>'/></td>
                                    <td><?php echo $row['price'] ?>元</td>
                                    <td><a href="../cart/opcart.php?shopname=<?php echo $row['shopname'] ?>&action=desc&stock=<?php echo $row['stock'] ?>"><button type="button">--</button></a><?php echo $row['num'] ?>件<a href="../cart/opcart.php?shopname=<?php echo $row['shopname'] ?>&action=asc&stock=<?php echo $row['stock'] ?>"><button type="button">+</button></a></td>
                                    <td><?php echo $row['price']*$row['num'] ?></td>
                                    <td><a href="../cart/clearcart.php?del=1&shopname=<?php echo $row['shopname'] ?>">删除</a></td>
                                </tr>
                                <?php
                                 } 
                                } 
                                ?>
                                <tr>
                                    <td colspan="2">总价：</td>
                                    <td colspan="2"><?php echo $total ?></td>
                                    <td><a href="../cart/clearcart.php?del=0">清空购物车</a></td>
                                    <td><a href="payoff.php">结算</td>
                                </tr>
                            </table>
                        </form>
                       
                    </div>
                <div class="both"></div>
            </div>
        </div>
        <div class="nav"></div>
       
        <?php include "../public/page/footer.php" ?>
    </div>
</body>
</html>