<?php
session_start();  
$num=$_GET['del'];
$shopname=$_GET['shopname'];
swith($num){
	case 0:
	unset($_SESSION['shop']);
	break;

	case 1:
	unset($_SESSION['shop'][$shopname]);
	break;
}
echo "<script>location='account.php'</script>";
?>