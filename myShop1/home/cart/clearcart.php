<?php
session_start();  
$num=$_GET['del'];
$shopname=$_GET['shopname'];
switch($num){
	case 0:
	unset($_SESSION['shop']);
	break;

	case 1:
	unset($_SESSION['shop'][$shopname]);
	break;
}
echo "<script>location='../homeinfo/account.php'</script>";
?>