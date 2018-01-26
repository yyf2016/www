<!doctype html>
<html lang="en">
<header>
	<meta charset="utf-8">
	<title>add.php</title>
</header>
<body>
	<center>
	<p><b>add user page</b></p>
</center>
<form action="insert.php" method="post">
		<table>
			<tr>
				<td>user name:</td>
				<td>
					<input type="text" name="username">
				</td>
			</tr>
			<tr>
				<td>password:</td>
				<td>
					<input type="password" name="password">
				</td>	
			</tr>
			<tr>
				<td>repassword:</td>
			<td>
				<input type="password" name="repassword">
			</td>	
		</tr>	
		<tr>
			<td>
				<input type="submit" name="submit" value="submit">
			</td>
			<td>
				<input type="reset" name="reset" value="reset">
			</td>						
		</tr>
		</table>
	</form>	
</body>	