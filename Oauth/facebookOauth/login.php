
<?php
session_start();
require __DIR__ .'/vendor/autoload.php';
$dotenv=Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$app_id=$_ENV['CLIENT_ID'];
$redirect_uri=$_ENV['REDIRECT_URI'];
$login_url="https://www.facebook.com/v18.0/dialog/oauth?client_id="
    . $app_id .
    "&redirect_uri=" . urlencode($redirect_uri) .
    "&scope=public_profile";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Support - Login</title>
</head>
<body>
    <h2>Student Support Portal</h2>
    <a href="<?php echo $login_url; ?>">
        <button>Login with Facebook</button>
    </a>
</body>
</html>