<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>File Upload system</h2>
    <form action="upload.php" enctype="multipart/form-data" method="post">
        <input type="file" name="myfile" required>
        <br><br>
        <button type="submit">Upload</button>

    </form>
    <!?php
    print_r($_FILES)
    ?>
</body>
<!?php
if(isset($_FILES['myfile'])){
    $fileName=$_FILES['myfile']['name'];
    $fileSize=$_FILES['myfile']['size'];
    $fileError=$_FILES['myfile']['error'];
    $tempName=$_FILES['myfile']['tmp_name'];
    if($fileError===0){
        move_uploaded_file($tempName,"uploads/".$fileName);
        echo "file uploaded successfully";
        echo "<a href='download.php?file=$fileName'>Download File</a>";
    }
    else{
        echo "file upload failed";
    }
}
?>
</html>
