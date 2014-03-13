<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
error_reporting ( E_ERROR | E_PARSE | E_WARNING);
    $a=$_GET['filename'];
	while ($a[$i]!=''):
	 if($a[$i]=='.') $end=$i;
	 $i=$i+1;
	endwhile;
	while ($end<=$i):
	 $format=$format.$a[$end];
	 $end=$end+1;
	endwhile;
	$folder=etc;
	if ($format=='.mp3') $folder='music';
	if ($format=='.txt') $folder='docs';
	if ($format=='.jpg' or $format=='.jpeg' or $format=='.gif' or $format=='.png' or $format=='.tiff' ) $folder='images';
	if ($format=='.flv') $folder='videos';
	$filename='cloud/'.$folder."/".$a;
	if (!$file= fopen($filename,"w"))
	{
		die(":".$filename);
	}
	if (fwrite($file,$HTTP_RAW_POST_DATA) === FALSE)
	{
		die(":".$filename);
	}
	fclose($file);
	print 'Загрузка завершена';
?>
</body>