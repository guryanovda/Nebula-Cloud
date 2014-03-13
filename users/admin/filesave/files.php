<?php
error_reporting ( E_ERROR | E_PARSE | E_WARNING );
if((realpath($_GET['section'])=='C:\xampp\htdocs\five\users\admin\filesave'))
{
header ("Location: index.php");
}
if ($_GET['section']=='local'):
		$_GET['section']=realpath('C:');
		endif;
?>
<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Untitled Document</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link href="../applications/lightbox/css/lightbox.css" rel="stylesheet" />
      <script src="../applications/lightbox/js/lightbox.js"></script>
</head>

<body>
  <?
   print '<div style="width:100%;position:fixed;left:0px;top:0px; background-color:#FFFFFF;z-index:3;"><a href="files.php?section='.realpath($_GET['section']).'/../"><img src="style/back.png" width="32" height="32"></a><input name="" type="text" value="'.realpath($_GET['section']).'" style="position:absolute;top:4px;left:40px;width:450px"></div>';
  ?>
 <div style="position:absolute;top:40px;z-index:1">
<table width="100%" border=0>
 


<?php
if ($_GET['funct']!=''){
		$x=$_GET['funct'];
		$y=$_GET['obj'];
		if(($x=='unlink') and (is_file($_GET['section'].'/'.$y)) ){
				unlink($_GET['section'].'/'.$y);
			}
			elseif(($x=='unlink') and (is_dir($_GET['section'].'/'.$y))){
			if($dir=opendir($section)):
		while (false!==($file=readdir($dir))) {
			if($file!='.' and $file!='..'):
				unlink($_GET['section'].'/'.$y.'/'.$file);
			endif;
		}
			
		endif;
		rmdir($_GET['section'].'/'.$y);}
	}

function shortname($s){
	if ($s[8]!=''){
	$s1=$s[0].$s[1].$s[2].$s[3].$s[4].$s[5].$s[6].$s[7];
	return $s1;}
	else
	return $s;
}
function getfiletype($s){
		while ($s[$i]){
				if ($s[$i]=='.'){$pos=$i;}
				$i++;
			}
			if($pos!=0){
		while ($pos!=$i){$pos++; $format=$format.$s[$pos]; }
		return $format;
}
else
{	return '';
	}
	}
function getimage($s){
		$type=getfiletype($s);
		switch ($type){
		case 'png':
			return ('png.png');
			break;	
		case 'jpg':
			return ('jpg.png');
			break;	
		case 'bmp':
			return ('bmp.png');
			break;	
		case 'gif':
			return ('gif.png');
			break;	
		case 'tif':
			return ('tif.png');
			break;
		case 'wav':
			return ('wav.png');
			break;	
			case 'mp3':
			return ('mp3.png');
			break;	
			case 'mpeg':
			return ('mpeg.png');
			break;	
			default: return('hz.png');
			break;
			}
	}
function getfilesize($path){
		$a=filesize($path);
		$a=$a/1024;
		if ($a<1023){
		$a=$a%1024;
		$a=$a.'Kb';}
		else{$a=$a/1024;if ($a<1023){
		$a=$a%1024;
		$a=$a.'Mb';}
		else{$a=$a/1024;
		if ($a<1023)
		$a=$a%1024;
		$a=$a.'Gb';}
		}
		return $a;
	}

$section=$_GET['section'];
if($dir=opendir($section)):
		while (false!==($file=readdir($dir))) {
			if($file!='.' and $file!='..'):
			$dirr=1;
				$s = $file;
				$type=is_dir($section.'/'.$s);
				if($type){
				$f=$f.'<tr><td><a href="files.php?section='.$section.'/'.$s.'"><img src="style/folder.png" width="16" height="16">&nbsp;';
				$f=$f.shortname($s);
				$f=$f.'</td><td width="6%">folder</td><td width="4%" ></td></tr>';
				print $f;
				$f='';}
				//<td align="right" width="15%"><a href="files.php?section='.$section.'&funct=unlink&obj='.$s.'"><img src="style/cancel.png" width="16" height="16"></td>
			endif;
		}
			
		endif;
		if($dir=opendir($section)):

		while (false!==($file=readdir($dir))) {
			if($file!='.' and $file!='..'):
			$dirr=1;
				$s = $file;
				$type=is_dir($section.'/'.$s);
				if(!$type){
				$f=$f.'<tr><td><img src="style/'.getimage($s).'" width="16" height="16">&nbsp;';
                if ((getfiletype($s)=='png') or (getfiletype($s)=='gif') or (getfiletype($s)=='jpg')) {
                $f=$f.'<a href='.$section.'/'.$s.' rel="lightbox[currentfolder]" title='.shortname($s).'>'.shortname($s).'</a>';}
                else{
				$f=$f.shortname($s);}
				$f=$f.'</td><td width="6%">'.getfiletype($s).'</td><td width="4%" >'.getfilesize($section.'/'.$s).'</td></tr>';
				print $f;
				//<td align="right" width="15%"><a href="files.php?section='.$section.'&funct=unlink&obj='.$s.'"><img src="style/cancel.png" width="16" height="16"></td>
				$f='';}
				
			endif;
		}
		
	
	
		endif;
		
if($dirr==0):
print '<tr><td><img src="style/9.png" width="128" height="128"></td><td align="left"><h2>This folder empty</h2></td><td></td></tr>';
endif;
?>
</table>
<table width="100%" border="0">
</table>

<table width="100%" border="0">
  
  <tr>
    <td></td>
  </tr>
</table></div>
</body>
</html>