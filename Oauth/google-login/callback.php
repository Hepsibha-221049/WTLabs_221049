<?php
session_start();

$client_id = "35014410829-vclh5qhj677jbas907dc9ftn92rre8l6.apps.googleusercontent.com";
$client_secret = "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";
$redirect_uri = "http://localhost/google-login/callback.php";
echo $redirect_uri;

if(isset($_GET['code'])) {

    $code = $_GET['code'];
    $token_url = "https://oauth2.googleapis.com/token";

    $post_data = [
        "code" => $code,
        "client_id" => $client_id,
        "client_secret" => $client_secret,
        "redirect_uri" => $redirect_uri,
        "grant_type" => "authorization_code"
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $token_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $token = json_decode($response, true);

    if(isset($token['access_token'])) {

        $access_token = $token['access_token'];
        $user_info_url = "https://www.googleapis.com/oauth2/v2/userinfo?access_token=" . $access_token;

        $user_info = file_get_contents($user_info_url);
        $user = json_decode($user_info, true);

        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];

        header("Location: index.php");
        exit();

    } else {
        echo "Error getting access token.";
    }
}
?>
