<?php

session_start();
if (isset($_SESSION["admin"])) {
    header("Location: admin.php");
    exit;
}

error_reporting(0);
$adminemail = 'admin';
$password = 'admin';

if (isset($_POST['submit'])) {
    if ($_POST['email'] == $adminemail && $_POST['password'] == $password) {
        //Membuat Session
        $_SESSION["admin"] = true;
        header("Location: admin.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylea.css">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Login Admin | Surat Online RT. 07 </title>
</head>

<body class='body'>


    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-email">
            <p class="login-text" style="font-size: 1.5rem; font-weight: 800;">ADMIN </p>
            
            <p class="login-text" style="font-size: 1.2rem; font-weight: 600;"> Silahkan Login terlebih dahulu</p>

            <div class="input-group">
                <input type="text" placeholder="Username" autocomplete="off" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>

</html>