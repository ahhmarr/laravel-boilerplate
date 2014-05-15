<?php 
$directory="circle/Numix-Circle/48x48/apps/";
$type="circle";
$files=scandir(getcwd()."/".$directory);
foreach($files as $f)
{
	$ext=substr($f, -3);
	if(strtolower($ext)=="svg")
	{
		echo '<img src="'.$directory."/$f".'" width="50">'.$f."<br/>";
	}
}