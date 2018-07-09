<?php
include('kernel/kernel.php');
if ($_SESSION["username"] != '') :
    header("Location: user/" . $_SESSION['username'] . "/index.php");
endif;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Nebula V Cloub Builder | Авторизация</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="style/css/login.css" rel="stylesheet" media="screen">
    <link href="style/libs/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">

</head>

<body>
<img id='logo' src="style/img/logo.png" style="position: absolute; bottom: 140px; height: 30px;" />
<div style="position: absolute; bottom: 10px; color: #fff; font-size: 120pt;  font-family: Arial;" id="hours"></div>
<div style="position: absolute; bottom: 60px; color: #fff; font-size: 12pt;  font-family: Tahoma;" id="week"></div>
<div style="position: absolute; bottom: 30px; color: #fff;" id="data"><span style="font-size: 20pt;  font-family: Arial;" id="day"></span><span style="font-size: 20pt;  font-family: Tahoma;" id="month"></span></div>
<div id="auth">
    <div class="arrow-box" id="arrow" style="position: absolute; bottom: 205px; width: 400px;"><br><input type="submit" class="btn btn-primary" style="position: relative;bottom: 10px; right: 10px; " value="Войти">
        <a style="color:#fff;font-size:8pt;position:absolute;bottom:14px;left:10px;">Забыли пароль?</a><br></div>
    <div id='loginform' style="position: absolute; bottom: 250px; height: 180px; width: 400px; background-color: #f5f5f5; border-top-left-radius: 7px; border-top-right-radius: 7px;">
        <div class="popover-title" style="height: 50px;background-color: #fff;"><span style="position: relative; top: 16px; left:125px; font-size: 16pt; color: #777;">Авторизация</span></div>
        <div class="popover-content" style="position: absolute; left: 30px;" >
            <form class="form-horizontal" method="post" action="kernel/1.php">
                <input type="text" id="login" name="login" placeholder="Имя пользователя" style="width: 250px;">
                <input type="password" id="password" name="password" placeholder="Пароль" style="width: 250px;">
                <input type="submit" style="background: transparent url(style/img/ok.png) no-repeat center top; border: 0; position: relative; bottom: 95px; left: 30px; height: 42px; width: 40px" value="" />
            </form>
        </div>
    </div>
</div>


<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="style/libs/bootstrap/js/bootstrap.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="style/js/login.js"></script>

<script>

    <?
    if ($_GET['error'] == 1) :
        print 'alert(1324);
                document.getElementById("log").value="' . $_GET['login'] . '";';
    endif;
    ?></script>
</body>
</html>
