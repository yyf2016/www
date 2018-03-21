<?php 
session_start();
$shopname=$_GET['shopname'];
$action=$_GET['action'];
$stock=$_GET['stock'];
switch ($action){
	case "desc":
	$_SESSION['shop'][$shopname]['num']-=1;
	if($_SESSION['shop'][$shopname]['num']<1){
		$_SESSION['shop'][$shopname]['num']=0;
	}
    echo "<script>location='../homeinfo/account.php'</script>";
    break;
    case "asc":
    $_SESSION['shop'][$shopname]['num']+=1;
    if($_SESSION['shop'][$shopname]['num']>$stock){
    	$_SESSION['shop'][$shopname]['num']=$stock;
    }
    echo "<script>location='../homeinfo/account.php'</script>";
}
?>