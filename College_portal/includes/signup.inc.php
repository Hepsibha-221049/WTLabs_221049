<?php
if($_SERVER["REQUEST_METHOD"]=="POST"&&isset($_POST["signup_btn"])){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    try{
    require_once __DIR__."/dbh.inc.php";
    require_once "signup_view.inc.php";
    require_once "signup_model.inc.php";
    require_once "signup_contr.inc.php";
    $errors=[];

    if(is_input_empty($username,$email,$pwd)){
        $errors["empty_input"]="fill in all the fields";
    }
    if(is_email_invalid($email)){
        $errors["invalid_email"]="Inorrect Email info!";
    }
    if(is_username_taken($pdo,$username)){
        $errors["user_taken"]="User already exists";
    }
    if(is_email_registered($pdo,$email)){
        $errors["email_taken"]="E-mail already exists";
    }
    if($errors){
        check_errors($errors);
    }
    else{
        create_user($pdo,$username,$email,$pwd);
        no_errors();
        header("Location: ../registration.php");
        die();
    }
    // $query="INSERT INTO students(username,email,pwd)VALUES(:username,:email,:pwd)";
    // $stmt=$pdo->prepare($query);
    // $stmt->bindParam(":username",$username);
    // $stmt->bindParam(":email",$email);
    // $stmt->bindParam(":pwd",$pwd);
    // $stmt->execute();
    // // echo "inserted suessfully!";
    // header("Location: ../registration.php");
    // die();
    }catch(PDOException $e){
        die("Query Failed:".$e->getMessage());
    }
}
else{
    header("Location: ../registration.php");
    exit();
}