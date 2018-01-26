<?php 
mysql_connect('localhost','root','123asd');
mysql_select_db('test');
mysql_query('set names utf8');
for($i=0;$i<20;$i++){
	$stu="stu".$i;
    $sqlUser="insert into student(name,cid) values('$stu','1')";
    mysql_query($sqlUser);
}
echo mysql_insert_id();
?> 