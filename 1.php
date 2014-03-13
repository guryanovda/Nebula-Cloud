<?php
session_start();
$_SESSION['loginerror'] = '';
$l = $_POST['login'];
$p = md5(md5(md5($_POST['password'])));
if ($_SESSION['loginerror'] == '') :
	$db = sqlite_open('base.db');
	$q = sqlite_query($db, "SELECT * FROM users WHERE  login='" . $l . "'");
	$n = sqlite_num_rows($q);
	if ($n == 1) :
		$array = sqlite_fetch_array($q);
		if ($array['password'] === $p) {
			$_SESSION['log_stat'] = $array["name"] . " " . $array["last_name"];
			$_SESSION["username"] = $l;
			header("Location: index.php");
		} else {
			$_SESSION['loginerror'] = '"Неверный пароль. Повторите ввод ещё раз."';
			header("Location: login.php?error=1&login=" . $l . "");
		}
	else :
		$_SESSION['loginerror'] = '"Пользователя с таким логином не существует. Повторите ввод ещё раз."';
		header("Location: login.php?error=1&login=" . $l . "");
	endif;
endif;
?>