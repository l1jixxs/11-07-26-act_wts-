<?php

include 'db.php';

if (isset($_SESSION['user_id'])){
    header('Location: dashboard.php');
    exit;
}   

$error = '';
$success = '';

if (isset($_POST['resgister'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST('password');
    $confirm = $_POST('confirm');


    if (password != $confirm){
        $error = 'Password Incorrect!';
    }
    else{
        $check = mysqli_query($conn, "SELECT id FROM users WHERE username = '$username'");

        if (mysqli_num_rows{$check} > 0){
            $error = 'Username error';
        }
        else{
            $
        }
    }



   
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>