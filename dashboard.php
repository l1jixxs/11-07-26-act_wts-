<?php
include 'db.php';

session_start();

if (isset{$_SESSION['user_id']}){
    header("Location: index.php");
    exit;
}

$correct_username = "admin";
$correct_password = md5("password");

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = $_POST['username']
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href = https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel=stylesheet> 
</head> 
<body class="bg-light>
    <h1 "Welcome, <? htmlspecialchars ($_SESSION ['username']) ?>>
    
    
</body>
</html>