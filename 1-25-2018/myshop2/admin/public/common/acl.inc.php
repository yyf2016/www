<?php 
session_start();

if(!$_SESSION[adminlogin]){
	echo "<script>location='/myshop3/admin/login/login.php'</script>";
}
 ?>