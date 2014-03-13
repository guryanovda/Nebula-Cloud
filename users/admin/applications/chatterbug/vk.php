<?
$string=$_GET['tocken'];
$i=strlen($string);
$k=strpos($string, '=');
$g=strpos($string, '&');
$a=substr($string, $k+1, $g-$k-1);
$b=substr($string, $g+22);
print 'Вы успешно вошли в систему. Это окно можно закрыть.';
$db=sqlite_open('../../system.db');
sqlite_query($db, "UPDATE account SET tocken='".$a."',vk='".$b."' WHERE id='1';"); 
?>