<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "If you instead want to drop all your local changes and commits, fetch the latest history from the server and point your local master branch at it like this";
fwrite($myfile, $txt);
$myfile = fopen("newfile.txt", "a") or
die("Unable to open file!");
$txt = "In your working directory to fetch and merge remote changes. \n";
fwrite($myfile, $txt);
$txt = "to merge another branch into your active branch (e.g. master), use\n";
fwrite($myfile, $txt);
fclose($myfile);
?>