<?php 
include 'db.php';

if (isset($_SESSION['user_id'])){
    header('Location: dashboard.php');
    exit;
}   

$error = '';

if (isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST('password');
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        header("Location: dashboard.php");
        exit;
    }
    else {
        $error = 'Error! Please try again.';
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href = https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css rel=stylesheet> 
</head>
<body class="bg-light">
    <div class = "container">
        <from method = "post">
            <div class = "mb-3">
                <label class="form-label">Username</label>
                <input type = "text" name="username" class="form-control" required>
            </div>
            <div class = "mb-3">
                <label class="form-label">Password</label>
                <input type = "password" name="password" class="form-control" required>
            </div>
            <button type = "submit" name="login" class="btn btn-primary" >Login</button>
        </form>
        <p class="text-center mt-3 mb-8">No account? <a href='register.php'>Register</a></p>
    </div>
                
    
</body>
</html>