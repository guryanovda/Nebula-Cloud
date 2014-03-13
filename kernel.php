<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
function controlpaneltableupdate($sec) {//обновление данных через панель управления
	$db = sqlite_open('users/' . $_SESSION['username'] . '/system.db');
	if ($sec == 'accaunt') :
		$db1 = sqlite_open('base.db');
		sqlite_query($db1, "UPDATE users SET name='" . $_POST['name'] . "',last_name='" . $_POST['lastname'] . "',login='" . $_POST['login'] . "' WHERE login='" . $_SESSION['username'] . "';");
	endif;
	if ($sec == 'network') :
		sqlite_query($db, "UPDATE share SET ashare='" . $_POST['checkbox1'] . "',openshare='" . $_POST['checkbox2'] . "' WHERE id=1;");
	endif;
	if ($sec == 'language') :
		sqlite_query($db, "UPDATE language SET system='" . $_POST['Language'] . "' WHERE id=1;");
	endif;
	if ($sec == 'notice') :
		sqlite_query($db, "UPDATE notifications SET updates='" . $_POST['checkbox'] . "',uploading='" . $_POST['checkbox2'] . "',im='" . $_POST['checkbox3'] . "',connection='" . $_POST['checkbox4'] . "' WHERE id=1;");
	endif;
	if ($sec == 'settings') :
		sqlite_query($db, "UPDATE prefrences SET icomove='" . $_POST['checkbox1'] . "',task='" . $_POST['checkbox2'] . "',updates='" . $_POST['checkbox3'] . "' WHERE id=1;");
	endif;
	if ($sec == 'safe') :
		$_POST['new1'] = md5(md5(md5($_POST['new1'])));
		$db1 = sqlite_open('base.db');
		sqlite_query($db1, "UPDATE users SET password='" . $_POST['new1'] . "' WHERE login='" . $_SESSION['username'] . "';");
	endif;
	if ($sec == 'search') :
		sqlite_query($db, "UPDATE search SET google='" . $_POST['checkbox1'] . "',files='" . $_POST['checkbox2'] . "' WHERE id=1;");
	endif;
	return true;
}

function update()//обновление
{
	$db1 = sqlite_open('users/' . $_SESSION['username'] . '/system.db');
	$q1 = sqlite_query($db1, "SELECT * FROM system WHERE field='version'");
	$array1 = sqlite_fetch_array($q1);
	$db2 = sqlite_open('base.db');
	$q2 = sqlite_query($db2, "SELECT * FROM updates WHERE version !=0");
	$array2 = sqlite_fetch_array($q2);
	sqlite_query($db1, "UPDATE system SET mean='" . $array2['version'] . "' WHERE field='version'");
}

function stardate()//вычисление звездной даты
{
	$stardate = (time() - 11139552000) / 31556926 * 1000;
	return round($stardate, 2);
}

function setUserName() {
	$db1 = sqlite_open("base.db");
	$q = sqlite_query($db1, "SELECT * FROM users WHERE login='" . $_SESSION["username"] . "'");
	$array = sqlite_fetch_array($q);
	return ($array['name'] . " " . $array['last_name']);
}
function token_get(){
	$datbas= sqlite_open("users/".$_SESSION['username']."/system.db");
$q= sqlite_query($datbas,"SELECT * FROM account WHERE id='1'");
$user = sqlite_fetch_array($q);
if ($user["tocken"] != ''){

	print "<script> 
		var tocken='".$user['tocken']."';
		var id='".$user['vk']."';
		</script>";

}
else
{return(null);}
}
?>