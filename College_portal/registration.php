
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="signup_form" action="includes/signup.inc.php" method="POST">
        <h2>SignUp Form</h2><br><br>
        <input type="text"name="username"placeholder="Username"><br><br>
        <input type="email" name="email"placeholder="E-mail"><br><br>
        <input type="password"name="pwd"placeholder="Password"><br><br>
        <button name="signup_btn">SignUp</button>
    </form>
    <br><br>
    <form action="includes/login_inc.php"class="signup_form" method="POST">
        <h2>Login Form</h2><br><br>
        <input type="text"name="username"placeholder="Username"><br><br>
        <input type="password"name="pwd"placeholder="Password"><br><br>
        <button name="login">Login</button>

    </form>
</body>
</html>