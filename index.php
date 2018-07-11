<?php
include('Kernel/System.php');
$configuration = \Kernel\System::systemInit();
\Kernel\System::authorisationRequired();
print "";
?>

<html>
	<head>
		<title><?=$configuration['System']['system_name'] ?> </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="style/libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="style/css/workplace.css" type="text/css">
	</head>

	<body id="workplace">


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
        <script src="style/libs/bootstrap/js/bootstrap.js"></script>
	</body>
</html>

