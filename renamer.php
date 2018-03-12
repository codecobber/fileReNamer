<?php
$dir='2017/april/';

// Sort in ascending order - this is default
$a = scandir($dir);

//rename("2017/april/bunny.txt", "2017/april/bunny2.txt");

foreach ($a as $name_of_file) {
	if ($name_of_file == "." || $name_of_file == ".."){
		continue;
	}
	
	$oldname = $name_of_file;
	echo $oldname . "<br>";
	$tempName = str_replace(" ","_",$name_of_file);
	rename($dir.$name_of_file, $dir.$tempName);
}
?>
