<?php
error_reporting ( E_ERROR | E_PARSE );
session_start();
?>
<!DOCTYPE HTML>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
 #cmdline { 
width: 470px;
 }
 #output { 
width: 520px;
height: 192px;
 }
</style>
  <LINK rel="stylesheet" href="style/windows.style/style.css" type="text/css" />
   <SCRIPT src="style/windows.scripts/windows.js" type="text/javascript"></SCRIPT>
   <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
   <SCRIPT src="style/windows.scripts/ajax.js" type="text/javascript"></SCRIPT>
    <SCRIPT src="style/windows.scripts/xml.js" type="text/javascript"></SCRIPT>
  <SCRIPT src="myAPI.js" type="text/javascript"></SCRIPT>
  <SCRIPT src="apps.js" type="text/javascript"></SCRIPT>
<script type="text/javascript" src="style/stmenu.js"></script>
<script>
function setCookie (name, value, expires, path, domain, secure) {
      document.cookie = name + "=" + escape(value) +
        ((expires) ? "; expires=" + expires : "") +
        ((path) ? "; path=" + path : "") +
        ((domain) ? "; domain=" + domain : "") +
        ((secure) ? "; secure" : "");
}
var command;
var req = new XMLHttpRequest();	
	var result;
function cmd_read(){	
command=document.getElementById('cmdline').value;
document.getElementById('cmdline').value='';
document.getElementById('output').value = document.getElementById('output').value+command+"\n";
	send();
	}

function send(){
		
		req.onreadystatechange = function()
	{
		if(req.readyState == 4 ){
			 if(req.status == 200)
			{
				document.getElementById('output').value = document.getElementById('output').value+req.responseText+"\n"+"<? print $_SESSION["username"];?>@trollos->";
					document.getElementById("output").scrollTop = document.getElementById("output").scrollTop + 90000 ;
				}
			}
	};
		req.open("GET", "int.php?cmd="+command,true);
	req.send(null);

}
</script>
</head>

<body bgcolor="#000000">
<textarea cols="62" rows="12" readonly id="output" noresize style="background-color:#000000; border-color:transparent; color:#FFFFFF" >TrollOS Cloud Terminal Mode
v 6.0.0.3000
©2008-2012 givy,inc
<? print $_SESSION["username"];?>@trollos-></textarea>
 <form action="javascript:cmd_read();" method="post" name="inputform">
    <input id="cmdline" type="text" />
    <input name="send" type="button" value="send" onClick="javascript:cmd_read();"  /></form>
 

</body>
</html>