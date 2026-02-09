<?php
if(!isset($_GET['file'])){
    die("No Fle Specifed");
}
$fileName=basename($_GET['file']);
$filePath="uploads/".$fileName;
if(!file_exists($filePath)){
    die("File Not Found");
}
header("Content-Type:appliation/octet-stream");
header("Content-Disposition:attachment;filename=".basename($fileName));
header("Content-Length:".filesize($fileName));
readfile($file);
exit;