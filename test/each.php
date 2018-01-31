<?php 
   $arry['name']=xiaoming;
   $arry['age']=23;
   $arry1=each($arry);
   echo "<pre>";
   print_r($arry1);
   echo "</pre>";
   echo "<hr>";
   $arry2=each($arry);
   echo "<pre>";
   print_r($arry2);
   echo "</pre>";
   echo "<hr>";
   list($key,$val)=$arry1;
   echo $key;
   echo $val;
?>