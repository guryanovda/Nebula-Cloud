<?php
session_start();
function bad_simbols($passarray,$code){
	$a=0;
	while ($passarray[$a]!=''):
	if ($passarray[$a]==' ' or $passarray[$a]=='!' or $passarray[$a]=='#' or $passarray[$a]=='$' or $passarray[$a]=='%' or $passarray[$a]=='^' or $passarray[$a]=='&' or $passarray[$a]=='*' or $passarray[$a]=='(' or $passarray[$a]==')' or $passarray[$a]=='{' or $passarray[$a]=='}' or $passarray[$a]=='[' or $passarray[$a]==']' or $passarray[$a]=='\'' ):																																																																																																																																						 return ($code);
	 return $code;
	 endif;
	$a=$a+1;
endwhile;
if($a==0){return ('fclear');}
}
if ($_GET['step']==1):
	header ("Location: reg.php?step=2");
endif;
if ($_GET['step']==2):
if($_POST['name']=='' or $_POST['fam']==''):
$error='fclear';
endif;
$error=bad_simbols($_POST['name'],1);
$error=bad_simbols($_POST['fam'],2);
	if($error==''):
$_SESSION['name']=$_POST['name'];
$_SESSION['fam']=$_POST['fam'];
endif;
if ($error!=''):
	header ("Location: reg.php?step=2&er=".$error."");
endif;
if ($error==''):
	header ("Location: reg.php?step=3");
endif;
endif;
if ($_GET['step']==3):
if ($_POST['pass1']!=$_POST['pass2']):
	$error=1;
	endif;
	if($error==''):
$db=sqlite_open('server/base.db');
$q = sqlite_query($db, "SELECT * FROM users WHERE login='" .$_POST['login']. "'");
$n = sqlite_num_rows($q);
if ($n!=0):
$error=2;
endif;
endif;
if($error==''):
$error=bad_simbols($_POST['login'],3);
$error=bad_simbols($_POST['pass1'],4);
endif;
if($error==''):
$_SESSION['login']=$_POST['login'];
$_SESSION['pass']=md5(md5(md5($_POST['pass1'])));
endif;
if($error!=''):
header ("Location: reg.php?step=3&er=".$error."&login=".$_POST['login']."");
else:
header ("Location: reg.php?step=4");
endif;
endif;



if ($_GET['step']==4):
include ('record.php');
     mkdir("server/user/".$_SESSION['login'],0777);
	$zip = new ZipArchive;
if ($zip->open('realise.zip') === TRUE) {
$zip->extractTo('server/user/'.$_SESSION['login'].'/');
$zip->close();

}
header ("Location: server/user/".$_SESSION['login']."/index.php");


	 endif;
?>
