<?php 
include '../public/common/acl.inc.php';

include '../public/common/config.inc.php';

$id=$_GET['id'];
$image=$_GET['image'];

$sqlShop="delete from Shop where id={$id}";
if(mysql_query($sqlShop)){
	unlink('../../public/uploads/'.$image);
	unlink('../../public/uploads/th_'.$image);
	echo "<script>location='index.php'</script>";
}
 ?>