<?php
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("test");
mysql_query("set names utf8");
$limitNum=10;
$page=$_GET['page']?$_GET['page']:1;
$sqlTotal="select count(*) from test1";
$rstTotal=mysql_query($sqlTotal);
$totalNum=mysql_fetch_row($rstTotal);
$totalPage=floor($totalNum[0]/10);
if($page>$totalPage){
	$page=$totalPage;
}

$offset=($page-1)*$limitNum+1;
$sql="select * from test1 order by id limit {$offset},{$limitNum}";
$rst=mysql_query($sql);

 ?>
 <!doctype html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>fenye</title>
 </head>
 <body>
 	<center>
 		<h1>分页设置</h1>
 		<table border=1px>
 			<tr>
 				<th>ID</th>
 				<th>NAME</th>
 				<th>SEX</th>
 				<th>AGE</th> 
 				<th>CLASSNAME</th>
 				<th>修改</th>
 				<th>删除</th> 
 			</tr>
 			<?php 
 			    while($row=mysql_fetch_assoc($rst)){
 			    	echo "<tr>";
 			    	echo "<td>{$row['id']}</td>";
 			    	echo "<td>{$row['name']}</td>";
 			    	echo "<td>{$row['sex']}</td>";
 			    	echo "<td>{$row['age']}</td>";
 			    	echo "<td>{$row['classname']}</td>";
 			    	echo "<td><a href='edit.php?id={$row['id']}'>修改</a></td>";
 			    	echo "<td><a href='delete.php?id={$row['id']}'>删除</a></td>";
 			    	echo "</tr>";
 			    }
 			     
 			?>
 			
 		</table>
 		<h1><a href='fenye.php?page=<?php echo $page-1 ?>'>上一页</a>&nbsp&nbsp&nbsp<a href='fenye.php?page=<?php echo $page+1 ?>'>下一页</a></h1>
 	</center>
 </body>
 </html>