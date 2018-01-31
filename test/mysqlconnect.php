<?php
   $mc=mysql_connect("localhost","root","123asd");
   $md=mysql_select_db("test");
   $sql="select * from test1";
   $resource=mysql_query($sql);
   while($row=mysql_fetch_assoc($resource)){
   	   echo "<h1>id:{$row['id']}</h1>";
   	   echo "<h1>name:{$row['name']}</h1>";
   }


?>
