<? error_reporting ( E_ERROR | E_PARSE ); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Utf-8" />
<title>TrollOS Control Center</title>
</head>

<body bgcolor="#FFFFFF">
<table width="100%" border="0" align="center">
  <tr align="center">
    <td><a href="control.php?section=accaunt"><img src="../../icons/preferences-desktop-user.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=info"><img src="../../icons/hwinfo.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=apps"><img src="../../icons/applications-toys.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=network"><img src="../../icons/network.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=settings"><img src="../../icons/applications-development.png" width="64" height="64" /></a></td>
  </tr>
  <tr align="center" >
    <td><a href="control.php?section=accaunt">Аккаунт</a></td>
    <td><a href="control.php?section=info">Информация</a></td>
    <td><a href="control.php?section=apps">Приложения</a></td>
    <td><a href="control.php?section=network">Сеть</a></td>
    <td><a href="control.php?section=settings">Настройки</a></td>
  </tr>
  <tr align="center">
    <td><a href="control.php?section=language"><img src="../../icons/language.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=notice"><img src="../../icons/chat_controls.png" width="64" height="64" /></a></td>
   <td><a href="control.php?section=safe"><img src="../../icons/safe.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=integration"><img src="../../icons/user.png" width="64" height="64" /></a></td>
    <td><a href="control.php?section=search"><img src="../../icons/xmag.png" width="64" height="64" /></a></td>
  </tr >
  <tr align="center">
    <td><a href="control.php?section=language">Язык</a></td>
    <td><a href="control.php?section=notice">Уведомления</a></td>
    <td><a href="control.php?section=safe">Безопасность</a></td>
    <td><a href="control.php?section=integration">Интеграция</a></td>
    <td><a href="control.php?section=search">Поиск</a></td>
  </tr>
  <tr align="center">
    <td colspan=5 ><? if ($_GET['info']=='ok') print '<h3>Изменения сохранены</h3>'?></td>
  </tr>
</table>
</body>
</html>
