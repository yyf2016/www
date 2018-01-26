<?php 
include '../../public/common/acl.inc.php';
?>
<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<title>add.php</title>
</head>
<body>
	<p><b>Add user</b></p>
	<form action='insert.php' method='post'>
		<table>
			<tr>
				<td>username:</td>
				<td><input type='text' name='username' value=''></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type='password' name='password' value=''></td>
			</tr>
			<tr>
				<td>repassword:</td>
				<td><input type='repassword' name='repassword' value=''></td>
			</tr>
			<tr>
				<td><input type='submit' name='submit' value='submit'></td>
				<td><input type='reset' name='reset' value='reset'></td>

		    </tr>

	    </table>
	</form>


</body>	