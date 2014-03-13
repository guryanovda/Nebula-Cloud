<html>
<head>
<title>Bug report</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<SCRIPT src="myAPI.js" type="text/javascript"></SCRIPT>
  <SCRIPT src="apps.js" type="text/javascript"></SCRIPT>
</head>
<?php
$bugs = fopen("../admin/bugs.txt","a");
$bug = "<bug start> \n ".$_POST['textreport']." \n<bug end> \n";
fwrite($bugs,$bug);
fclose($bugs);
print "Ваш отчет успешно обработан. Указанная вами ошибка будет исправлена в ближайшее время. Благодарим за помощь в развитии проекта TrollOS Cloud."
?>