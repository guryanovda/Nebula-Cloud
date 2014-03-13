<?
session_start();
error_reporting ( E_ERROR | E_PARSE );
$db=sqlite_open('../../system.db');
if($_GET['sec']=='accaunt'):
$db1=sqlite_open('../../../../base.db');
 sqlite_query($db1, "UPDATE users SET name='".$_POST['name']."',last_name='".$_POST['lastname']."',login='".$_POST['login']."' WHERE login='".$_SESSION['username']."';"); 
endif;
if($_GET['sec']=='network'):
 sqlite_query($db, "UPDATE share SET ashare='".$_POST['checkbox1']."',openshare='".$_POST['checkbox2']."' WHERE id=1;"); 
endif;
if($_GET['sec']=='language'):
 sqlite_query($db, "UPDATE language SET system='".$_POST['Language']."' WHERE id=1;"); 
endif;
if($_GET['sec']=='notice'):
 sqlite_query($db, "UPDATE notifications SET updates='".$_POST['checkbox']."',uploading='".$_POST['checkbox2']."',im='".$_POST['checkbox3']."',connection='".$_POST['checkbox4']."' WHERE id=1;"); 
endif;
if($_GET['sec']=='settings'):
 sqlite_query($db, "UPDATE prefrences SET icomove='".$_POST['checkbox1']."',task='".$_POST['checkbox2']."',updates='".$_POST['checkbox3']."' WHERE id=1;"); 
endif;
if($_GET['sec']=='safe'):
$_POST['new1']= md5(md5(md5($_POST['new1'])));
$db1=sqlite_open('../../../../base.db');
 sqlite_query($db1, "UPDATE users SET password='".$_POST['new1']."' WHERE login='".$_SESSION['username']."';"); 
endif;
if($_GET['sec']=='search'):
 sqlite_query($db, "UPDATE search SET google='".$_POST['checkbox1']."',files='".$_POST['checkbox2']."' WHERE id=1;"); 
endif;
header ("Location: TCC.php?info=ok");
?>