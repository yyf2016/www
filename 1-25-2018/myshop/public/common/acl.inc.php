<?php
session_start();
if(!$_SESSION['admin'] || !$_SESSION['login']){
  echo "<script>location='/myshop/admin/index.php'</script>";
}
?>