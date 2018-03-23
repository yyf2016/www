<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8" />
<title>My shop前端 登录界面</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<link href="../public/css/css1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="147" background="../public/images/top02.gif"><img src="../public/images/top03.gif" width="776" height="147" /></td>
  </tr>
</table>
<table  border="0" align="center" cellpadding="0" cellspacing="0" class="right-table03">
  <tr>
    <td width="221"><table width="95%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
      
      <tr>
        <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="login-text01">
          <tr>
            <td align="center"><img src="../public/images/ico13.gif" width="107" height="97" /></td>
          </tr>
          <tr>
            <td height="40" align="center">&nbsp;</td>
          </tr>
          
        </table></td>
        <td><img src="../public/images/line01.gif" width="5" height="292" /></td>
      </tr>
    </table></td>
    <td>
      <form action="check.php" method="post" enctype="multipart/form-data">
      <table  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td  height="35" class="login-text02" >用户名：<br /></td>
        <td width="362px"><input name="username" type="input" size="33" /></td>
      </tr>
      <tr>
        <td height="35" class="login-text02">密  码：<br /></td>
        <td><input name="password" type="password" size="33" /></td>
      </tr>
      <tr>
        <td height="35" class="login-text02">验 证 码：<br /></td>
        <td><img src="../public/function/code.php" width="109" height="40" /> <a href="login.php?<?php echo time().mt_rand();?>" class="login-text03">换一个</a></td>
      </tr>
      <tr>
        <td height="35" class="login-text02">输入验证码：</td>
        <td><input name="code" type="text" size="33" /></td>
      </tr>
      <tr>
        <td height="35">&nbsp;</td>
        <td><input name="Submit2" type="submit" class="right-button01" value="submit" />
          <input name="Submit232" type="reset" class="right-button02" value="reset" /></td>
      </tr>
    </table>
  </form>
  </td>
  </tr>
</table>
</body>
</html>