<?php 
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
<title>后台管理左边</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../public/images/left.gif);
}
-->
</style>
<link href="../public/css/css.css" rel="stylesheet" type="text/css" />
</head>
<script src="../../public/js/jQuery.js"></script>
<script>
	  $(function(){
	  	i=1;
	  	$(".aclick").click(function(){
	  	 id=this.id;
	  	 if(i%2==1){
	  	 $("#subtree"+id).show();
	  	}else{
	  		$("#subtree"+id).hide();
	  	}
	  	i+=1;
        });
});
        
	
</script>

<body>
<table width="198" border="0" cellpadding="0" cellspacing="0" class="left-table01">
  <tr>
    <TD>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tr>
			<td width="207" height="55" background="../public/images/nav01.gif">
				<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
				  <tr>
					<td width="25%" rowspan="2"><img src="../public/images/ico02.gif" width="35" height="35" /></td>
					<td width="75%" height="22" class="left-font01">用户名：<span class="left-font02"><?php echo $_SESSION['username'] ?></span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="../login/logout.php" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		


		<!--  用户管理开始   -->
		<div class="leftDiv">
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 aclick" id="1" >用户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree1" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看用户</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加用户</a></td>
				</tr>
      </table>
  </div>
		<!--  用户管理结束    -->

		<!--  分类管理开始   -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 aclick" id="2" >分类管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree2" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shopclass/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看分类</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shopclass/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加分类</a></td>
				</tr>
      </table>
		<!--  分类管理结束    -->

		<!--  品牌管理开始   -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 aclick" id="3" >品牌管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree3" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../brand/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看品牌</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../brand/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加品牌</a></td>
				</tr>
      </table>
		<!--  品牌管理结束    -->
		<!--  商品管理开始   -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 aclick" id="4" >商品管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree4" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shop/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看商品</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../shop/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加商品</a></td>
				</tr>
      </table>
		<!--  商品管理结束    -->
		<!--  订单管理开始   -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03 aclick" id="5" >订单管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree5" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../ordertab/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看商品</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico05.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../ordertab/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加商品</a></td>
				</tr>
      </table>
		<!--  订单管理结束    -->
	  </TD>
  </tr>
  
</table>
</body>
</html>
