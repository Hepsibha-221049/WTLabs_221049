<?php
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$client_id=$_ENV["CLIENT_ID"];
$client_secret=$_ENV["CLIENT_SECRET"];
$code=$_GET['code'];
$url="https://github.com/login/oauth/access_token";
$data=[
    "client_id"=>$client_id,
    "client_secret"=>$client_secret,
    'code'=>$code
];
$options=[
    "http"=>[
        "header"=>"Content-type: application/x-www-form-urlencoded\r\nAccept: application/json\r\n",
        "method"=>"POST",
        "content"=>http_build_query($data),
    ],
];
$context=stream_context_create($options);
$response=file_get_contents($url,false,$context);
$result=json_decode($response,true);
$access_token=$result['access_token'];
//getting user info
$user_url="https://api.github.com/user";
$options = [
    'http' => [
        'header'  => "User-Agent: MyApp\r\nAuthorization: Bearer $access_token\r\n",
        'method'  => 'GET'
    ],
];

$context = stream_context_create($options);
$user_data = file_get_contents($user_url, false, $context);
$user = json_decode($user_data, true);

echo "<h3>Welcome " . $user['login'] . "</h3>";
echo "<img src='" . $user['avatar_url'] . "' width='100'>";
?>