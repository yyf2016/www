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
	background-image: url(../images/left.gif);
}
-->
</style>
<link href="../public/css/css.css" rel="stylesheet" type="text/css" />
</head>
<SCRIPT language=JavaScript>
function tupian(idt){
    var nametu="xiaotu"+idt;
    var tp = document.getElementById(nametu);
    tp.src="../public/images/ico05.gif";//Í¼Æ¬ico04Îª°×É«µÄÕý·½ÐÎ
	
	for(var i=1;i<30;i++)
	{
	  
	  var nametu2="xiaotu"+i;
	  if(i!=idt*1)
	  {
	    var tp2=document.getElementById('xiaotu'+i);
		if(tp2!=undefined)
	    {tp2.src="../public/images/ico06.gif";}//Í¼Æ¬ico06ÎªÀ¶É«µÄÕý·½ÐÎ
	  }
	}
}

function list(idstr){
	var name1="subtree"+idstr;
	var name2="img"+idstr;
	var objectobj=document.all(name1);
	var imgobj=document.all(name2);
	
	
	//alert(imgobj);
	
	if(objectobj.style.display=="none"){
		for(i=1;i<10;i++){
			var name3="img"+i;
			var name="subtree"+i;
			var o=document.all(name);
			if(o!=undefined){
				o.style.display="none";
				var image=document.all(name3);
				//alert(image);
				image.src="../public/images/ico04.gif";
			}
		}
		objectobj.style.display="";
		imgobj.src="../public/images/ico03.gif";
	}
	else{
		objectobj.style.display="none";
		imgobj.src="../public/images/ico04.gif";
	}
}

</SCRIPT>

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
					<td width="75%" height="22" class="left-font01">用户名<span class="left-font02">king</span></td>
				  </tr>
				  <tr>
					<td height="22" class="left-font01">
						[&nbsp;<a href="../login/login.html" target="_top" class="left-font01">退出</a>&nbsp;]</td>
				  </tr>
				</table>
			</td>
		  </tr>
		</table>
		


		<!--  用户管理开始   -->
		<TABLE width="100%" border="0" cellpadding="0" cellspacing="0" class="left-table03">
          <tr>
            <td height="29">
				<table width="85%" border="0" align="center" cellpadding="0" cellspacing="0">
					<tr>
						<td width="8%"><img name="img8" id="img8" src="../public/images/ico04.gif" width="8" height="11" /></td>
						<td width="92%">
								<a href="javascript:" target="mainFrame" class="left-font03" onClick="list('8');" >用户管理</a></td>
					</tr>
				</table>
			</td>
          </tr>		  
        </TABLE>
		<table id="subtree8" style="DISPLAY: none" width="80%" border="0" align="center" cellpadding="0" 
				cellspacing="0" class="left-table02">
				<tr>
				  <td width="9%" height="20" ><img id="xiaotu20" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/index.php" target="mainFrame" class="left-font03" onClick="tupian('20');">查看用户</a></td>
				</tr>
				<tr>
				  <td width="9%" height="21" ><img id="xiaotu21" src="../public/images/ico06.gif" width="8" height="12" /></td>
				  <td width="91%"><a href="../user/add.php" target="mainFrame" class="left-font03" onClick="tupian('21');">添加用户</a></td>
				</tr>
      </table>
		<!--  用户管理结束    -->
	  </TD>
  </tr>
  
</table>
</body>
</html>
