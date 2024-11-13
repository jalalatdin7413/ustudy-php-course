<?php 

$file = fopen("files/file.txt", "w");
fwrite($file, "Khalkabad located in Kegeyli.");
fclose($file);

$file = fopen("files/file.txt", "r");
$content = fread($file, filesize("files/file.txt"));
fclose($file);

echo $content;


echo "<br><br>";

$filename = "files/file.txt";
if (file_exists($filename)) {

$file = fopen("files/file.txt", "a");
fwrite($file, "Yeah, it is also attraction \n");
fclose($file);

} else {
    $file = fopen($filename, "w");
    fwrite($file, "Bul birinshi qatar. /n");
    fclose($file);
}

echo "<br><br>";