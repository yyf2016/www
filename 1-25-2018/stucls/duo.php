<?php
mysql_connect('localhost','root','123asd');
mysql_select_db('test');
mysql_query('set names utf8');
$num=10;
$pageNum=$_GET['pageNum'] ? $_GET['pageNum'] : 1;
$rst=mysql_query("select count(*) from student");
$stuTotal=mysql_fetch_row($rst);
var_dump($stuTotal);
$pageTotal=ceil($stuTotal[0]/$num);
echo $pageTotal;
$numSt=($pageNum-1)*$num;
$sqlUser="select * from student order by id  limit {$numSt},{$num}";
$rstUser=mysql_query($sqlUser);
echo "<html>";
echo "<center>";
echo "<table border='1px'>";
echo "<tr>";
echo "<th>student list</th>";
echo "</tr>";
echo "<tr>";
echo "<td>id</td>";
echo "<td>name</td>";
echo "<td>cid</td>";
while($rowUser=mysql_fetch_assoc($rstUser)){
	echo "<tr>";
	echo "<td>{$rowUser['id']}</td>";
	echo "<td>{$rowUser['name']}</td>";
	echo "<td>{$rowUser['cid']}</td>";
}
echo "</table>";
$prePage=$pageNum-1;
$nextPage=$pageNum+1;

if ($prePage<=0 ){
	$prePage=1;
}
if ($nextPage > $pageTotal){
	$nextPage=$pageTotal;
}
echo "<a href='duo.php?pageNum={$prePage}'>prepage</a>|<a href='duo.php?pageNum={$nextPage}'>nextpage</a>";
echo "</center>";
echo "</html>";
?>