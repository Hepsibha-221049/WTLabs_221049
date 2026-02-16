<?php
// $file=file("example.txt");
// echo "$file";

// if(file_exists("example.txt")){
//     echo "yes it exists";
// }


// $contents=file_get_contents("example.txt");
// echo "$contents";

// $write=file_put_contents("example2.txt","hello world");
// echo "$write";#no of characters.

// echo fileatime("example1.txt");
$file=fopen("example.txt","r+");
$file_contents=fread($file,filesize("example.txt"));
fwrite($file,"hello");
$file_contents_modify=fread($file,filesize("example.txt"));
echo "$file_contents";
fclose($file);
// echo file_get_contents("example.txt");
echo filetype("example.txt");

echo "<br>";
echo fileatime("example.txt");
echo "<br>";
echo filemtime("example.txt");
echo "<br>";
echo filectime("example.txt");
echo "<br>";
echo fileperms("example.txt");
echo "<br>";
echo fileowner("example.txt");
echo "<br>";
echo filegroup("example.txt");
echo "<br>";
echo fileinode("example.txt");
copy("example.txt","copied.txt");
echo getcwd();
// rename("example.txt", "test.txt");
// rename("text.txt","example.txt");
if(is_file("example.txt")){
    echo "it is a file";
}
if (is_dir("uploads")) {
    echo "It is a directory";
}
// readdir()

// Reads one entry at a time from opened directory

// closedir()

// Closes directory handle
$files=scandir("uploads");
print_r($files);
echo "<br>";
chdir("downloads");
echo getcwd();
echo "<br>";
closedir("");
$dir=opendir("downloads");
while($file=readdir($dir)){
    echo $file."<br>";
}
?>
