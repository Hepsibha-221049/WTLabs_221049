<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location:login.php");
    exit();
}
$user=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <h2>Welcome to Student Support Portal</h2>
    <p> Name:<?php echo $user->name;?></p>
    <p> Email:<?php echo $user->email;?></p>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</body>
</html>