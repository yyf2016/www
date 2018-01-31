<?php
include("dbconfig.inc.php");
$conn=mysql_connect(NAME,USER,PASS);
mysql_select_db("test");
mysql_query("set names utf8");
$sql="select * from test1";
$rst=mysql_query($sql);
while($row=mysql_fetch_assoc($rst)){
	echo "<h1>id:{$row['id']}</h1>";
	echo "<h1>name:{$row['name']}</h1>";
}
?>