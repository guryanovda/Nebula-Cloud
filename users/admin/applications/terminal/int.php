<?
error_reporting ( E_ERROR | E_PARSE );
session_start();
$cmd=$_GET['cmd'];
if (preg_match("/test/i", $cmd)){
		print "I'm work. There is no any problems. Fuck yeah";
		exit;
}
if (preg_match("/date/i", $cmd)){
		print date("l dS  F Y h:i:s A");
		exit;
}
if (preg_match("/calc/i", $cmd)){
		print date("l dS  F Y h:i:s A");
		exit;
}
if (preg_match("/absolute/i", $cmd)){
		$i=9;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print abs($chi);
		exit;
}
if (preg_match("/acos/i", $cmd)){
		$i=5;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print acos($chi);
		exit;
}
if (preg_match("/asin/i", $cmd)){
		$i=5;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print asin($chi);
		exit;
}
if (preg_match("/atan/i", $cmd)){
		$i=5;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print atan($chi);
		exit;
}
if (preg_match("/2to10/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print bindec($chi);
		exit;
}
if (preg_match("/2to16/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print bin2hex($chi);
		exit;
}
if (preg_match("/ceil/i", $cmd)){
		$i=5;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print ceil($chi);
		exit;
}
if (preg_match("/cos/i", $cmd)){
		$i=4;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print cos($chi);
		exit;
}
if (preg_match("/crypt/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print crypt($chi);
		exit;
}
if (preg_match("/10to2/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print decbin($chi);
		exit;
}
if (preg_match("/10to8/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print decoct($chi);
		exit;
}
if (preg_match("/10to16/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print dechex($chi);
		exit;
}
if (preg_match("/deg2rad/i", $cmd)){
		$i=8;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print deg2rad($chi);
		exit;
}
if (preg_match("/rad2deg/i", $cmd)){
		$i=8;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print rad2deg($chi);
		exit;
}
if (preg_match("/ln/i", $cmd)){
		$i=4;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print log($chi);
		exit;
}
if (preg_match("/log10/i", $cmd)){
		$i=6;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print log10($chi);
		exit;
}
if (preg_match("/md5/i", $cmd)){
		$i=4;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print md5($chi);
		exit;
}
if (preg_match("/odr/i", $cmd)){
		$i=4;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print ord($chi);
		exit;
}
if (preg_match("/chr/i", $cmd)){
		$i=4;
		while ($cmd[$i]!='') {
			$chi=$chi.$cmd[$i];
			$i++;
		}
		print chr($chi);
		exit;
}
if (preg_match("/spin/i", $cmd)){
		
		print "You spin me right round, baby, right round, like a record, baby, round, round, round";
		exit;
}
if (preg_match("/rand/i", $cmd)){
		print rand();
		exit;
}
if (preg_match("/help/i", $cmd)){
		print "help \t get help
test \t test the system/internet connection
date \t get current date and time
absolute \t absolute of argument
acos \t get the acos of argument
asin \t get the asin of argument
atan \t get the atan of argument
2to10 \t translate binary to decimal
2to16 \t translate binary to hex
ceil \t round fractions up 
cos \t get the cos of argument
crypt \t One-way string hashing
10to2 \t translate decimal to binary
10to8 \t translate decimal to oct
10to16 \t translate decimal to hex
deg2rad \t translate from degries to radians
rad2deg \t translate from radians to degries
exp \t calculates the exponent of e
floor \t round fractions down
ln \t natural log of argument
log10 \t base 10 log of argument
md5 \t md5-encrypted hash of argument
ord \t get the ASCII-code of simbol
chr \t transform ASCII-code to simbol
rand \t random number
";
		exit;
}

?>
