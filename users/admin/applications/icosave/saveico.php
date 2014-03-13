<?
session_start();
//error_reporting ( E_ERROR | E_PARSE );
$db=sqlite_open('../../system.db');
sqlite_query($db, "UPDATE icons SET x='".$_GET['x']."',y='".$_GET['y']."' WHERE layer='".$_GET['layer']."';"); 

?>