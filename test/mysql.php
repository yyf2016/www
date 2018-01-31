<?php
header("content:text/html charset=UTF-8");
$conn=mysql_connect("localhost","root","123asd");
mysql_select_db("test");
mysql_query("set names utf8");
$sql="select * from test1";
$rst=mysql_query($sql);
while($row=mysql_fetch_assoc($rst)){
	echo "<h1>id:{$row['id']}</h1>";
	echo "<h1>name:{$row['name']}</h1>";
}
?>