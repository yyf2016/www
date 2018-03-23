<?php 
session_start();
if(!$_SESSION['username']||!$_SESSION['isAdmin']){
	echo"<script>location='/myshop1/admin/login/login.php'</script>";
}
?>