<?php
session_start();
require __DIR__ .'/vendor/autoload.php';
$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$app_id=$_ENV['CLIENT_ID'];
$app_secret=$_ENV['CLIENT_SECRET'];
$redirect_uri=$_ENV['REDIRECT_URI'];
if(isset($_GET['code'])){
    $code=$_GET['code'];
    $token_url="https://graph.facebook.com/v18.0/oauth/access_token?"
    . "client_id=" .$app_id
    . "&redirect_uri=" . urlencode($redirect_uri)
    . "&client_secret=" . $app_secret
    . "&code=" . $code;
$response=file_get_contents($token_url);
$response=json_decode($response);
$access_token=$response->access_token;
$user_url= "https://graph.facebook.com/me?fields=id,name,email&access_token=" . $access_token;
$user_data=file_get_contents($user_url);
$user_data=json_decode($user_data);
$_SESSION['user']=$user_data;
header("Location:dashboard.php");
exit();
}else{
    echo "Login failed";
}
?>