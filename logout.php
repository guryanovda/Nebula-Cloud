<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$_SESSION["username"] = "";
header("Location: login.php");
?>