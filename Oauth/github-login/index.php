<?php
require 'vendor/autoload.php';
$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$client_id=$_ENV["CLIENT_ID"];
$redirect_uri="http://localhost/github-login/callback.php";
$auth_url="https://github.com/login/oauth/authorize?client_id=$client_id&redirect_uri=$redirect_uri&scope=user";
echo "<a href='$auth_url'>Login with Github</a>";
?>
