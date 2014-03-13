<?php
include ('kernel.php');
if ($_SESSION["username"] != '') :
	header("Location: user/" . $_SESSION['username'] . "/index.php");
endif;
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>TrollOS Project|User Login</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<style>
			body {
				-moz-user-select: none;
				-khtml-user-select: none;
				user-select: none;
				background-image: url(login.jpg);
				background-repeat: no-repeat;
				background-size: cover;
				height: 100%;
				overflow: hidden;
			}
				.arrow-box {
				position: relative;
				background: #000000;
				opacity: 0.9;
			}
			.arrow-box:after {
				top: 100%;
				border: solid transparent;
				content: " ";
				height: 0;
				width: 0;
				position: absolute;
				pointer-events: none;
			}

			.arrow-box:after {
				border-color: rgba(0, 0, 0, 0);
				border-top-color: #000000;
				border-width: 30px;
				left: 120px;
				margin-left: -30px;
				
			}
		</style>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	</head>

	<body >
	<img id='logo' src="logo.png" style="position: absolute; bottom: 140px; height: 30px;" />
	<div style="position: absolute; bottom: 10px; color: #fff; font-size: 120pt;  font-family: Arial;" id="hours"></div>
	<div style="position: absolute; bottom: 60px; color: #fff; font-size: 12pt;  font-family: Tahoma;" id="week"></div>
	<div style="position: absolute; bottom: 30px; color: #fff;" id="data"><span style="font-size: 20pt;  font-family: Arial;" id="day"></span><span style="font-size: 20pt;  font-family: Tahoma;" id="month"></span></div>
	<div id="auth">
	<div class="arrow-box" id="arrow" style="position: absolute; bottom: 205px; width: 400px;"><br><button class="btn btn-primary" id="regbut" style="position: relative;bottom: 10px; left: 10px; ">Регистрация</button><a style="color:#fff;font-size:8pt;position:absolute;bottom:14px;right:10px;">Забыл пароль? Тебе сюда</a><br></div>
	<div id='loginform' style="position: absolute; bottom: 250px; height: 180px; width: 400px; background-color: #f5f5f5; border-top-left-radius: 7px; border-top-right-radius: 7px;">
	<div class="popover-title" style="height: 50px;background-color: #fff;"><span style="position: relative; top: 16px; left:125px; font-size: 16pt; color: #777;">Авторизация</span></div>
	<div class="popover-content" style="position: absolute; left: 30px;" >
	<form class="form-horizontal" method="post" action="1.php"> 
      <input type="text" id="login" name="login" placeholder="login" style="width: 250px;">
      <input type="password" id="password" name="password" placeholder="password" style="width: 250px;">
  <input type="submit" style="background: transparent url(ok.png) no-repeat center top; border: 0; position: relative; bottom: 95px; left: 30px; height: 42px; width: 40px" value="" />
</form>
	</div>
	</div>
	</div>
	<div id="reg">
	<div class="arrow-box" id="arrow-reg" style="position: absolute; bottom: 205px; width: 400px;"><br><button id="loginbut" class="btn btn-primary" style="position: relative;bottom: 10px; left: 10px; ">Авторизация</button><a style="color:#fff;font-size:8pt;position:absolute;bottom:14px;right:10px;">Лицензия</a><br></div>
	<div id='regform' style="position: absolute; bottom: 250px; height: 220px; width: 400px; background-color: #f5f5f5; border-top-left-radius: 7px; border-top-right-radius: 7px;">
	<div class="popover-title" style="height: 50px; background-color: #fff;"><span style="position: relative; top: 16px; left:125px; font-size: 16pt; color: #777; ">Регистрация</span></div>
	<div class="popover-content" style="position: absolute; left: 30px; background-color: #f5f5f5;" >
	<form class="form-horizontal" method="post" action="1.php"> 
      <input type="text" id="login" name="login" placeholder="login" style="width: 250px; position: absolute; top: 10px;"><br>
      <input type="password" id="password" name="password" placeholder="password" style="width: 250px; position: absolute; top: 50px;"><br>
	  <input type="password" id="password-repeat" name="password-2" placeholder="password confirmation" style="width: 250px; position: absolute; top: 90px;">
  <input type="submit" style="background: transparent url(ok.png) no-repeat center top; border: 0; position: relative; bottom: 105px; left: 300px; height: 42px; width: 40px" value="" />
</form>
	</div>
	</div>
	</div>
	<script>
	var doc_w = $(document).width();
	doc_w = doc_w/2;
		doc_w = doc_w-50;
		document.getElementById('logo').style.right = doc_w + 'px';
		doc_w = doc_w-50;
		document.getElementById('hours').style.right = doc_w + 'px';
		obj_hours=document.getElementById("hours");
		doc_w = doc_w+210;
		document.getElementById('week').style.left = doc_w + 'px';
		obj_week=document.getElementById("week");
		document.getElementById('data').style.left = doc_w + 'px';
		doc_w = doc_w-340;
		document.getElementById('arrow').style.right = doc_w + 'px';
		document.getElementById('loginform').style.right = doc_w + 'px';
		document.getElementById('arrow-reg').style.right = doc_w + 'px';
		document.getElementById('regform').style.right = doc_w + 'px';
		obj_day=document.getElementById("day");
		obj_month=document.getElementById("month");
		name_month=new Array ("Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря");
		name_day=new Array ("Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота");

		function wr_hours()
		{
		time=new Date();

		time_min=time.getMinutes();
		time_hours=time.getHours();
		time_wr=((time_hours<10)?"0":"")+time_hours;
		time_wr+=":";
		time_wr+=((time_min<10)?"0":"")+time_min;
		obj_hours.innerHTML=time_wr;
		obj_week.innerHTML=name_day[time.getDay()];
		obj_day.innerHTML=time.getDate()+' ';
		obj_month.innerHTML=name_month[time.getMonth()];
		time_wr=""+name_day[time.getDay()]+time.getDate()+name_month[time.getMonth()]+" "+time.getFullYear()+""+time_wr;

		//obj_hours.innerHTML=time_wr;
		}

		wr_hours();
		setInterval("wr_hours();",1000);
		
		  $( "#regform" ).hide();
  $( "#arrow-reg" ).hide();
		
		
		$( "#regbut" ).click(function() {
		
  $( "#loginform" ).hide( "drop", { direction: "left" }, "fast" );
  $( "#arrow" ).hide( "drop", { direction: "left" }, "fast" );
$( "#regform" ).show( "drop", { direction: "right" }, "slow" );
  $( "#arrow-reg" ).show( "drop", { direction: "right" }, "slow" ); 
});
		$( "#loginbut" ).click(function() {
		
  $( "#regform" ).hide( "drop", { direction: "right" }, "fast" );
  $( "#arrow-reg" ).hide( "drop", { direction: "right" }, "fast" );
$( "#loginform" ).show( "drop", { direction: "left" }, "slow" );
  $( "#arrow" ).show( "drop", { direction: "left" }, "slow" ); 
});
		</script>
		<?
if ($_GET['error'] == 1) :
	print 'alert(' . $_SESSION['loginerror'] . ');
document.getElementById("log").value="' . $_GET['login'] . '";';
endif;
?></script>
	</body>
</html>
