<?php
    $host="127.0.0.1";
    $dbusername="root";
    $dbname="college_db";
    $dbpassword=''; 
try{
    $pdo=new PDO("mysql:host=$host;port=3307;dbname=$dbname",$dbusername,$dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   #echo "Database connection successful!";
}catch(PDOException $e){
    die("Query Failed:".$e->getMessage());
}
