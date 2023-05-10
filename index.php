<?php

session_start();
if (isset($_SESSION["surat"])) {
    header("Location: home.php");
    exit;
}
include 'config.php';

error_reporting(0);


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM daftar_akun_warga WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["surat"] = true;
        header("Location: home.php");
    
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
    <title>Login  | Surat Online RT. 07 </title>
</head>

<body class='body'>


    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 1.5rem; font-weight: 800;"> Selamat datang di Surat Online Warga RT. 07</p>
            <center> <img class="surat-login" src="download/Illustrasi Surat 1.avif"> </center>
            <p class="login-text" style="font-size: 1.2rem; font-weight: 600;"> Silahkan Login terlebih dahulu</p>

            <div class="input-group">
                <input type="email"  placeholder="Email" autocomplete="off" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Belum punya akun? <a href="daftar.php">Daftar</a></p>
        </form>
    </div>
</body>

</html>