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



$file = fopen("files/file.txt", "w");
fwrite($file, "Real Madrid.");
fclose($file);

$file = "file.txt";
$handle = fopen($file, "a");
$new_line = "The best club. \n";

fwrite($handle, $new_line);

fclose($handle);

echo "Taza qatar qosildi!";

echo "<br><br>";

//3-esap

$file = "file.txt";

$handle = fopen($file, "r");

$line_count = 0;

while(!feof($handle)) {
    $line = fgets($handle);
    if ($line !== false) {
        $line_count++;
    }
}
fclose($handle);

echo "Fayldagi satrlar sani: " . $line_count++;

echo "<br><br>";
// 4-esap

$filename = "files/format.html";
$htmlcontent = "<h1>Title</h1><p>This is a paragtaph with <strong>bold</strong:> text.</p>";
file_put_contents($filename, $htmlcontent);
echo "HTML content written to '$htmlcontent'. ";

echo "<br>";

$filesize = filesize($filename);

echo "Fayl olshemi: $filesize bayt.";

echo "<br><br>";

// 5-esap

$dirname = "new_car";

if(!is_dir($dirname)) {
    mkdir($dirname); 
    echo "Directory '$dirname' bar.";
} else {
    echo "directory '$dirname' joq";
}

$fileName = $dirname . "/my_file.txt";

$fileHandle = fopen($fileName, "w");

$textWrite = [
    "First qatar. \n",
    "second qatar. \n",
];
fclose($fileHandle);

echo "Fayl jaratildi";

echo "<br><br>";

// 6-esap




