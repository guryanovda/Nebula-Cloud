<?
error_reporting ( E_ERROR | E_PARSE );
session_start();

$db = sqlite_open("system.db");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TrollOS Control Center</title>
</head>

<body bgcolor="#FFFFFF">
<?php
if ($_GET['section']=="accaunt"):
$db1 = sqlite_open("../../../../base.db");
$q = sqlite_query($db1, "SELECT * FROM users WHERE login='".$_SESSION["username"]."'");
$array = sqlite_fetch_array($q);
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/preferences-desktop-user.png" width="64" height="64" /></td>
    <td><h1>Персонализация</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=accaunt">
     Личные данные<hr />Логин:<br /><input name="login" type="text" size="35" value="'.$array['login'].'"/><br />
	Имя:<br /><input name="name" type="text" size="35" value="'.$array['name'].'"/><br />
    Фамилия:<br /><input name="lastname" type="text" size="35" value="'.$array['last_name'].'"/><input name="Submit" type="submit" value="Сохранить" />
    </form>      </td>
  </tr>
</table>';
endif;
if ($_GET['section']=="info"):
$a=memory_get_usage();
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/hwinfo.png" width="64" height="64" /></td>
    <td><h1>Системная информация</h1></td>
	
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td rowspan="2">Информация о сессии:<hr />
	IP: '.$_SERVER["REMOTE_ADDR"].'<br /><br>
    Использование ОЗУ:<hr />
  Использовано: '.$a.' Bytes</td>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
';
endif;
if ($_GET['section']=="network"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM share WHERE id !='0'");
$array = sqlite_fetch_array($q);
if ($array['ashare']==1){
$checked1='checked="checked"';
}
if ($array['openshare']==1){
$checked2='checked="checked"';
}
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/network.png" width="64" height="64" /></td>
    <td colspan="3"><h1>Сеть и обмен данными</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td colspan="3" rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=network">
      <label>
      <input name="checkbox1" type="checkbox" value="1" '.$checked1.' />
      Делится файлами с друзьями</label>
        <br />
        <label>
        <input name="checkbox2" type="checkbox" value="1" '.$checked2.' />
       Open Sharing(используется TrollSearch)</label>
        <br />
    <input name="Submit" type="submit" value="Сохранить" />
    </form>    <h3>&nbsp;</h3></td>
  </tr>
</table>';
endif;
if ($_GET['section']=="integration"):
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/user.png" width="64" height="64" /></td>
    <td width="80%"><h1>Настройки интеграции</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td><div id="vk_auth"></div>
<script type="text/javascript">
VK.Widgets.Auth("vk_auth", {width: "200px", onAuth: function(data) {
 alert(\'user \'+data[\'uid\']+\' authorized\');
} });
</script></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>';
endif;
if ($_GET['section']=="language"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM language WHERE id !='0'");
$array = sqlite_fetch_array($q);
if ($array['system']=='Russian'){
$checked2='selected="selected"';
}
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/language.png" width="64" height="64" /></td>
    <td width="80%"><h1>Языковые настройки</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td><h3>Ваш язык:</h3></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><form method="post" action="accept.php?sec=language"><select name="Language" size="1" >
  <option value="Russian" '.$checked2.' >Русский</option>
</select><input name="Submit" type="submit" value="Установить" /></form></td>
  </tr>
</table>';
endif;
if ($_GET['section']=="apps"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM applications WHERE id !='0'");
$array = sqlite_fetch_array($q);
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/applications-toys.png" width="64" height="64" /></td>
    <td colspan="3"><h1>Приложения</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td colspan="3"><h3>Установлено:</h3></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="5%">'.$array['full'].'</td>
    <td width="66%">'.$array['description'].'</td>
    <td width="9%"></td>
  </tr>
</table>';
endif;
if ($_GET['section']=="notice"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM notifications WHERE id !='0'");
$array = sqlite_fetch_array($q);
if ($array['updates']==1){
$checked1='checked="checked"';
}
if ($array['uploading']==1){
$checked2='checked="checked"';
}
if ($array['im']==1){
$checked3='checked="checked"';
}
if ($array['connection']==1){
$checked4='checked="checked"';
}
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/chat_controls.png" width="64" height="64" /></td>
    <td colspan="3"><h1>Настройки уведомлений</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td colspan="3" rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=notice">
      <label>
      <input name="checkbox" type="checkbox" value="1" '.$checked1.' />
      Уведомлять о новых обновлениях</label>
        <br />
        <label>
        <input name="checkbox2" type="checkbox" value="1" '.$checked2.' />
        Сообщать данные о текущей загрузке</label>
        <br />
        <label>
        <input type="checkbox" name="checkbox3" value="1" '.$checked3.'/>
        Чат</label>
        <br />
        <label>
        <input type="checkbox" name="checkbox4" value="1" '.$checked4.'/>
        Входящие соединения</label><br />
    <input name="Submit" type="submit" value="Сохранить" />
    </form>    <h3>&nbsp;</h3></td>
  </tr>
</table>';
endif;
if ($_GET['section']=="settings"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM prefrences WHERE id !='0'");
$array = sqlite_fetch_array($q);
if ($array['updates']==1){
$checked1='checked="checked"';
}
if ($array['icomove']==1){
$checked2='checked="checked"';
}
if ($array['task']==1){
$checked3='checked="checked"';
}
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/applications-development.png" width="64" height="64" /></td>
    <td colspan="3"><h1>Общие настройки</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td colspan="3" rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=settings">
      <label>
      <input name="checkbox3" type="checkbox" value="1" '.$checked1.' />
     Автообновление</label>
        <br />
		<label>
      <input name="checkbox1" type="checkbox" value="1" '.$checked2.' />
      Движение иконок</label>
        <br />
    <input name="Submit" type="submit" value="Сохранить" />
    </form> </td>
  </tr>
</table>';
endif;
if ($_GET['section']=="safe"):
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/safe.png" width="64" height="64" /></td>
    <td><h1>Безопасность</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=safe">
     Смена пароля<hr />Старый пароль:<br /><input name="old" type="password" size="35" /><br />
	Новый пароль:<br /><input name="new1" type="password" size="35" /><br />
    Повторите пароль:<br /><input name="new2" type="password" size="35" /><input name="Submit" type="submit" value="Сохранить" />
    </form>      </td>
  </tr>
</table>';
endif;
if ($_GET['section']=="search"):
$db = sqlite_open("../../system.db");
$q = sqlite_query($db, "SELECT * FROM search WHERE id !='0'");
$array = sqlite_fetch_array($q);
if ($array['google']==1){
$checked1='checked="checked"';
}
if ($array['files']==1){
$checked2='checked="checked"';
}
print'<table width="100%" border="0">
  <tr>
    <td width="20%"><img src="../../icons/xmag.png" width="64" height="64" /></td>
    <td colspan="3"><h1>Настройки поиска</h1></td>
  </tr>
  <tr>
    <td><a href="TCC.php"  ><img src="../../icons/back.png" width="64" height="64" /></a></td>
    <td colspan="3" rowspan="2"><form id="form1" name="form1" method="post" action="accept.php?sec=search">
      <label>
      <input name="checkbox1" type="checkbox" value="1" '.$checked1.' />
      Google поисковый виджет</label><br>
        <br />
    <input name="Submit" type="submit" value="Сохранить" />
    </form>    <h3>&nbsp;</h3></td>
  </tr>
</table>';
endif;
?>

</body>
</html>
