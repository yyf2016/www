<?php 
session_start();
mysql_connect("localhost","root","123asd");
mysql_select_db("myshop1");
mysql_query("set names utf8");
$sqlOrdertabUserRelationOrderstat="select ordertab.code code,relation.address address,ordertab.ordertime time,orderstat.ordersta ordersta from ordertab,relation,orderstat where ordertab.user_id='{$_SESSION['user_id']}'  and ordertab.relation_id=relation.id and ordertab.orderstat_id=orderstat.id group by ordertab.code ";
// echo $sqlOrdertabUserRelationOrderstat;
// exit;
$rstOrdertabUserRelationOrderstat=mysql_query($sqlOrdertabUserRelationOrderstat);
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
                        <span>已付款订单：
                        </span> 
                    </div>
                </div>
                    <div class="picture">
                        
                            <table border="1px" color="#fff" cellpading="50" width="800px">
                                <tr>
                                    <th>订单号</th>
                                    <th>发货地址</th>
                                    <th>下单时间</th>
                                    <th>发货状态</th>
                                </tr>
                                <?php
                                   while($row=mysql_fetch_assoc($rstOrdertabUserRelationOrderstat)){
                                ?>
                                <tr>
                                    <td><?php echo $row['code']?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo date("Y-m-d H:m:s",$row['time']) ?></td>
                                    <td><?php echo $row['ordersta'] ?></td>
                                </tr>
                                <tr>
                                    <td>订单详情</td>
                                    <!-- <td>
                                        <table border="1px" color="#fff" cellpading="50" width="800px"> 
                                            <tr>
                                                <th>商品名</th>
                                                <th>图片</th>
                                                <th>单价</th>
                                                <th>数量</th>
                                            </tr>
                                            <?php 
                                                 $sqlL="select * from ordertab,shop where ordertab.code='{$row['code']}' and ordertab.shop_id=shop.id order by ordertab.id";
                                                 // echo $sqlL;
                                                 // exit;
                                                 $rstL=mysql_query($sqlL);
                                                 while($rowL=mysql_fetch_assoc($rstL)){

                                            ?>
                                            <tr>
                                                <td><?php echo $rowL['shopname']?></td>
                                                <td><img src='../../public/upload/<?php echo $rowL['image'] ?>'/></td>
                                                <td><?php echo $rowL['price'] ?></td>
                                                <td><?php echo $rowL['num'] ?>件</td>
                                                
                                            </tr>
                                           <?php 
                                             }
                                             ?>
                                        </table>
                                    </td> -->
                                </tr>
                                <?php
                                } 
                                ?>
                            </table>
                      
                       
                    </div>
                <div class="both"></div>
            </div>
        </div>
        <div class="nav"></div>
        <?php include "../public/page/footer.php" ?>
    </div>
</body>
</html>