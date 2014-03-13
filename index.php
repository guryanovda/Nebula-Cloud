<?php error_reporting(E_ERROR | E_PARSE);
include ('kernel.php');
if ($_SESSION['username'] == "") :
	header("Location: login.php");
endif;
token_get();
update();
print "<script>var user='" . $_SESSION['username'] . "';</script>";
?>

<html>
	<head>
		<title>Nebula 2 "Созвездие Андромеды"</title>
		<meta name="author" content="givy">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<LINK rel="stylesheet" href="users/<? print $_SESSION['username']?>/style/workplace.css" type="text/css" />
		<SCRIPT src="myAPI.js" type="text/javascript"></SCRIPT>
		<SCRIPT src="users/<? print $_SESSION['username']?>/applications/apps.js" type="text/javascript"></SCRIPT>
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		<script src="https://www.google.com/jsapi?key=ABQIAAAAqOCxBlVyVQCCfNR4-0X52BRi8quysmrWI3zFGosiUfNQfus45xSVKakjKqOr9I5tqxAzWAlNsO5_bA" type="text/javascript"></script>
		<script type="text/JavaScript">
			function MM_reloadPage(init) {//reloads the window if Nav4 resized
				if (init == true)
					with (navigator) {
						if ((appName == "Netscape") && (parseInt(appVersion) == 4)) {
							document.MM_pgW = innerWidth;
							document.MM_pgH = innerHeight;
							onresize = MM_reloadPage;
						}
					}
				else if (innerWidth != document.MM_pgW || innerHeight != document.MM_pgH)
					location.reload();
			}

			MM_reloadPage(true);
		</script>
		<style type="text/css">
			#dragfile {
				position: absolute;
				bottom: 0;
				right: 0;
				width: 100%;
				height: 100%;
				text-align: center;
				color: #000000;
				font-size: 16pt;
				display: table-cell;
				vertical-align: middle;
			}
		</style>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36113035-1']);
			_gaq.push(['_setDomainName', 'trollos.x10.mx']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<script src="bootstrap/js/bootstrap.js"></script>
	</head>

	<body id="workplace">
		<?php
include ('users/' . $_SESSION['username'] . '/style/UI/workplace.php');
include('users/'.$_SESSION['username'].'/style/wigets.php')
		?>
	</body>
</html>

