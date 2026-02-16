<?php
session_start();

$client_id = "35014410829-vclh5qhj677jbas907dc9ftn92rre8l6.apps.googleusercontent.com";
$redirect_uri = "http://localhost/google-login/callback.php";

$scope = "email profile";

$auth_url = "https://accounts.google.com/o/oauth2/v2/auth?"
    . "client_id=" . urlencode($client_id)
    . "&redirect_uri=" . urlencode($redirect_uri)
    . "&response_type=code"
    . "&scope=" . urlencode($scope)
    . "&access_type=offline"
    . "&prompt=consent";

if(isset($_SESSION['email'])) {
    echo "Welcome " . $_SESSION['name'];
    echo "<br>Email: " . $_SESSION['email'];
    echo "<br><a href='logout.php'>Logout</a>";
} else {
    echo "<a href='$auth_url'>Login with Google</a>";
}
?>
